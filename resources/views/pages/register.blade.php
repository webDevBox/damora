<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Damora Research</title>
        <link href="{{ asset('img/Asset 8.png') }}" rel="icon" />

        <meta name="description" content="">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link href="logistic/images/favicon.ico" rel="icon" />
        <link rel="apple-touch-icon" href="{{ asset('img/icon57.png')}}" sizes="57x57">
        <link rel="apple-touch-icon" href="{{ asset('img/icon72.png')}}" sizes="72x72">
        <link rel="apple-touch-icon" href="{{ asset('img/icon76.png')}}" sizes="76x76">
        <link rel="apple-touch-icon" href="{{ asset('img/icon114.png')}}" sizes="114x114">
        <link rel="apple-touch-icon" href="{{ asset('img/icon120.png')}}" sizes="120x120">
        <link rel="apple-touch-icon" href="{{ asset('img/icon144.png')}}" sizes="144x144">
        <link rel="apple-touch-icon" href="{{ asset('img/icon152.png')}}" sizes="152x152">
        <link rel="apple-touch-icon" href="{{ asset('img/icon180.png')}}" sizes="180x180">
        <!-- END Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="{{ asset('css/plugins.css')}}">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="{{ asset('css/main.css')}}">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="{{ asset('css/themes.css')}}">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="{{ asset('js/vendor/modernizr.min.js')}}"></script>
        <!-- CSS only -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
        <!-- <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700,900&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

        <style>
            .wel{
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

            }
            .blocker{
                border-radius: 50px;
            }
            .form{
                background: white;
                margin-top: 40px;
                border-radius: 40px;
                height: 500px;
            }
        </style>

    </head>
    <body style="background-image: url('img/register-bg.png');background-repeat: no-repeat;background-size: cover; overflow-x: hidden;" class='img-responsive'>

            <img src="{{ asset('img/fulfilleedotcom2@2x.png') }}" class="d-block mx-auto mt-3" style="width:200px; height:70px;" alt="">
        <div class="row mt-5">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 offset-lg-3 offset-md-3 blocker" style="background: #ECBE44; height:600px;">
                <h2 class="text-center wel"> <b> Welcome! </b> </h2>
                <h4 class="text-center"> <strong> Join Us Today </strong> </h4>
                <img src="{{ asset('img/161595-OVE4FZ-667@2x.png') }}" class="d-block mx-auto mt-4" alt="" class="img-responsive " style="height:328px;">
                <center>  <a href="/" class="mt-5 btn btn-warning">Go Home</a> </center>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 blocker" style="background: #ECBE44; height:600px; margin-left: 10px;">
               
                <form action="{{route('signup')}}" method="POST" class="form container">
                    <h2 class="container">Create Your Account</h2>
                    @csrf
                        <div class="form-group mt-3">
                            <input type="text" value="{{ old('name') }}" class="form-control border-top-0 border-right-0 border-left-0" placeholder="Full Name" name="name" required>
                            @if ($errors->has('name')) <p style="color:red;">{{ $errors->first('name') }}</p> @endif 
                        </div>
                          <div class="form-group">
                            <input type="text" value="{{ old('user') }}" class="form-control border-top-0 border-right-0 border-left-0" placeholder="UserName" name="user" required>
                            @if ($errors->has('user')) <p style="color:red;">{{ $errors->first('user') }}</p> @endif 
                        </div>
                          <div class="form-group">
                            <input type="email" value="{{ old('email') }}" class="form-control border-top-0 border-right-0 border-left-0" placeholder="Email" name="email" required>
                            @if ($errors->has('email')) <p style="color:red;">{{ $errors->first('email') }}</p> @endif 
                        </div>
                          <div class="form-group">
                            <input type="password" class="form-control border-top-0 border-right-0 border-left-0" placeholder="Password" name="password" required>
                            @if ($errors->has('password')) <p style="color:red;">{{ $errors->first('password') }}</p> @endif 
                        </div>
                          <div class="form-group">
                            <input type="password" class="form-control border-top-0 border-right-0 border-left-0" placeholder="Repeat-Password" name="Repeat-password" required>
                            @if ($errors->has('Repeat-Password')) <p style="color:red;">{{ $errors->first('Repeat-Password') }}</p> @endif 
                        </div>
        
                          <div class="form-check form-check-inline mt-2">
                            <input class="form-check-input" type="radio"  value="2" name="type">
                            <label class="form-check-label">Buyer</label>
        
                        </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"  value="3"  name="type">
                            <label class="form-check-label">Market Researcher</label>
                        </div>
                        @if ($errors->has('type')) <p style="color:red;">{{ $errors->first('type') }}</p> @endif 
        
                          <br>
                          <div class="form-check form-check-inline mt-2">
                            <input class="form-check-input" name="term" type="checkbox" required>
                            <label class="form-check-label">Agree With Terms & Policies</label>
                          </div>
                            <br><br>
                            <center>
                          <input type="submit" name="submit" value="Register" class="btn btn-dark d-block">
                        </center>
        
                    <p class="text-dark text-center mt-2 mb-2"> If Already Registered?<span class="text-dark" id="log" style="cursor:pointer;">Login</span></p>
                    </form>



            </div>
        </div>
        <script>
            $('#log').click(function()
            {
                window.location.href="{{route('login')}}";
            });
        </script>
        <script src="{{ asset('js/vendor/jquery.min.js')}}"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/plugins.js')}}"></script>
        <script src="{{ asset('js/app.js')}}"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="{{ asset('js/pages/login.js')}}"></script>
        <script>$(function () {
             Login.init();
         });</script>
    </body>
</html>


