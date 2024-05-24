<?php
class UserController extends CI_Controller{
    private function navbar(){
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
        $this->load->view("user/index");
        $this->footer();
    }
    public function show_product_with_sub_category($sub_cat_id){
        $this->navbar();
        $this->load->view("user/show_product_with_sub_category");
        $this->footer();
    }
}
?>