<style>
   
#card {
  position: fixed;
  top: 50%;
  left:50%;
  transform:translate(-50%,-50%);
  width: 320px;
  display: block;
  margin: auto;
  text-align: center;
  font-family: 'Source Sans Pro', sans-serif;
}

#upper-side {
  padding: 2em;
  background-color: #00C851;
  display: block;
  color: #fff;
  border-top-right-radius: 8px;
  border-top-left-radius: 8px;
}

#checkmark {
  font-weight: lighter;
  fill: #fff;
  margin: -3.5em auto auto 20px;
}

#status {
  font-weight: lighter;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 1em;
  margin-top: -.2em;
  margin-bottom: 0;
}

#lower-side {
  padding: 2em 2em 5em 2em;
  background: #fff;
  display: block;
  border-bottom-right-radius: 8px;
  border-bottom-left-radius: 8px;
}

#message {
  margin-top: -.5em;
  color: #757575;
  letter-spacing: 1px;
}

#contBtn {
  position: relative;
  top: 1.5em;
  text-decoration: none;
  background: black;
  color: #fff;
  margin: auto;
  padding: .8em 3em;
  -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
  border-radius: 25px;
  -webkit-transition: all .4s ease;
		-moz-transition: all .4s ease;
		-o-transition: all .4s ease;
		transition: all .4s ease;
}

#contBtn:hover {
  -webkit-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
  -webkit-transition: all .4s ease;
		-moz-transition: all .4s ease;
		-o-transition: all .4s ease;
		transition: all .4s ease;
}
</style>
<?php
if(isset($_SESSION['message'])){
?>
<div id='card' class="animated fadeIn">
  <div id='upper-side'>
      <!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
      <svg version="1.1" id="checkmark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
        <path d="M131.583,92.152l-0.026-0.041c-0.713-1.118-2.197-1.447-3.316-0.734l-31.782,20.257l-4.74-12.65
	c-0.483-1.29-1.882-1.958-3.124-1.493l-0.045,0.017c-1.242,0.465-1.857,1.888-1.374,3.178l5.763,15.382
	c0.131,0.351,0.334,0.65,0.579,0.898c0.028,0.029,0.06,0.052,0.089,0.08c0.08,0.073,0.159,0.147,0.246,0.209
	c0.071,0.051,0.147,0.091,0.222,0.133c0.058,0.033,0.115,0.069,0.175,0.097c0.081,0.037,0.165,0.063,0.249,0.091
	c0.065,0.022,0.128,0.047,0.195,0.063c0.079,0.019,0.159,0.026,0.239,0.037c0.074,0.01,0.147,0.024,0.221,0.027
	c0.097,0.004,0.194-0.006,0.292-0.014c0.055-0.005,0.109-0.003,0.163-0.012c0.323-0.048,0.641-0.16,0.933-0.346l34.305-21.865
	C131.967,94.755,132.296,93.271,131.583,92.152z" />
        <circle fill="none" stroke="#ffffff" stroke-width="5" stroke-miterlimit="10" cx="109.486" cy="104.353" r="32.53" />
      </svg>
      <h3 id='status'>
      Success
    </h3>
  </div>
  <div id='lower-side'>
    <p id='message'>
        <?= $_SESSION['message'] ?>
    </p>
    <a href="#" id="contBtn">Close</a>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        setTimeout(function(){
             $("#card").fadeOut(2000);
        },2000)
    })
   
</script>
<script>
    $(document).ready(function(){
        
        $("#contBtn").click(function(){
            $("#card").css({'display':'none'});
        })
    })
</script>
<?php
unset($_SESSION['message']);
}
?>

<?php
if(isset($_SESSION['error_msg'])){
?>
<div id='card' class="animated fadeIn">
  <div id='upper-side' style="background:white;">
      <!-- Generator: Adobe Illustrator 17.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
      <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
      <img src="https://i0.wp.com/nrifuture.com/wp-content/uploads/2022/05/comp_3.gif?fit=800%2C600&ssl=1" style="height:auto;width:250px;border-radius:50%" alt="">
      <h3 id='status'>
      Success
    </h3>
  </div>
  <div id='lower-side'>
    <p id='message'>
        <h4><?= $_SESSION['error_msg'] ?></h4>
    </p>
    <a href="#" id="contBtn">Close</a>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        setTimeout(function(){
             $("#card").fadeOut(5000);
        },2000)
    })
   
</script>
<script>
    $(document).ready(function(){
        
        $("#contBtn").click(function(){
            $("#card").css({'display':'none'});
        })
    })
</script>
<?php
unset($_SESSION['error_msg']);
}
?>
<br><br><br>
<div style="height:auto;width:100%;background:black;color:white">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-12 p-5">
      <img src="<?= base_url() ?>public/logo.jpg" style="height:50px;width:50px;border-radius:50%" alt="">
       <h4 class="text-white">
        Address :
       </h4>
       <p class="lead">
        At Bhenda Tel Newasa Dist Ahemadnagr
       </p>
    </div>
    <div class="col-md-4 col-12 p-5 my-3">
      <ul style="list-style:none;display:flex;">
        <li style="border:1px solid white;padding:5px 10px;border-radius:50%"><i class="ri-facebook-line"></i></li> &nbsp;&nbsp;  
        <li style="border:1px solid white;padding:5px 10px;border-radius:50%"><i class="ri-twitter-line"></i></li>&nbsp;&nbsp;  
        <li style="border:1px solid white;padding:5px 10px;border-radius:50%"><i class="ri-instagram-line"></i></li>&nbsp;&nbsp;  
        <li style="border:1px solid white;padding:5px 10px;border-radius:50%"><i class="ri-mail-open-line"></i></li>
      </ul>
      <span>+91 9665065113</span> <br>
      <span>sokhushaboo202@gmail.com</span>
    </div>
  </div>
</div>
</div>


</body>
</html>