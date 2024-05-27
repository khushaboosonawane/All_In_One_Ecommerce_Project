<?php
defined("BASEPATH") or exit("no direct script is allowed");
?>
<style>
    body{
        background:url("https://img.freepik.com/premium-vector/ecommerce-online-shopping-marketing-concept-vector-stock-illustration_618588-583.jpg");
        background-repeat:no-repeat;
        background-position:center 20px;
        background-size:cover;
    }
    .form-2-wrapper {
    width:100%;
    background: rgba(0,0,0,0.3);
    padding: 80px;
    border-top-left-radius: 100px;
    border-bottom-right-radius: 100px;
    border:1px solid white;
}
input.form-control{
    color:white;
    padding: 11px;
    border: none;
    border: 2px solid white;
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
<div class="container">
  <div class="row d-flex justify-content-center my-3">
    <!-- Left Blank Side -->
    <!-- <div class="col-lg-6"></div> -->

    <!-- Right Side Form -->
    <div class="col-lg-6 d-flex align-items-center justify-content-center right-side">
      <div class="form-2-wrapper">
        
        <h2 class="text-center mb-4 text-white">Login</h2>
        <form action="<?= base_url() ?>usercontroller/check_user_login" method="post">
          <div class="mb-3 form-box">
            <input type="email" class="form-control" id="email" name="user_email" placeholder="Enter Your Email" required style="color:white">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="password" name="user_password" placeholder="Enter Your Password" required style="color:white">
          </div>
          
          <button type="submit" class="btn btn-outline-dark login-btn w-100 mb-3">Login</button>
         
        </form>
         <!-- Register Link -->
         <p class="text-center register-test text-white mt-3">Don't have an account?
             <a href="<?= base_url() ?>usercontroller/register" class="text-decoration-none text-white">Register here</a></p>

      </div>
    </div>
  </div>
</div>
