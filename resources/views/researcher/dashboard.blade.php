@extends('layout.researcher_app')

@section('content')
<div class="bg-white boxer container mt-3">
    <h3 class="h3 text-center">Dashboard</h3>
    <h5 class="h5 text-center">Welcome {{ $user->name }}</h5>
</div>


<div class="bg-white boxer container mt-3">
    <h3 class="h3 text-center">Withdraws</h3>
   <div class="row" style="justify-content: center;">
    <div class="table-responsive table-responsive-lg table-responsive-md table-responsive-sm table-responsive-xs mt-3">
        <table class="table table-hover table-striped table-bordered">
           <thead>
                <tr>
                    <th class="text-center">No. </th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Request Date</th>
                </tr>
           </thead>
            <tbody>
                @if(count($withdraw) > 0)
                @php
                $counter = 0;
                @endphp
                @foreach ($withdraw as $row)
              <tr>
              <td class="text-center">{{++$counter}}</td>
              <td class="text-center" scope="row">{{$row->amount}}</td>
              <td class="text-center" scope="row"> 
                  @if($row->status == 0)
                   <span style="background: rgb(137, 206, 81);"> Request Pending </span>  
                  @elseif($row->status == 1)
                   <span style="background: rgb(137, 206, 81);"> Request Accepted </span>  
                  @else
                   <span style="background: rgb(137, 206, 81);"> Request Rejected </span>  
                  @endif
               </td>
             <td class="text-center" scope="row">{{$row->created_at}}</td>
               
              </tr>
              @endforeach
             @else
             No Record Found
             @endif
             
            </tbody>
          </table>
        </div>
    
   </div>
</div>

<div class="bg-white boxer container mt-3">
    <h3 class="h3 text-center">Latest Sales</h3>
   <div class="row" style="justify-content: center;">
    @foreach ($latest as $row)
      @php
          $buyer=\App\User::find($row->buyer);
          $signal=\App\research::find($row->signal);
      @endphp
        <div class="col-lg-5 col-md-5 col-sm-10 col-xs-10 bg-info m-3">
           <h2 class="text-center text-white">Buyer </h2>
           @if($buyer->image != null)
            <img  class="profile-image d-block mx-auto img-fluid" src="{{ asset('image/'.$buyer->image) }}">
            @else
            <img src="{{asset('img/boy.png')}}" alt="" class="profile-image mx-auto d-block img-fluid">
            @endif
            <h4 class="text-center text-white"> {{ $buyer->name }}</h4>
            <hr class="hro">
            <h2 class="text-center text-white">Signal File</h2>
            <a href="{{ asset('image/'.$signal->file) }}" download="{{ $signal->detail }}">
            <img class="profile-image d-block mx-auto img-fluid" src="{{ asset('image/file/file.png') }}">
            </a>
        </div>
    @endforeach
   </div>
</div>




@endsection