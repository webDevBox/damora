@extends('layout.admin_app')

@section('content')
<div class="bg-white boxer container mt-3">
    <h3 class="h3">Buyers List</h3>
    @if(Session::has('success'))
    <p class="col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-success') }}">
    {{ Session::get('success') }} </p>
    @endif
    @if(Session::has('error'))
    <p class="col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
    @endif 
    <table class="table table-borderless table-md table-lg">
       <thead>
            <tr>
                <th class="text-center">No. </th>
                <th class="text-center">Image</th>
                <th class="text-center">Name</th>
                <th class="text-center">UserName</th>
                <th class="text-center">Email</th>
                <th class="text-center">Credits</th>
                <th class="text-center">Status</th>
                <th class="text-center">Added</th>
                <th class="text-center">Action</th>
            </tr>
       </thead>
        <tbody>

            @if(count($buyer) > 0)
            @php
                $counter = 0;
            @endphp
            @foreach($buyer as $row)
          <tr>
              <td class="text-center">{{++$counter}}</td>
          <td class="text-center" scope="row"> <img src="{{asset('img/profile.png')}}" width="50" height="40" alt=""> </td>
            <td class="text-center" scope="row">{{$row->name}}</td>
            <td class="text-center" scope="row">{{$row->user}}</td>
             <td class="text-center" scope="row">{{$row->email}}</td>
             <td class="text-center" scope="row">{{$row->credit}}</td>
             <td class="text-center" scope="row">
                 @if($row->status == 1)
                 Active
                 @endif
                 @if($row->status == 3)
                 Inactive
                 @endif
             </td>
             <td class="text-center" scope="row">{{$row->created_at}}</td>
             <td class="text-center" scope="row">
                 <div class="row">
                 <div class="col-6"> <a href="{{route('edit_buyer',array('id'=>$row->id))}}" class="btn-theme-border"> Edit </a> </div>
                 <div class="col-6"> 
                     @if($row->status == 1)
                     <a href="{{route('deactive_buyer',array('id'=>$row->id))}}" class="btn-theme"> InActive </a> 
                     @endif
                     @if($row->status == 3)
                     <a href="{{route('del_buyer',array('id'=>$row->id))}}" class="btn-theme"> Delete </a> 
                     @endif                    
                    </div>
                </div>
                </td>
            
          </tr>
          @endforeach
         @else
          No Record Found
         @endif
         
        </tbody>
      </table>
</div>
@endsection