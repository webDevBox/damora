<!DOCTYPE html>
<html lang="en">
    <head>
        <!--===============================================================>
    
        Theme Name: MegaOne Logistic
        Theme URI:
        Author: Themes Industry
        Author URI:
        Description: One and Multi Page Parallax Template
        Tags: one page, multi page, multipurpose, parallax, creative, html5
    
        <=================================================================-->
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
            />
        <title>Damora Research</title>
        <link href="{{ asset('img/Asset 8.png') }}" rel="icon" />
        <link rel="stylesheet" href="{{ asset('css/bundle.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/cubeportfolio.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/tooltipster.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/revolution-settings.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/revolution/navigation.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
        <link
            rel="stylesheet"
            type="text/css"
            href="//fonts.googleapis.com/css?family=Lato"
            />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
        <style>
            .aa{
                /* left: 0; */
                /* margin-left: -200px;*/
            }
            .alpha{
                opacity: 0.3;
            }
            .rs-services-style1 .services-item:hover .alpha{
                opacity: 1;
            }
            .qa:hover{
                /* background: rgb(255, 255, 255); */
                background: linear-gradient(
                    135deg,
                    rgba(255, 255, 255, 0.2861519607843137) 62%,
                    rgba(0, 0, 0, 1) 62%
                    );

            }

            .fontbold{

                font-family: Raleway;

            }

            .dd {
                margin: 5px;
                padding: 5px 25px 5px 25px;
                border: 2px solid #ecbe44;
                color: #ecbe44;
            }
            .dd:hover {
                padding: 5px 25px 5px 25px;
                border: 2px solid #ecbe44;
                color: white;
                background-color: #ecbe44;
            }
            li .active{background-color: #ECBE44;}

        </style>
    </head>
    <body id="body" style="overflow-x: hidden; margin:0px; padding:0px;">
        <!--PreLoader-->
        <div class="loader">
            <div class="loader-spinner"></div>
        </div>
        <!--PreLoader Ends-->
        <!-- header -->
        <header class="site-header" id="header">
            <nav class="navbar navbar-expand-lg transparent-bg static-nav " style=" text-align: center;border-bottom:1px solid rgba(255,255,255,0.51);">
                <div class="container">

                    <a class="navbar-brand" href="{{asset('/')}}" style="margin-right: 40px;">
                        <img
                            src="{{ asset('img/logo.png') }}"
                            alt="logo"
                            class="logo-default"
                            />
                        <img
                            src="{{ asset('img/logo.png') }}"
                            alt="logo"
                            class="logo-scrolled"
                            />
                    </a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mx-auto my-auto  ">

                            <li class="nav-item">
                                <a
                                    class="nav-link collapsePagesSideMenu"
                                    href="{{asset('/')}}"
                                    >
                                    HOME
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link collapsePagesSideMenu"
                                    href="#about"
                                    >
                                    VISION
                                </a>
                            </li><li class="nav-item">
                                <a
                                    class="nav-link collapsePagesSideMenu"
                                    href="#our-process"
                                    >
                                    WORK PROCESS
                                </a>
                            </li><li class="nav-item">
                                <a
                                    class="nav-link collapsePagesSideMenu"
                                    href="#our-apps"
                                    >
                                    SERVICES
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#our-team">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link collapsePagesSideMenu"
                                    href="#stayconnect"
                                    >
                                    SHIPPING
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('register')}}" class="btn" style="margin-top: 13px; font: SemiBold 15px/24px Raleway;color: #FFFFFF;display: block; ">CREATE AN ACCOUNT</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--side menu open button-->
                <a
                    href="javascript:void(0)"
                    class="d-inline-block sidemenu_btn"
                    id="sidemenu_toggle"
                    >
                    <span></span> <span></span> <span></span>
                </a>
            </nav>
            <!-- side menu -->
            <div class="side-menu opacity-0" style="background-color: #000;">
                <div class="overlay"></div>
                <center> <a class="logo_side" href="{{asset('/')}}">
                        <img
                            src="{{ asset('img/logo.png')}}"
                            alt="logo"
                            />
                    </a></center>
                <div class="inner-wrapper">
                    <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                    <nav class="side-nav w-100 justify-content-center" >
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a
                                    class="nav-link collapsePagesSideMenu"
                                    href="{{asset('/')}}"
                                    >
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link collapsePagesSideMenu"
                                    href="#about"
                                    >
                                    Vission
                                </a>
                            </li><li class="nav-item">
                                <a
                                    class="nav-link collapsePagesSideMenu"
                                    href="#our-process"
                                    >
                                    Work Process
                                </a>
                            </li><li class="nav-item">
                                <a
                                    class="nav-link collapsePagesSideMenu"
                                    href="#our-apps"
                                    >
                                    Services
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#our-team">About</a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link collapsePagesSideMenu"
                                    href="#stayconnect"
                                    >
                                    Shipping
                                </a>
                            </li>
                            <li class="nav-item">
                                <button onclick="window.location.href = {{route('register')}} " type="button" class="btn " style="color:aliceblue;margin-top: 20px; background-color: #ECBF45; font: SemiBold 15px/24px Raleway;

                                        color: #FFFFFF;">CREATE AN ACCOUNT</button>

                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
            <div id="close_side_menu" class="tooltip"></div>
            <!-- End side menu -->
        </header>


    @yield('content')

    <footer id="site-footer" class="padding_top " style="background:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_panel padding_bottom_half bottom20 pl-0 pl-lg-5">
                        <h3 class="whitecolor bottom25" style="font: Bold 18px/26px Lato;
                            letter-spacing: 0.18px; margin: 0px;;
                            color: #ECBE44;">QUICK LINKS</h3>
                        <hr style="background-color:#ECBE44;width: 50px;margin-left:5px;height:1px; margin:10px 0px 10px 0px" >
                        <ul class="links mt-3">
                            <table>
                                <tr>
                                    <td style="border-bottom-style: none; padding:0px; "><li><a href="{{asset('/')}}" style="margin: 0px 10px 0px 0px;">Home</a></li></td>
                                <td style="border-bottom-style: none; padding:0px 10px 0px 0px; margin:0px;"><li><a href="#our-apps" style="margin: 0px;">Services</a></li></td>
                                </tr>
                                <tr>
                                    <td style="border-bottom-style: none;padding:0px;  "><li><a href="#about" style="margin: 0px 10px 0px 0px;">Vision</a></li></td>
                                <td style="border-bottom-style: none;padding:0px 10px 0px 0px; margin:0px;"><li><a href="#our-team" style="margin: 0px;">About</a></li></td>

                                </tr>
                                <tr> 
                                    <td style="border-bottom-style: none;padding:0px; "><li><a href="#our-process" style="margin: 0px 10px 0px 0px;">Work Process</a></li></td>
                                <td style="border-bottom-style: none; padding:0px 10px 0px 0px; padding-right:10px; margin:0px;"><li><a href="#stayconnect" style="margin: 0px;">Shipping</a></li></td>
                                </tr>
                            </table>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_panel padding_bottom_half bottom20">
                        <h3 class="whitecolor bottom25" style="font: Bold 18px/26px Lato;
                            letter-spacing: 0.18px; margin: 0px;; color:#ECBE44">OUR LOCATION</h3>
                        <hr style="background-color:#ECBE44;width: 50px;margin-left:5px;height:1px; margin:10px 0px 10px 0px" >
                        <div class="d-table w-100 address-item whitecolor bottom25 mt-3">

                            <p class="d-table-cell align-middle bottom0 " style="font-family:Raleway">
                                Building 18, Datangxia,<br> Chouzhou Street, Yiwu City,<br> 322000, Zhejiang Province, China
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_panel padding_bottom_half bottom20">
                        <h3 class="whitecolor bottom25" style=" font: Bold 18px/26px Lato;
                            letter-spacing: 0.18px; margin: 0px; color:#ECBE44">CALL CENTER</h3>
                        <hr style="background-color:#ECBE44;width: 50px;margin-left:5px;height:1px; margin:10px 0px 10px 0px" >
                        <p class="d-table-cell align-middle bottom0 mt-5" style="color:white;font-family:Raleway;">
                            Give Us A Call <br> <span style="font: Medium 14px/20px Raleway; font-family: Raleway;
                                                      letter-spacing: 0.14px;
                                                      color: #D8E0E5;">+1 865 890 2346</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_panel padding_bottom_half bottom20">
                        <h3 class="whitecolor bottom25" style=" font: Bold 18px/26px Lato;
                            letter-spacing: 0.18px; margin: 0px; color:#ECBE44">CONTACT WITH US</h3>
                        <hr style="background-color:#ECBE44;width: 50px;margin-left:5px;height:1px; margin:10px 0px 10px 0px" >
                        <ul
                            class="social-icons white wow fadeInUp"
                            data-wow-delay="300ms" style="margin-top:20px"
                            >
                            <li style="margin:5px;">
                                <a href="javascript:void(0)"  onmouseenter="document.getElementById('myImage2').src='img/011-instagram-1.svg'" onmouseleave="document.getElementById('myImage2').src='img/011-instagram.svg'"
                                   >                       <img id="myImage2" src="{{ asset('img/011-instagram.svg')}}" class="img-fluid">

                                </a>
                            </li>
                            <!--<li>-->
                            <!--  <a href="javascript:void(0)" class=""-->
                            <!--    ><i class="fab fa-twitter"></i>-->
                            <!--  </a>-->
                            <!--</li>-->
                            <li style="margin:5px;">
                                <a href="javascript:void(0)"  onmouseenter="document.getElementById('myImage1').src='img/001-facebook-1.svg'" onmouseleave="document.getElementById('myImage1').src='img/001-facebook.svg'"
                                   >                       <img id="myImage1" src="{{ asset('img/001-facebook.svg')}}" class="img-fluid">

                                </a>
                            </li>
                            <li style="margin:5px;">
                                <a href="javascript:void(0)"  onmouseenter="document.getElementById('myImage').src='img/Layer 2-1.svg'" onmouseleave="document.getElementById('myImage').src='img/Layer 2.svg'"
                                   >                       <img id="myImage" src="{{ asset('img/Layer 2.svg')}}" class="img-fluid">

                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
        <!--<div class="col-12  " style="background-color: black;height: 40px; width:100%; color:white; padding: 0px; margin:0px;">-->
        <!-- <div class="row">-->
        <!-- <div class="col-lg-8 col-sm-12" style="padding: 0px; margin:0px;"> <p class=" text-center" style="padding: 0px; margin:0px;">&copy;2020 FulFillee. LLC. All Rights Reserved</p></div>-->
        <!--  <div class=" col-lg-4 col-sm-12" style="padding: 0px; margin:0px;">-->
        <!--<table class=""><tr><td style="border-bottom-style: none">-->
        <!--  <img src="img\Layer 669.png" style="height:20px"></td>-->
        <!--  <td style="border-bottom-style: none"><img src="img\Layer 665.png" style="height:20px"></td>-->
        <!--  <td style="border-bottom-style: none"><img src="img\Group 2061.svg" style="height:20px"></td><td style="border-bottom-style: none">-->
        <!--    <img src="img\Rectangle 661 copy 2.png" style="height:20px;"></td></tr></table>-->
        <!--    </div>-->
        <!--    </div>-->
        <!--  </div>-->

        <div class="col-12 p-0" style="background-color:black; ;" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-12 mt-4 p-0">
                        <p class="ml-5 foottt" style="color:white; font-family:Raleway">&copy;2020 Damora All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-4 col-sm-12 p-0 mt-2 ">
                        <center>
                            <table style="" class="foottt1"><tr><td style="border-bottom-style: none">
                                        <img src="{{ asset('img\Rectangle 661 copy 3@2x.png')}}" style="height:30px"></td>
                                    <td style="border-bottom-style: none"><img src="{{ asset('img\Rectangle 661 copy@2x.png')}}" style="height:30px"></td>
                                    <td style="border-bottom-style: none"><img src="{{ asset('img\Group 2061.svg')}}" style="height:30px"></td><td style="border-bottom-style: none">
                                        <img src="{{ asset('img\Rectangle 661 copy 2@2x.png')}}" style="height:30px;"></td></tr></table></center>
                    </div>

                </div>


            </div>

    </footer>
    <!--Footer ends-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/bundle.min.js') }}"></script>
    <!--to view items on reach-->
    <script src="{{ asset('js/jquery.appear.js') }}"></script>
    <!--Owl Slider-->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!--Parallax Background-->
    <script src="{{ asset('js/parallaxie.min.js') }}"></script>
    <!--Cubefolio Gallery-->
    <script src="{{ asset('js/jquery.cubeportfolio.min.js') }}"></script>
    <!--Fancybox js-->
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <!--wow js-->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!--number counters-->
    <script src="{{ asset('js/jquery-countTo.js') }}"></script>
    <!--tooltip js-->
    <script src="{{ asset('js/tooltipster.min.js') }}"></script>
    <!--Revolution SLider-->
    <script src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="{{ asset('js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('js/extensions/revolution.extension.video.min.js') }}"></script>
    <!--custom functions and script-->
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>

<!-- Mirrored from megaone.themesindustry.com/{{asset('/')}} by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 May 2020 06:23:45 GMT -->
</html>
