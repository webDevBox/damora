@extends('layout.page')

@section('content')

<h1 class="text-center text-white mt-100"> Verification </h1>

<div class="container" style="margin-bottom: 100px;">
    
<p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 alert alert-success">{{ $success }}</p>

@if(Session::has('error'))
<p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
@endif 
    <div class="row">
        <div class="lagend offset-lg-3 offset-md-3 col-lg-6 col-md-6 col-sm-10 col-xs-10 rounded">
        <form action="{{route('verify')}}" method="POST" class="form">
            @csrf
                  <div class="form-group mt-3">
                    <input type="text" value="{{ old('user') }}" class="form-control border-top-0 border-right-0 border-left-0" placeholder="Your Verification Pin" name="pin" required>
                    @if ($errors->has('pin')) <p style="color:red;">{{ $errors->first('pin') }}</p> @endif 
                  </div>
                  <div class="form-group mt-3" style="display: none;">
                    <input type="text" value="{{ $email }}" class="form-control border-top-0 border-right-0 border-left-0" name="email" required>
                  </div>
                    <br>
                    <center>
                  <input type="submit" name="submit" value="Verify" class="btn-theme">
                </center>
            </form>
        </div>
    </div>
</div>


<script>
    $('#body').attr('class','register_body');
    $('.nav_about').attr('style','display:none;');
    $('.nav_researcher').attr('style','display:none;');
    $('.nav_service').attr('style','display:none;');
</script>

@endsection