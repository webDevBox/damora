@extends('layout.buyer_app')

@section('content')
<div class="bg-white boxer container mt-3">
    <h3 class="h3 text-center">Dashboard</h3>
    <h5 class="h5 text-center">Welcome {{ $user->name }}</h5>
</div>


<div class="bg-white boxer container mt-3">
    <h3 class="h3 text-center">Latest Purchases</h3>
   <div class="row" style="justify-content: center;">
    @foreach ($latest as $row)
      @php
          $researcher=\App\User::find($row->researcher);
          $signal=\App\research::find($row->signal);

      @endphp
        <div class="col-lg-5 col-md-5 col-sm-10 col-xs-10 bg-info m-3">
           <h2 class="text-center text-white">Researcher </h2>
           @if($researcher->image != null)
            <img  class="profile-image d-block mx-auto img-fluid" src="{{ asset('image/'.$researcher->image) }}">
            @else
            <img src="{{asset('img/boy.png')}}" alt="" class="profile-image mx-auto d-block img-fluid">
            @endif
            <h4 class="text-center text-white"> {{ $researcher->name }}</h4>
            <hr class="hro">
            <h2 class="text-center text-white">Signal File</h2>
            <a href="{{ asset('image/'.$signal->file) }}" download="{{ $signal->detail }}">
            <img class="profile-image d-block mx-auto img-fluid" src="{{ asset('image/file/file.png') }}">
            </a>
        </div>
    @endforeach
   </div>
</div>


<div class="bg-white boxer container mt-3">
    <h3 class="h3 text-center">Packages</h3>
   <div class="row" style="justify-content: center;">
    @foreach ($package as $row)
        <div class="col-lg-5 col-md-5 col-sm-10 col-xs-10 bg-info m-3">
           <h2 class="d-block text-white">Price: ${{ $row->price }} </h2>
           <h2 class="d-block text-white">Credits: {{ $row->credit }} </h2>
        </div>
    @endforeach
    <div class="col-lg-5 col-md-5 col-sm-10 col-xs-10 bg-info m-3">
       <a href="{{route('add_credit')}}"> <h2 class="text-center text-white mt-4">View All Packages</h2> </a>
     </div>
   </div>
</div>


@endsection