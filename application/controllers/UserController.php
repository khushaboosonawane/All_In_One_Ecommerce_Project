<?php
class UserController extends CI_Controller{
    public function check_user_login(){
        if($_POST['user_email'] && $_POST['user_password']){
            $data['users']=$this->mymodel->select_where("users",['user_email'=>$_POST['user_email'],'user_password'=>$_POST['user_password']]);
            if(count($data['users'])>0){
               $_SESSION['user_id']=$data['users'][0]['user_id'];
               $_SESSION['message']="Welcome ".$data['users'][0]['user_name']." Login success";
               redirect(base_url()."usercontroller/index");
            }else{
                $_SESSION['error_msg']="Login Fail Enter Valid Details";
                redirect(base_url()."usercontroller/user_login");
            }
        }
        
    }
    private function navbar(){
        if(isset($_SESSION['user_id'])){
            $data['user_data']=$this->mymodel->select_where("users",["user_id"=>$_SESSION['user_id']]);
        }
        $data['category']=$this->mymodel->select_where("category",['category_status'=>"active"]);
        foreach($data['category'] as $key=>$row){
            $data['category'][$key]['sub_cat_list']=$this->mymodel->select_where("sub_category",["cat_id"=>$row['cat_id']]);
        }
        // echo "<pre>";
        // print_r($data['category']);
        $this->load->view("user/navbar",$data);
    }
    private function footer(){
        $this->load->view("user/footer");
    }
    public function index(){
        $this->navbar();
        $data['slider']=$this->mymodel->select("slider");
        $data['trending_product']=$this->mymodel->select("product",['status'=>"active","product_label"=>"Trending"]);
        $this->load->view("user/index",$data);
        $this->footer();
    }
    public function show_product_with_sub_category($sub_cat_id){
        $this->navbar();
        if(isset($_SESSION['user_id'])){
            $cond=['user_id'=>$_SESSION['user_id']];
            $data['cart_data']=$this->mymodel->select_where("user_cart",$cond);
        }
        $data['sub_cat_data']=$this->mymodel->select_where("product",['sub_cat_id'=>$sub_cat_id]);
        $this->load->view("user/show_product_with_sub_category",$data);
        $this->footer();
    }
    public function product_information($pro_id){
        $this->navbar();
        $data['category']=$this->mymodel->select("category");
        if(isset($_SESSION['user_id'])){
            $cond=['pro_id'=>$pro_id,"user_id"=>$_SESSION['user_id']];
            $data['cart']=$this->mymodel->select_where("user_cart",$cond);
        }else{
            $data['cart']=[];
        }
        $data['product_info']=$this->mymodel->select_where("product",['pro_id'=>$pro_id]);
        $this->load->view("user/product_information",$data);
        $this->footer();
    }
    public function user_login(){
        $this->navbar();
        $this->load->view("user/user_login");
        $this->footer();
    }
    public function register(){
        $this->navbar();
        $this->load->view("user/register");
        $this->footer();
    }
    public function registration_process(){
        // create table users(user_id integer primary key auto_increment,user_name varchar(1000),user_mobile varchar(10),uesr_email varchar(1000),user_password varchar(1000),user_img text);
        if($_FILES['user_img']['name']!=""){
            $filename=time().rand(1111,9999).$_FILES['user_img']['name'];
            move_uploaded_file($_FILES['user_img']['tmp_name'],"public/upload/user_login_img/$filename");
            $_POST['user_img']=$filename;
            $this->mymodel->insert("users",$_POST);
            $_SESSION['message']="account created successfully";
            redirect(base_url()."usercontroller/user_login");
        }else{
            $this->mymodel->insert("users",$_POST);
            $_SESSION['message']="account created successfully";
            redirect(base_url()."usercontroller/user_login");
        }
    }
    public function add_to_cart($pro_id){
       
        if(isset($_SESSION['user_id'])){

            $data=['pro_id'=>$pro_id,'user_id'=>$_SESSION['user_id'],'qty'=>1];
            $cond=['pro_id'=>$pro_id,'user_id'=>$_SESSION['user_id']];
            $result=$this->mymodel->select_where("user_cart",$cond);
            if(count($result)==0)
                $this->mymodel->insert("user_cart",$data);
            $_SESSION['message']="Product addedd successfully";
            redirect(base_url()."usercontroller/product_information/".$pro_id);
        }else{
            $_SESSION['message']="You Must Have To Login First";
            redirect(base_url()."usercontroller/user_login");
        }

    }
    public function increase_cart_qty($pro_id){
        if(isset($_SESSION['user_id'])){
            $con=['pro_id'=>$pro_id,'user_id'=>$_SESSION['user_id']];
            $data=$this->mymodel->select_where("user_cart",$con);
            $newqty=$data[0]['qty']+1;
            $this->mymodel->update("user_cart",$con,['qty'=>$newqty]);
            echo json_encode($newqty);
        }else{
            echo json_decode(['status'=>'failed','msg'=>'invalid login']);
        }
    }
    public function decrease_cart_qty($pro_id){
      if(isset($_SESSION['user_id'])){
        $cond=['pro_id'=>$pro_id,"user_id"=>$_SESSION['user_id']];
        $data=$this->mymodel->select_where("user_cart",$cond);
        $newqty=$data[0]['qty']-1;
        if($newqty>=1){
            $data=$this->mymodel->update("user_cart",$cond,['qty'=>$newqty]);
            echo json_encode($newqty);
        }else{
            echo json_encode(1);
        }
      }  
    }
    public function view_profile($user_id){
        $data['user_data']=$this->mymodel->select_where("users",['user_id'=>$user_id]);
        $this->navbar();
        $this->load->view("user/user_profile",$data);
        $this->footer();
    }
    public function logout_account($user_id){
        $this->mymodel->delete("users",['user_id'=>$user_id]);
        unset($_SESSION['user_id']);
        redirect(base_url()."usercontroller/");
        
    }
    public function cart_page(){
        $this->navbar();
        $data['cart_data']=$this->mymodel->cartdeatils();
        // echo "<pre>";
        // print_r($data);
        $this->load->view("user/cart_page",$data);
        $this->footer();
    }
    public function removefromcart(){
        // echo"<pre>";
        // print_r($_POST['pro_id']);
        if(isset($_POST['pro_id'])){
            for($i=0;$i<count($_POST['pro_id']);$i++){
                $cond=['user_id'=>$_SESSION['user_id'],'pro_id'=>$_POST['pro_id'][$i]];
                $this->mymodel->delete("user_cart",$cond);
            }
            redirect(base_url()."usercontroller/cart_page");
        }else{
            echo "<script>";
            echo "alert('please select product')";
            echo "</script>";
            redirect(base_url()."usercontroller/cart_page");
        }
        
        
    }
    public function confirm_address(){
        $this->navbar();
        $data['user_data']=$this->mymodel->select_where("users",['user_id'=>$_SESSION['user_id']]);
        $this->load->view("user/confirm_address",$data);
        $this->footer();
    }
    public function place_order(){
        $cart_data=$this->mymodel->cartdeatils();
        $ttl=0;
        foreach($cart_data as $key=>$row){
           $ttl=$row['product_price']*$row['qty'];
        }
        $_POST['ttl_amount']=$ttl;
        $_POST['order_date']=date('Y-m-d');
        $_POST['order_status']="active";
        $_POST['status']="active";
    }
    
}
?>