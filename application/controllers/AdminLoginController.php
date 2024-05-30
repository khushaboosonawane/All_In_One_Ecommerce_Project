<?php
class AdminLoginController extends CI_Controller{
    public function index(){
        
        $this->load->view("login/admin_login");
    }
}
?>