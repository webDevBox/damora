@extends('layout.researcher_app')

@section('content')
<div class="bg-white boxer1 container mt-3">
   
    <h3 class="h3 text-center">Transaction History</h3>
    @if(Session::has('success'))
    <p class="col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-success') }}">
    {{ Session::get('success') }} </p>
    @endif
    @if(Session::has('error'))
    <p class="col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-danger') }}">
        {{ Session::get('error') }}</p>
    @endif 
    @if ($errors->has('service')) <p style="color:red;">{{ $errors->first('service') }}</p> @endif 
    @if ($errors->has('file')) <p style="color:red;">{{ $errors->first('file') }}</p> @endif 

    <div class="table-responsive table-responsive-lg table-responsive-md table-responsive-sm table-responsive-xs mt-3">
    <table class="table table-hover table-striped table-bordered">
       <thead>
            <tr>
                <th class="text-center">No. </th>
                <th class="text-center">Service</th>
                <th class="text-center">Buyer</th>
                <th class="text-center">Price</th>
                <th class="text-center">Purchase Date</th>
            </tr>
       </thead>
        <tbody>
            @if(count($transaction) > 0)
            @php
            $counter = 0;
        @endphp
            @foreach ($transaction as $row)
            @php
                $signal=$row->signal;
                 $service_id=\App\research::find($signal);
                $service=\App\service::find($service_id->service);
                $serviceName=$service->service;
                $buyer=\App\User::find($row->buyer);
            @endphp
          <tr>
          <td class="text-center">{{++$counter}}</td>
          <td class="text-center" scope="row">{{$serviceName}}</td>
          <td class="text-center" scope="row">{{$buyer->name}}</td>
          <td class="text-center" scope="row">{{$service->price}}</td>
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

<div class="modal fade" id="text" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Research Text</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="research_text"></p>
      </div>
     
    </div>
  </div>
</div>

@endsection