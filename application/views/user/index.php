<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="container-fluid my-1">
    <!-- <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php
                    foreach($slider as $key=>$row){
                    ?>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $key ?>" class="<?= ($key==0)?'active':'' ?>" aria-current="true" aria-label="Slide <?= $key+1 ?>"></button>
                    <?php
                    }
                    ?>
                    
                </div>
                <div class="carousel-inner">
                    <?php
                    foreach($slider as $key=>$row){
                    ?>
                    <div class="carousel-item  <?= ($key==0)?'active':'' ?>">
                        <img src="<?= base_url() ?>public/upload/slider/<?= $row['slider_image'] ?>" class="d-block w-100" alt="..." style="height:70vh;width:100%;object-fit:cover">
                    </div>
                    <?php
                    }
                    ?>
                   
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div> -->

    <div class="row">
        
        <div id="slider" style="height:80vh;width:100%;p-0;m-0"> 
        <?php
        if(count($slider)>0){
            foreach($slider as $key=>$row){
        ?>
            <div class="slides">  
                <img src="<?= base_url() ?>public/upload/slider/<?= $row['slider_image'] ?>" style="height:100%;width:100%" />
            </div>
        <?php
            }
        }else{
            ?>
             <div class="slides">  
                <img src="https://blog.cognifit.com/wp-content/uploads/2019/11/hiking-900x300.jpg" width="100%" style="height:700px" />
            </div>
        
            <div class="slides">  
                <img src="https://travelfree.info/wp-content/uploads/2018/02/croatia-waterfall-in-deep-forest-of-Cr-12755165-900x300.jpg" width="100%" style="height:700px"/>
            </div> 
            <?php

        }
        ?>  
       
        
        <div id="dot" style="z-index:999;margin-top:500px">
        <?php
        if(count($slider)>0){
            foreach($slider as $key=>$row){
                ?>
                <span class="dot"></span>
                <?php
            }

        }else{
            ?>
            <span class="dot"></span><span class="dot"></span>
            <?php

        }
        ?>
        </div>

    </div>
</div>

<!-- offer  -->

 

<!-- trending product  -->
<main>
    <div class="container bg-trasparent my-4 p-3" style="position: relative;">
    <div class="row">
        <div class="col col-md-12 my-3">
            <h2 class="text-center">Trending Product</h2>
        </div>
    </div>
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
            <?php
            foreach($trending_product as $key=>$row){
            ?>
            <!-- <a href="<?= base_url() ?>usercontroller/product_information/<?= $row['pro_id'] ?>"> -->
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <a href="<?= base_url() ?>usercontroller/product_information/<?= $row['pro_id'] ?>">
                            <img src="<?= base_url() ?>public/upload/product/<?= explode("&&",$row['product_image'])[0] ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <div class="clearfix mb-3">
                                <span class="float-start badge rounded-pill bg-primary"><?= $row['product_label'] ?></span><span class="float-end price-hp text-dark"><?= number_format($row['product_price']) ?> <b>Rs./-</b></span>  <br> 
                                <span class="float-start rounded-pill"><?= $row['product_name'] ?></span> 
                            </div>
                            
                            <div class="text-center my-4">
                            <a href="<?= base_url() ?>usercontroller/product_information/<?= $row['pro_id'] ?>" class="btn btn-warning" style="background:black">View More</a> </div>
                        </div>
                    </div>
                </div>
            <!-- </a> -->
            <?php
            }
            ?>
          
        </div>
    </div>
</main>
<!-- trending product end  -->


<script>
    var index = 0;
var slides = document.querySelectorAll(".slides");
var dot = document.querySelectorAll(".dot");

function changeSlide(){

  if(index<0){
    index = slides.length-1;
  }
  
  if(index>slides.length-1){
    index = 0;
  }
  
  for(let i=0;i<slides.length;i++){
    slides[i].style.display = "none";
    dot[i].classList.remove("active");
  }
  
  slides[index].style.display= "block";
  dot[index].classList.add("active");
  
  index++;
  
  setTimeout(changeSlide,2000);
  
}

changeSlide();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
    // Slider version 1
    $('.owl-carousel.version-1').owlCarousel({
      loop: true,
      margin: 15,
      responsiveClass: true,
      responsive: {
        0: {
          items: 2,
          nav: true
        },
        600: {
          items: 3,
          nav: false
        },
        1000: {
          items: 4,
          nav: true
        }
      }
    });

    // Slider version 2
    $('.owl-carousel.version-2').owlCarousel({
      loop: true,
      margin: 15,
      center: true,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 2,
          nav: false
        },
        1000: {
          items: 3,
          nav: true
        }
      }
    });
  </script>


