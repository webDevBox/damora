@extends('layout.page')

@section('content')

<h1 class="text-center text-dark mt-100"> All Signals </h1>

<div class="container" style="margin-bottom: 100px;">
    @if(Session::has('success'))
<p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
@endif
@if(Session::has('error'))
<p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
@endif 

<div class="table-responsive">
    <table class="table table-hover table-dark">
      <thead>
          <tr>
        <th>Serial</th>
        <th>Researcher Name</th>
        <th>Signal Detail</th>
        <th>Action</th>
          </tr>
      </thead>
      @php
          $counter=0;
      @endphp
      @foreach ($signals as $row)
      @php
          $user=\App\User::find($row->researcher);
      @endphp
      <tr>
          <td>{{++$counter}}</td>
          <td>{{$user->name}}</td>
          <td> {{$row->detail}} </td>
          <td> <a href="{{route('register')}}" class="btn btn-success"> Buy </a> </td>
      </tr>
      @endforeach
      <tbody>

      </tbody>
    </table>
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