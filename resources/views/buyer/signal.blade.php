@extends('layout.buyer_app')
@section('content')
<div class="bg-white boxer container mt-3">
<h3 class="h3 text-left mt-5 d-inline"> {{$seller->name}} Signals List</h3>
<h5 class="h5 mt-5 d-inline offset-md-4 offset-lg-5 offset-sm-12 offset-xs-12">Service Credits: <span style="color: green">{{$service->price}}</span></h5>
    @if(Session::has('success'))
    <p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-success') }}">
    {{ Session::get('success') }} </p>
    @endif
    @if(Session::has('error'))
    <p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
    @endif 
    @if(Session::has('ready'))
    <p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('ready') }}</p>
    @endif 
    
   
    <div class="table-responsive">
        <table class="table table-borderless table-hover table-md table-lg">
            <thead>
                 <tr>
                     <th class="text-center">No. </th>
                     <th class="text-center">Detail</th>
                     <th class="text-center">Added</th>
                     <th class="text-center">File</th>
                 </tr>
            </thead>
             <tbody>
                 @if(count($signals) > 0)
                 @php
                 $counter = 0;
                 $price=$service->price
             @endphp
                 @foreach ($signals as $row)
               <tr>
                   <td class="text-center" style=" padding: 30px 0;">{{++$counter}}</td>
                   <td class="text-center" scope="row" style=" padding: 30px 0;">  
                    <a  data-toggle="modal" href="#description" id="{{$row->detail}}" class="clicker btn-theme"> View </a>
                    </td>
                    <td class="text-center" style=" padding: 30px 0;">{{$row->created_at}}</td>
                <td class="text-center" scope="row" style=" padding: 30px 0;">
                  @if($service->price <= Auth::user()->credit)
                  @if(Session::has('ready'))
                  <a href="{{asset('image/'.$row->file)}}" class="btn btn-success" download="Research Document"> Download </a>
                  @else
                  <a href="{{route('file_down',array('id'=>$row->id))}}" class="btn btn-success"> Apply Now</a>
                  @endif
                  @else
                  <a href="{{route('add_credit')}}" class="btn btn-success">Low Credits</a>
                  @endif
                </td>
                  
               </tr>
               @endforeach
              @else
              No Record Found
              @endif
              
             </tbody>
           </table>            
    </div>
    <div class="modal fade" id="description" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Settings</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
           <p id="shower" class="pop_up_data"></p>
            </div>
           
          </div>
        </div>
      </div>

    </div>

    

<script>
    $('.clicker').click(function()
    {
        var text=$(this).attr('id');
        $('#shower').html(text);
    });
</script>

@endsection