<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/119f1a8072.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Admin Panel</title>

    <style>
        body{
            overflow-x: hidden;
        }
        a:hover{
            text-decoration: none;
        }
    </style>
</head>
<body class="" id="body" onload="">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            <div class="sidebar">
                <h1 class="text-white text-center">Menu</h1>
                <hr class="hro">
                @php
                    $user=Auth::user();
                    $side_notify=\App\chat::where('receiver',$user->id)->where('marker',0)->count();
                @endphp
                @if($user->image != null)
                <img src="{{asset('image/'.$user->image)}}" alt="" class="profile-image mx-auto d-block img-fluid">
                @else
                <img src="{{asset('img/boy.png')}}" alt="" class="profile-image mx-auto d-block img-fluid">
                @endif
            <h4 class="text-white text-center">{{ $user->name }}</h4>
            <hr class="hr">
            <a href="{{route('dashboard')}}" class="text-left">  <h5 style="font-weight: normal" class=" nav-side"> 
                <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard </h5>
            </a>
            <a href="{{route('package')}}" class="text-left">  <h5 style="font-weight: normal" class=" nav-side"> 
                <i class="fa fa-get-pocket" aria-hidden="true"></i> Packages </h5>
            </a>
            
            
            
            <a href="{{route('admin_chat')}}" class="text-left">  <h5 style="font-weight: normal" class=" nav-side"> 
                <i class="fa fa-comment" aria-hidden="true"></i> Chat 
                @if($side_notify > 0) <p class="dot text-white">{{$side_notify}}</p> @endif
            </h5>
            </a>
        <a href="{{route('researcher_list')}}" class="text-left">  <h5 style="font-weight: normal" class="  nav-side"> 
            <i class="fa fa-book" aria-hidden="true"></i> Researchers </h5>
            </a>
            
            <a href="{{route('buyer_list')}}" class="text-left">  <h5 style="font-weight: normal" class="  nav-side"> 
                <i class="fa fa-credit-card" aria-hidden="true"></i> Buyers</h5>
            </a>
            
        <a href="{{route('admin_profile')}}" class="text-left">  <h5 style="font-weight: normal" class="  nav-side"> 
            <i class="fa fa-user" aria-hidden="true"></i> Profile </h5>
            </a>
            
        <a href="{{route('request_money')}}" class="text-left">  <h5 style="font-weight: normal" class="  nav-side"> 
                <i class="fa fa-money" aria-hidden="true"></i> Payment </h5>
            </a>
            
        <a href="{{route('admin_comment')}}" class="text-left">  <h5 style="font-weight: normal" class="  nav-side"> 
            <i class="fa fa-commenting" aria-hidden="true"></i> Comments </h5>
            </a>
            
            
        <a href="{{route('setting')}}" class="text-left">  <h5 style="font-weight: normal" class="  nav-side"> 
            <i class="fa fa-cogs" aria-hidden="true"></i> Settings </h5>
            </a>
           
            
           
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    @yield('content')
    </div>
</div>

<script>
    $('.chat-modal').click(function()
    {
        $('#all_users').slideToggle(800);
    });
    $('.chat-modal1').click(function()
    {
        $('#all_users').slideToggle(800);
    });
    


</script>


<script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#chat_ul li").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>

<script>
    $('#attach').click(function()
    {
        $('#file').trigger("click");
    });
</script>

<script>
    $('.chatbox').scrollTop($('.chatbox')[0].scrollHeight);
</script>
<script>
    $('#img-select').click(function()
    {
        $('#img-collect').trigger("click");
    });
</script>
</body>
</html>