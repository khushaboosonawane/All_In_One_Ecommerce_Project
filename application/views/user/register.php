<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>

<style>
    .form-2-wrapper {
    /* background: #9d00ff29; */
    background-image: linear-gradient(to right, #D500F9, #FFD54F);
    padding: 80px;
    border-radius: 8px;
}
input.form-control{
    padding: 11px;
    border: none;
    border: 2px solid #405c7cb8;
    border-radius: 30px;
    background-color: transparent;
    font-family: Arial, Helvetica, sans-serif;
   
   
}
input.form-control:focus{
    box-shadow: none !important;
    outline: 0px !important;
    background-color: transparent;
}
button.login-btn{
    background: #000;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 30px;
}
.register-test a{
    color: #000;
}
.social-login button{
    border-radius: 30px;
}
</style>


<div class="container my-3">
  <div class="row d-flex justify-content-between align-items-center">
    <!-- Left Blank Side -->
    <div class="col-lg-6">
        <h4>We Are More Than Just a Company</h4>
        <p><small class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small></p>
    </div>

    <!-- Right Side Form -->
    <div class="col-lg-6 d-flex align-items-center justify-content-center right-side">
      <div class="form-2-wrapper">
        <div class="logo text-center">
          <h2>New User,</h2>
        </div>
        <h2 class="text-center mb-4">Register Here</h2>
        <form action="<?= base_url() ?>usercontroller/registration_process" method="post" enctype="multipart/form-data">
        <div class="mb-3 form-box">
            <input type="text" class="form-control" id="email" name="user_name" placeholder="Enter Your Name" required style="color:white">
          </div>
          <div class="mb-3 form-box">
            <input type="number" class="form-control" id="email" name="user_mobile" placeholder="Enter Your Mobile" required style="color:white">
          </div>

          <div class="mb-3 form-box">
            <input type="email" class="form-control" id="email" name="user_email" placeholder="Enter Your Email" required style="color:white">
          </div>
          <div class="mb-3 form-box">
            <input type="file" class="form-control" id="email" name="user_img" placeholder="Enter Your Email"  style="color:white">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="password1" name="user_password" placeholder="Enter Your Password" required onkeyup="checkpassword()">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="password2"  placeholder="Confirm Your Password" required onkeyup="checkpassword()">
          </div>
         <span class="text-danger" style="font-weight:bold" id="password_error"></span>
          <button type="submit" class="btn btn-outline-dark login-btn w-100 mb-3" disabled id="login_btn">Login</button>
         
        </form>

        <!-- Register Link -->
        <p class="text-center register-test mt-3">already have an account ? <a href="<?= base_url() ?>usercontroller/user_login" class="text-decoration-none">Login here</a></p>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function checkpassword(){
        var pass1=$("#password1").val();
        var pass2=$("#password2").val();
        if(pass1.length>5){
            if(pass1==pass2){
            $("#password_error").html("");
            document.getElementById("login_btn").removeAttribute("disabled");
            }else{
                $("#password_error").html("password dosent match");
                document.getElementById("login_btn").setAttribute("disabled","true");
            }
        }else{
            $("#password_error").html("password must be greater than 6 charachter");
        }
      
    } 
</script>
