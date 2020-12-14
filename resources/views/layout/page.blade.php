<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Damora Research</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">

    <!-- CSS here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/custom.css')}}">
            <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{asset('css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('css/style.css')}}">
   </head>

   <body id="body" class="">
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('img/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparent">
            <div class="main-header ">
                
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <!-- logo-1 -->
                                <a href="/" class="big-logo"><img src="{{asset('img/fulllogo.png')}}" alt=""></a>
                                    <!-- logo-2 -->
                                    <a href="/" class="small-logo"><img src="{{asset('img/fulllogo.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                   
                                            <li><a href="/">Home</a></li>
                                            <li><a href="#about" class="nav_about">About</a></li>
                                            <li><a href="#researcher" class="nav_researcher">Researchers</a></li>
                                            <li><a href="#service" class="nav_service">Services</a></li>
                                            <li><a href="{{route('login')}}">Login</a></li>
                                            <li><a href="{{route('register')}}">Register</a></li>
                                            <li><a href="#contact">Contact</a></li>
                                            

                                        </ul>
                                    </nav>
                                </div>
                            </div>             
                            
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
   


    @yield('content')



    <footer id="contact">
      <!-- Footer Start-->
      <div class="footer-main">
              <div class="footer-area footer-padding">
                  <div class="container">
                      <div class="row  justify-content-between">
                          <div class="col-lg-4 col-md-4 col-sm-8">
                              <div class="single-footer-caption mb-30">
                                  <!-- logo -->
                                  <div class="footer-logo">
                                      <a href="/"><img src="{{asset('img/logo.png')}}" alt=""></a>
                                  </div>
                                  <div class="footer-tittle">
                                      <div class="footer-pera">
                                          <p class="info1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-2 col-md-4 col-sm-5">
                              <div class="single-footer-caption mb-50">
                                  <div class="footer-tittle">
                                      <h4>Quick Links</h4>
                                      <ul>
                                          <li><a href="#about">About</a></li>
                                          <li><a href="#service">Services</a></li>
                                          <li><a href="#researcher">Researchers</a></li>
                                      <li><a href="{{route('register')}}">Register</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-3 col-md-4 col-sm-7">
                              <div class="single-footer-caption mb-50">
                                  <div class="footer-tittle">
                                      <h4>Contact</h4>
                                      <div class="footer-pera">
                                          <p class="info1">198 West 21th Street, Suite 721 New York,NY 10010</p>
                                      </div>
                                      <ul>
                                          <li><a href="#">Phone: +95 (0) 123 456 789</a></li>
                                          <li><a href="#">Cell: +95 (0) 123 456 789</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-8">
                              <div class="single-footer-caption mb-50">
                                  <!-- Form -->
                                  <div class="footer-form">
                                      <div id="mc_embed_signup">
                                          
                                      </div>
                                  </div>
                                  <!-- Map -->
                                  <div class="map-footer">
                                      <img src="img/gallery/map-footer.png" alt="">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Copy-Right -->
                      <div class="row align-items-center">
                          <div class="col-xl-12 ">
                              <div class="footer-copy-right">
                                  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Damora Research
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
      </div>
      <!-- Footer End-->
  </footer>
 
<!-- JS here -->

  <!-- All JS Custom Plugins Link Here here -->
      <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
  <!-- Jquery, Popper, Bootstrap -->
  <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
      <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>

  <!-- Jquery Slick , Owl-Carousel Plugins -->
      <script src="{{asset('js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('js/slick.min.js')}}"></script>
      <!-- Date Picker -->
      <script src="{{asset('js/gijgo.min.js')}}"></script>
  <!-- One Page, Animated-HeadLin -->
      <script src="{{asset('js/wow.min.js')}}"></script>
  <script src="{{asset('js/animated.headline.js')}}"></script>
      <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>

  <!-- Scrollup, nice-select, sticky -->
      <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
      <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('js/jquery.sticky.js')}}"></script>
             
      <!-- counter , waypoint -->
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="{{asset('js/jquery.counterup.min.js')}}"></script>

      <!-- contact js -->
      <script src="{{asset('js/contact.js')}}"></script>
      <script src="{{asset('js/jquery.form.js')}}"></script>
      <script src="{{asset('js/jquery.validate.min.js')}}"></script>
      <script src="{{asset('js/mail-script.js')}}"></script>
      <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
      
  <!-- Jquery Plugins, main Jquery -->	
      <script src="{{asset('js/plugins.js')}}"></script>
      <script src="{{asset('js/main.js')}}"></script>
      

      
<script>
  // Select all links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
  
  </script>  

  </body>
</html>