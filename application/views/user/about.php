
  

  <!-- Simple logo carousel slider -->
  <div class="logo-slider-1">
    <h2>Simple partners logo carousel slider</h2>
    <div class="owl-carousel version-1">
      <div><img src="https://res.cloudinary.com/attors/image/upload/v1649920354/codepen/logo-slider/2_qg1szo.png"></div>
      <div><img src="https://res.cloudinary.com/attors/image/upload/v1649920354/codepen/logo-slider/8_vaaymk.png"></div>
      <div><img src="https://res.cloudinary.com/attors/image/upload/v1649920354/codepen/logo-slider/9_jj7tu1.png"></div>
      <div><img src="https://res.cloudinary.com/attors/image/upload/v1649920354/codepen/logo-slider/4_ytmjk4.png"></div>
      <div><img src="https://res.cloudinary.com/attors/image/upload/v1649920354/codepen/logo-slider/3_elth4m.png"></div>
      <div><img src="https://res.cloudinary.com/attors/image/upload/v1649920354/codepen/logo-slider/5_y7cbj1.png"></div>
      <div><img src="https://res.cloudinary.com/attors/image/upload/v1649920354/codepen/logo-slider/7_hrlbsa.png"></div>
    </div>
  </div>
  <!-- End Simple logo carousel slider -->

  <!-- Logo slider with Title and description -->
  <div class="logo-slider-2">
    <h2>Logo slider with Title and description</h2>
    <div class="owl-carousel version-2">
      <div> 
        <img src="https://res.cloudinary.com/attors/image/upload/v1649920354/codepen/logo-slider/2_qg1szo.png">
        <h2>Logo title</h2>
        <p>Nunc interdum lacus sit amet orci. In hac habitasse platea dictumst. Sed aliquam ultrices mauris.</p>
      </div>
      <div> 
        <img src="https://res.cloudinary.com/attors/image/upload/v1649920354/codepen/logo-slider/8_vaaymk.png"> 
        <h2>Logo title</h2>
        <p>Nunc interdum lacus sit amet orci. In hac habitasse platea dictumst. Sed aliquam ultrices mauris.</p>
      </div>
      <div> 
        <img src="https://res.cloudinary.com/attors/image/upload/v1649920354/codepen/logo-slider/9_jj7tu1.png"> 
        <h2>Logo title</h2>
        <p>Nunc interdum lacus sit amet orci. In hac habitasse platea dictumst. Sed aliquam ultrices mauris.</p>
      </div>
      <div> 
        <img src="https://res.cloudinary.com/attors/image/upload/v1649920354/codepen/logo-slider/4_ytmjk4.png"> 
        <h2>Logo title</h2>
        <p>Nunc interdum lacus sit amet orci. In hac habitasse platea dictumst. Sed aliquam ultrices mauris.</p>
      </div>
      <div> 
        <img src="https://res.cloudinary.com/attors/image/upload/v1649920354/codepen/logo-slider/3_elth4m.png"> 
        <h2>Logo title</h2>
        <p>Nunc interdum lacus sit amet orci. In hac habitasse platea dictumst. Sed aliquam ultrices mauris.</p>
      </div>
      <div> 
        <img src="https://res.cloudinary.com/attors/image/upload/v1649920354/codepen/logo-slider/5_y7cbj1.png"> 
        <h2>Logo title</h2>
        <p>Nunc interdum lacus sit amet orci. In hac habitasse platea dictumst. Sed aliquam ultrices mauris.</p>
      </div>
      <div> 
        <img src="https://res.cloudinary.com/attors/image/upload/v1649920354/codepen/logo-slider/7_hrlbsa.png"> 
        <h2>Logo title</h2>
        <p>Nunc interdum lacus sit amet orci. In hac habitasse platea dictumst. Sed aliquam ultrices mauris.</p>
      </div>
    </div>
  </div>
  <!-- end slider View with Title and description -->

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

