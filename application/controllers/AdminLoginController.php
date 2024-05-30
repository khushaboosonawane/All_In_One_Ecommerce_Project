<?php
class AdminLoginController extends CI_Controller{
    function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        if(isset($_SESSION['admin_id'])){
            redirect(base_url()."admincontroller/");
            exit();
        }
    }
    public function index(){
        
        $this->load->view("login/admin_login");
    }
    public function process(){
        // echo "<pre>";
        // print_r($_POST);
        if(isset($_POST['admin_email']) && isset($_POST['admin_password'])){
            $cond=['admin_email'=>$_POST['admin_email'],"admin_password"=>$_POST['admin_password']];
            $data=$this->mymodel->select_where("admin_details",$cond);
            if(count($data)>0){
                $_SESSION['admin_id']=$data[0]['admin_id'];
                redirect(base_url()."admincontroller/");
            }else{
                $_SESSION['error']="Invalid Login";
                redirect(base_url()."adminlogincontroller/index");
            }
        }else{
            $_SESSION['error']="Invalid Login";
            redirect(base_url()."adminlogincontroller/index");
        }

    }
}
?>