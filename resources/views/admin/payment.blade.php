@extends('layout.admin_app')

@section('content')
<div class="bg-white boxer1 container mt-5">
    <h3 class="h3 text-center">Withdraw Requests</h3>
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
                <th class="text-center">Researcher</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Request Date & Time</th>
                <th class="text-center">Action</th>
                
            </tr>
       </thead>
        <tbody>
            @if(count($payment) > 0)
            @php
            $counter = 0;
        @endphp
            @foreach ($payment as $row)
            @php
                $user=\App\User::find($row->researcher);
            @endphp
          <tr>
            <td class="text-center">{{++$counter}}</td>
          <td class="text-center" scope="row">{{$user->name}}</td>
          <td class="text-center text-success" scope="row">${{$row->amount}}</td>
         <td class="text-center" scope="row">{{$row->created_at}}</td>
         <td class="text-center" scope="row">
            <a href="{{route('withdraw_action',array('id'=>$row->id,'status'=>2))}}" class="btn-theme-border"> Reject </a> 
            <a href="{{route('withdraw_action',array('id'=>$row->id,'status'=>1))}}" class="btn-theme"> Accept </a> 
         </td>

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