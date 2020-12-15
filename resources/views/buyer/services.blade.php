@extends('layout.buyer_app')

@section('content')
<div class="bg-white boxer container mt-3">
<h3 class="h3 text-center mt-5">{{$researcher->name}} Services List</h3>
    @if(Session::has('success'))
    <p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-success') }}">
    {{ Session::get('success') }} </p>
    @endif
    @if(Session::has('error'))
    <p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
    @endif 
        
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-md table-lg">
            <thead>
                 <tr>
                     <th class="text-center">No. </th>
                     <th class="text-center">Image</th>
                     <th class="text-center">Description</th>
                     <th class="text-center">Name</th>
                     <th class="text-center">Market</th>
                     <th class="text-center">Asset</th>
                     <th class="text-center">Signal Credits</th>
                     <th class="text-center">Duration</th>
                     <th class="text-center">Action</th>
                 </tr>
            </thead>
             <tbody>
                 @if(count($service) > 0)
                 @php
                 $counter = 0;
             @endphp
                 @foreach ($service as $row)
               <tr>
                   <td class="text-center" style=" padding: 30px 0;">{{++$counter}}</td>
               <td class="text-center" scope="row"> <img src="{{asset('image/'.$row->file)}}"  class="profile-image mx-auto d-block img-fluid">
               </td>
               <td class="text-center" scope="row" style="width:20%; padding: 30px 0;">  
                <div style="text-align: justify; text-justify: inter-word;" class="pump d-inline">
                  {{$row->description}} <a class="more text-primary"  style="cursor: pointer; display:none;"> more..</a>
                </div>
              </td>
               <td class="text-center" style=" padding: 30px 0;" scope="row">{{$row->service}}</td>
                <td class="text-center" scope="row" style=" padding: 30px 0;">{{$row->market}}</td>
                <td class="text-center" scope="row" style=" padding: 30px 0;">{{$row->asset}}</td>
                <td class="text-center" scope="row" style=" padding: 30px 0;">${{$row->price}}</td>
                <td class="text-center" scope="row" style=" padding: 30px 0;">{{$row->duration}}</td>
                <td class="text-center" scope="row" style=" padding: 30px 0;">
                   <a href="{{route('signal_list',array('service'=>$row->id,'researcher'=>$researcher->id))}}" class="btn-theme-border"> Signals </a> 
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

<script>
  var txt= $('.pump').text();
       if(txt.length > 50)
       {
       $(this).text(txt.substring(0,45));
       $('.more').attr('style','cursor: pointer; display:inline');
       }

       $('.more').click(function()
       {     
        $(this).attr('style','display:inline; color:black;');                                     
         $(this).text(txt);
       });
</script>
@endsection