@extends('layout.page')

@section('content')

<h1 class="text-center text-dark mt-100"> All Services </h1>

<div class="container" style="margin-bottom: 100px;">
    @if(Session::has('success'))
<p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
@endif
@if(Session::has('error'))
<p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
@endif 

<div class="row">
    @foreach ($services as $row)
    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
    <a href="{{route('view_signals',array('id'=>$row->id))}}"> <img src="{{asset('image/'.$row->file)}}" style="width:250px; height: 300px;" alt=""> </a>
    </div>
    @endforeach
</div>


    
</div>


<script>
    $('#register').click(function()
    {
        window.location.href="{{route('register')}}";
    });
    $('.nav_about').attr('style','display:none;');
    $('.nav_researcher').attr('style','display:none;');
    $('.nav_service').attr('style','display:none;');
</script>

@endsection