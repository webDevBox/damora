@extends('layout.page')

@section('content')

<h1 class="text-center text-white mt-100"> Register Now </h1>

<div class="container" style="margin-bottom: 100px;">
  @if(Session::has('success'))
<p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 alert {{ Session::get('alert-class', 'alert-success') }}">
{{ Session::get('success') }} </p>
@endif
@if(Session::has('error'))
<p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
@endif 
    <div class="row">
        <div class="lagend offset-lg-3 offset-md-3 col-lg-6 col-md-6 col-sm-10 col-xs-10 rounded">
        <form action="{{route('signup')}}" method="POST" class="form">
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
                  <input type="submit" name="submit" value="Register" class="btn-theme">
                </center>

            <p class="text-dark text-center mt-2 mb-2"> If Already registered?<span class="text-primary" id="log" style="cursor:pointer;">Login</span></p>
            </form>
        </div>
    </div>
</div>


<script>
    $('#body').attr('class','register_body');
    $('#log').click(function()
    {
        window.location.href="{{route('login')}}";
    });
    $('.nav_about').attr('style','display:none;');
    $('.nav_researcher').attr('style','display:none;');
    $('.nav_service').attr('style','display:none;');
</script>

@endsection