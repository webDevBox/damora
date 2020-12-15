@extends('layout.admin_app')

@section('content')
<div class="bg-white boxer container mt-3">
<h3 class="h3 text-center">Settings</h3>
    @if(Session::has('success'))
    <p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-success') }}">
    {{ Session::get('success') }} </p>
    @endif
    @if(Session::has('error'))
    <p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
    @endif 
    <div class="row">
        <div class="lagend offset-md-3 offset-lg-3 col-lg-6 col-md-6 col-sm-10 col-xs-10 rounded">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 bg-info text-white rounded">
                    <a href="{{route('assets')}}">
                    <h2 class="text-center text-white h3"> Assets </h2>
                          <h3 class="text-center mt-5 text-white"> Total:  {{$asset}} </h3>
                        </a>
                  </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 offset-md-2 offset-lg-2 offset-sm-2 offset-xs-2 bg-info text-white rounded">
                    <a href="{{route('admin_service')}}">
                    <h2 class="text-center text-white h3"> Service </h2>
                          <h3 class="text-center mt-5 text-white"> Total:  {{$adminService}} </h3>
                        </a>
                  </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 bg-info text-white rounded mt-5">
                    <a href="{{route('market')}}">
                    <h2 class="text-center text-white h3"> Market </h2>
                          <h3 class="text-center mt-5 text-white"> Total:  {{$market}} </h3>
                        </a>
                  </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 offset-md-2 offset-lg-2 offset-sm-2 offset-xs-2 bg-info text-white rounded mt-5">
                    <a href="{{route('admin_logout')}}">
                    <h2 class="text-center text-white h3"> Logout </h2>
                          <h3 class="text-center mt-5 text-white"> <i class="fa fa-sign-out" aria-hidden="true"></i> </h3>
                        </a>
                  </div>
            </div>
        </div>
    </div>

</div>



@endsection