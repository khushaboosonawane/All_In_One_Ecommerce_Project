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
        $_POST['category_status']="active";
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
        $_POST['sub_cat_status']="active";
        $_POST['sub_cat_date']=date('Y-m-d H:iA');
        $this->mymodel->insert("sub_category",$_POST);
        redirect(base_url("admincontroller/subcategory"));
    }
    // public function edit_sub_category_data($sub_cat_id){
    //     $this->nav();
    //     $data['cat_data']=$this->mymodel->select("category");
    //     $data['sub_cat_data']=$this->mymodel->select_sub_cat_data($sub_cat_id);
    //     $this->load->view("admin/edit_sub_category_data",$data);
    //     $this->footer();
    // }

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
    
}
?>