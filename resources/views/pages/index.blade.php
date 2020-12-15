@extends('layout.page')
@section('content')
    

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">Get Customize Market Researches</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">damora</h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>Research</h2>
                                        <h2>Research</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                       <span><a href="#service">Our Services</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">Get Customize Market Researches</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">advanced</h1>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>Construction</h2>
                                        <h2>Construction</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                        <span><a href="services.html">Our Services</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Services Area Start -->
    <center><a class="btn mt-3" href="{{route('view_research')}}"> All Researches </a></center>
        
        <h2 class="text-center h2">Filter</h2>
        @if(Session::has('success'))
        <p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
        @endif
        @if(Session::has('error'))
        <p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
        @endif 
       
            <form action="{{route('filter')}}" method="POST" >
                 @csrf
                 <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2"></div>
                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <input type="text" name="researcher" class="form-control" placeholder="Seller Name">
                    </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <input type="number" name="start"  class="form-control" placeholder="Starting Price">
                    </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <input type="number" name="end" class="form-control" placeholder="Ending Price">
                    </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" >

                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2" style="justify-content: center;">
                    <div class="form-group">
                        <select name="asset" class="form-control">
                            <option selected disabled>  Asset Type </option>
                            @foreach ($asset as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4" style="justify-content: center;">
                    <div class="form-group">
                        <select name="market" class="form-control">
                            <option selected disabled>  Market Type </option>
                            @foreach ($market as $item)
                        <option value="{{$item->name}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
            </div>
          <center>
                <input type="submit" name="submit" value="Apply" class="btn btn-primary mt-100">
          </center>
        </div>
        </form>
        
        
                
            
           
        
        <div class="services-area1 section-padding30" id="service">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-55">
                            <div class="front-text">
                                <h2 class="">Our Services</h2>
                            </div>
                            <span class="back-text">Services</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="img/service/servicess1.png" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="services_details.html">Engineering techniques & implementation</a></h4>
                               
                            </div>
                            <div class="service-icon">
                                <img src="img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="img/service/servicess2.png" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="services_details.html">Engineering techniques & implementation</a></h4>
                               
                            </div>
                            <div class="service-icon">
                                <img src="img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="img/service/servicess3.png" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="services_details.htmlaa">Engineering techniques &  implementation</a></h4>
                               
                            </div>
                            <div class="service-icon">
                                <img src="img/icon/services_icon1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!-- About Area Start -->
        <div id="about"></div>
        <section class="support-company-area fix pt-10">
            <div class="support-wrapper align-items-end">
                <div class="left-content">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-55">
                        <div class="front-text">
                            <h2 class="">Who we are</h2>
                        </div>
                        <span class="back-text">About us</span>
                    </div>
                    <div class="support-caption">
                        <p class="pera-top">Mollit anim laborum duis au dolor in voluptcate velit ess cillum dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillu.</p>
                        <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.</p>
                       
                    </div>
                </div>
                <div class="right-content">
                    <!-- img -->
                    <div class="right-img">
                        <img src="img/gallery/safe_in.png" alt="">
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!-- Project Area Start -->
        <section class="project-area  section-padding30" id="researcher">
            <div class="container">
               <div class="project-heading mb-35">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3">
                                <div class="front-text">
                                    <h2 class="">Our Researchers</h2>
                                </div>
                                <span class="back-text">Gellary</span>
                            </div>
                        </div>
                        
                    </div>
               </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content active" id="nav-tabContent">
                            <!-- card ONE -->
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                                <div class="project-caption">
                                    <div class="row">
                                        @foreach ($users as $user)
                                            
                                       
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    @if($user->image != null)
                                                <img src="{{asset('image/'.$user->image)}}" alt="">
                                                @else
                                                <img src="{{asset('img/boy.png')}}" alt="">
                                                @endif
                                                </div>
                                                <div class="project-cap">
                                                  <h4><a>{{$user->email}}</a></h4>
                                                    <h4><a >{{$user->name}}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- Card TWO -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card THREE -->
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card FUR -->
                            <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- card FIVE -->
                            <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology">
                                <div class="project-caption">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project1.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project2.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project3.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project4.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project5.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="img/gallery/project6.png" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="#" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="#">Floride Chemicals</a></h4>
                                                    <h4><a href="#">Factory</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Area End -->
        <!-- contact with us Start -->
        <section class="contact-with-area" data-background="img/gallery/section-bg2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 offset-xl-1 offset-lg-1">
                        <div class="contact-us-caption">
                            <div class="team-info mb-30 pt-45">
                                <!-- Section Tittle -->
                                <div class="section-tittle section-tittle4">
                                    <div class="front-text">
                                        <h2 class="">Statistics</h2>
                                    </div>
                                    <span class="back-text">OUR STATS</span>
                                </div>
                                <p>Mollit anim laborum.Dvcuis aute iruxvfg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur sfwsignjnt occa cupidatat non aute iruxvfg dhjinulpadeserunt mollitemnth incididbnt ut;o5tu layjobore mofllit anim.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact with us End-->
        <!-- CountDown Area Start -->
        <div class="count-area">
            <div class="container">
                <div class="count-wrapper count-bg" data-background="img/gallery/section-bg3.jpg">
                    <div class="row justify-content-center" >
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                    <span class="counter">{{$researcher}}</span>
                                    </div>
                                    <div class="count-text">
                                        <p>Total</p>
                                        <h5>Researchers</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                        <span class="counter">{{$signal}}</span>
                                    </div>
                                    <div class="count-text">
                                        <p>Total</p>
                                        <h5>Signals</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="count-clients">
                                <div class="single-counter">
                                    <div class="count-number">
                                        <span class="counter">{{$sale}}</span>
                                    </div>
                                    <div class="count-text">
                                        <p>Total</p>
                                        <h5>Sales</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
       
       
    </main>
    @endsection