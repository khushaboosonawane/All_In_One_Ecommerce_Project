<?php
class AdminController extends CI_Controller{
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
        $this->nav();
        $this->load->view("admin/category");
        $this->footer();
    }
    public function subcategory(){
        $this->nav();
        $this->load->view("admin/subcategory");
        $this->footer();
    }
}
?>