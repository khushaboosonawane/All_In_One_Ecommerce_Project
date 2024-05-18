<?php
class AdminController extends CI_Controller{
    public function index(){
        $this->load->view("admin/navbar");
        $this->load->view("admin/index");
        $this->load->view("admin/footer");
    }
}
?>