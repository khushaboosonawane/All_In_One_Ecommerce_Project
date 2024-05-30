<?php
class AdminController extends CI_Controller{
    function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }
    private function nav(){
        $this->load->view("admin/navbar");
    }
    private function footer(){
        $this->load->view("admin/footer");
    }
    public function index(){
        $this->nav();
        $this->load->view("admin/index");
        $this->footer();
    }
    public function category(){
        $data['cat_list']=$this->mymodel->select("category");
        $this->nav();
        $this->load->view("admin/category",$data);
        $this->footer();
    }
    public function save_category(){
        $_POST['category_status']="Active";
        $_POST['entry_date']=date('Y-m-d H:iA');
        $this->mymodel->insert("category",$_POST);
        redirect(base_url()."admincontroller/category");

    }
    public function edit_category_data($cat_id){
        $data['cat_data']=$this->mymodel->edit_data("category",['cat_id'=>$cat_id]);
        $this->nav();
        $this->load->view("admin/edit_categroy",$data);
        $this->footer();
    }
    public function update_category(){
        $this->mymodel->update('category',['cat_id'=>$_POST['cat_id']],$_POST);
        redirect(base_url()."admincontroller/category");
    }
    public function delete_category($cat_id){
        $this->mymodel->delete("category",['cat_id'=>$cat_id]);
        redirect(base_url()."admincontroller/category");
    }
    public function subcategory(){
        $this->nav();
        $data['cat_data']=$this->mymodel->select("category");
        $data['sub_cat_data']=$this->mymodel->select_sub_cat();
        $this->load->view("admin/subcategory",$data);
        $this->footer();
    }
    public function save_sub_category(){
        $_POST['sub_cat_status']="Active";
        $_POST['sub_cat_date']=date('Y-m-d H:iA');
        $this->mymodel->insert("sub_category",$_POST);
        redirect(base_url("admincontroller/subcategory"));
    }
    public function edit_sub_category_data($sub_cat_id){
        $this->nav();
        $data['cat_data']=$this->mymodel->select("category");
        $data['sub_cat_data']=$this->mymodel->select_where("sub_category",['sub_cat_id'=>$sub_cat_id]);
        $this->load->view("admin/edit_sub_category_data",$data);
        $this->footer();
    }
    public function update_sub_category(){
        $_POST['sub_cat_date']=date('Y-m-d H:iA');
        $this->mymodel->update("sub_category",['sub_cat_id'=>$_POST['sub_cat_id']],$_POST);
        redirect(base_url("admincontroller/subcategory"));
    }
    public function delete_sub_category($sub_cat_id){
        $this->mymodel->delete("sub_category",["sub_cat_id"=>$sub_cat_id]);
        redirect(base_url("admincontroller/subcategory"));
    }
    public function add_product(){
        $this->nav();
        $data['cat_data']=$this->mymodel->select("category");
        $this->load->view("admin/add_product",$data);
        $this->footer();
    }
    public function getSubCateUseAjax($cat_id){
        $data=$this->mymodel->select_where("sub_category",['cat_id'=>$cat_id,'sub_cat_status'=>'Active']);
        echo json_encode($data);

    }
    public function save_product(){
        // echo "<pre>";
        // print_r($_POST);
        // print_r($_FILES);
        $fnames=[];
        for($i=0;$i<count($_FILES['product_image']['name']);$i++){
            $file_name=time().rand(1111,9999).$_FILES['product_image']['name'][$i];
            array_push($fnames,$file_name);
            move_uploaded_file($_FILES['product_image']['tmp_name'][$i],"public/upload/product/$file_name");
        }
        $_POST['product_image']=implode("&&",$fnames);
        $_POST['entry_date']=date("Y-m-d H:iA");
        $_POST['status']='Active';
        $this->mymodel->insert("product",$_POST);
        redirect(base_url()."admincontroller/product_list");

    }
    public function add_slider(){
        $this->nav();
        $data['slider_data']=$this->mymodel->select("slider");
        $this->load->view("admin/add_slider",$data);
        $this->footer();
    }
    public function delete_slider($sli_id){
        $this->mymodel->delete("slider",['sli_id'=>$sli_id]);
        redirect(base_url()."admincontroller/add_slider");
    }
    public function edit_slider($sli_id){
        $data['slider']=$this->mymodel->select_where("slider",['sli_id'=>$sli_id]);
        $this->nav();
        $this->load->view("admin/edit_slider.php",$data);
        $this->footer();
    }
    public function update_slider(){
        if($_FILES['slider_image']['name']!=""){
            $file_name=$this->mymodel->select_where("slider",['sli_id'=>$_POST['sli_id']]);
            $fname=$file_name[0]['slider_image'];
            $file_path="public/upload/slider/$fname";
            unlink($file_path);
           $filename=time().rand(1111,9999).$_FILES['slider_image']['name'];
           move_uploaded_file($_FILES['slider_image']['tmp_name'],"public/upload/slider/$filename");
           $_POST['slider_image']=$filename;
           $this->mymodel->update("slider",['sli_id'=>$_POST['sli_id']],$_POST);
           redirect(base_url()."admincontroller/add_slider");
        }else{
            $this->mymodel->update("slider",['sli_id'=>$_POST['sli_id']],$_POST);
           redirect(base_url()."admincontroller/add_slider");
        }
    }
    public function save_slider(){
        echo "<pre>";
        print_r($_POST);
        print_r($_FILES);
        $filename=time().rand(1111,9999).$_FILES['slider_image']['name'];
        move_uploaded_file($_FILES['slider_image']['tmp_name'],"public/upload/slider/".$filename);
        $_POST['slider_image']=$filename;
        $this->mymodel->insert("slider",$_POST);
        redirect(base_url()."admincontroller/add_slider");
    }
    public function product_list(){
        $this->nav();
        $data['product']=$this->mymodel->select_product();
        // echo "<pre>";
        // print_r($data['product']);
        $this->load->view("admin/product_list",$data);
        $this->footer();
    }
    public function edit_product($pro_id){
        $this->nav();
        $data['cat_data']=$this->mymodel->select("category");
        $data['product']=$this->mymodel->edit_product($pro_id);
        $this->load->view("admin/edit_product",$data);
        $this->footer();
    }
    public function update_product(){
        if(count($_FILES['product_image']['name'])>0){
            $fnames=[];
            for($i=0;$i<count($_FILES['product_image']['name']);$i++){
                $file_name=time().rand(1111,9999).$_FILES['product_image']['name'][$i];
                array_push($fnames,$file_name);
                move_uploaded_file($_FILES['product_image']['tmp_name'][$i],"public/upload/product/$file_name");
            }
            $_POST['product_image']=implode("&&",$fnames);
            $_POST['entry_date']=date("Y-m-d H:iA");
            $_POST['status']='Active';
            $this->mymodel->update("product",["pro_id"=>$_POST['pro_id']],$_POST);
            redirect(base_url()."admincontroller/product_list");
        }else{
            $_POST['entry_date']=date("Y-m-d H:iA");
            $_POST['status']='Active';
            $this->mymodel->update("product",['pro_id'=>$_POST['pro_id']],$_POST);
            redirect(base_url()."admincontroller/product_list");
        }
    }
    public function delete_product($pro_id){
        $this->mymodel->delete("product",['pro_id'=>$pro_id]);
        redirect(base_url()."admincontroller/product_list");
    }
    public function pending_order(){
        $this->nav();
        // $data['orders']=$this->mymodel->select_where("order_tbl",['order_status'=>'pending']);
        $data['orders']=$this->mymodel->get_order_details("pending");

        $this->load->view("admin/pending_order",$data);
        $this->footer();
    }
    public function view_order_details($order_id){
        $this->nav();
        $data['order_det']=$this->mymodel->select_where("order_tbl",['order_id'=>$order_id]);
        $data['order_products']=$this->mymodel->select_where('order_deatils',['order_id'=>$order_id]);
        $this->load->view("admin/view_order_details",$data);
        $this->footer();
    }
    public function dispatch_order($order_id){
        $data['order_status']="dispatched";
        $data['dispatched_date']=date('Y-m-d');
        $cond=['order_id'=>$order_id];
        $this->mymodel->update("order_tbl",$cond,$data);
        redirect(base_url()."admincontroller/pending_order");
    }
   public function dispatch_order_details(){
      $this->nav();
      $data['orders']=$this->mymodel->get_order_details("dispatched");
      $this->load->view("admin/dispatch_order_details",$data);
      $this->footer();
   }
   public function reject_order($order_id){
    $data['order_status']="rejected";
    $data['reject_date']=date('Y-m-d');
    $cond=['order_id'=>$order_id];
    $this->mymodel->update("order_tbl",$cond,$data);
    redirect(base_url()."admincontroller/pending_order");
    }
    public function rejected_order_details(){
        $this->nav();
        $data['orders']=$this->mymodel->get_order_details("rejected");
        $this->load->view("admin/rejected_order_details",$data);
        $this->footer();
    }
    public function deliver_order($order_id){
        $data['order_status']="deliver";
        $data['deliver_date']=date('Y-m-d');
        $cond=['order_id'=>$order_id];
        $this->mymodel->update("order_tbl",$cond,$data);
        redirect(base_url()."admincontroller/pending_order");
    }
    public function delivered_order_details(){
        $this->nav();
        $data['orders']=$this->mymodel->get_order_details("deliver");
        $this->load->view("admin/delivered_order_details",$data);
        $this->footer();
    }
}
?>