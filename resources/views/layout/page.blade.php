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
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- CSS here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/4f7d4ab2f2.js"></script>           
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
                                <a href="/" class="big-logo"><img class="img-fluid" src="{{asset('img/logo.png')}}" alt=""></a>
                                    <!-- logo-2 -->
                                    <a href="/" class="small-logo"><img class="img-fluid" src="{{asset('img/logo.png')}}" alt=""></a>
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



    <footer id="contact" class="bg-white" style="margin-top:20px;">
      <div class="container" style="margin-bottom:50px">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <img src="{{asset('img/fulllogo.png')}}" alt="" class="mx-auto d-block img-fluid mt-5">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="justify-content: center">
                    <ul class="footList mt-3">
                            <li>About</li>
                            <li class="li_item">Contact</li>
                            <li class="li_item">Feedback</li>
                            <li class="li_item">Community</li>
                    </ul>
                </div>

                @php
                    $serv_foot=\App\service::orderBy('id','desc')->limit(3)->get();
                @endphp

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="justify-content: center">
                    <ul class="footList mt-3">
                            <li style="font-weight: bold">Services</li>
                                @foreach ($serv_foot as $item)
                                    <li class="li_item">{{$item->service}}</li>
                                @endforeach
                    </ul>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="justify-content: center">
                    <ul class="footList mt-3">
                            <li>Terms of Service</li>
                            <li class="li_item">Privacy Policy</li>
                            <li class="li_item">Help & Support</li>
                            <li class="li_item">Trust & Safety</li>
                    </ul>
                </div>

            </div>
      </div>

      <hr class="hr4">

      <div style="justify-content: center" class="container">
        <div class="d-inline icon_foot"> <i class="fa fa-facebook" aria-hidden="true"></i></div>
      </div>
     
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