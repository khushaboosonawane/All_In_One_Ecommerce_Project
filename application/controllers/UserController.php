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
            $data['user_data']=$this->mymodel->select_where("users",$_SESSION['user_id']);
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
        
        $data['sub_cat_data']=$this->mymodel->select_where("product",['sub_cat_id'=>$sub_cat_id]);
        $this->load->view("user/show_product_with_sub_category",$data);
        $this->footer();
    }
    public function product_information($pro_id){
        $this->navbar();
        $data['category']=$this->mymodel->select("category");
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
    
}
?>