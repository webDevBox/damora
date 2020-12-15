@extends('layout.admin_app')

@section('content')
<div class="bg-white boxer container mt-3">
    <div class="row">
        <div class="col-8">
    <h3 class="h3">Package Info</h3>
    <h5 class="h5">Total Packages: {{count($package)}}</h5>
        </div>
        <div class="col-4">
        <a data-toggle="modal" href="#package" class="btn-theme mt-4">Add New Package</a>
        </div>
    </div>
</div>
<div class="bg-white boxer container mt-3">
    <h3 class="h3">Packages List</h3>
    @if(Session::has('success'))
    <p class="col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-success') }}">
    {{ Session::get('success') }} </p>
    @endif
    @if(Session::has('error'))
    <p class="col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-danger') }}">
        {{ Session::get('error') }}</p>
    @endif 
    @if ($errors->has('credit')) <p style="color:red;">{{ $errors->first('credit') }}</p> @endif 
    @if ($errors->has('price')) <p style="color:red;">{{ $errors->first('price') }}</p> @endif 

    <table class="table table-borderless table-hover table-md table-lg">
       <thead>
            <tr>
                <th class="text-center">No. </th>
                <th class="text-center">Credits</th>
                <th class="text-center">Price</th>
                <th class="text-center">Added</th>
                <th class="text-center">Action</th>
            </tr>
       </thead>
        <tbody>
            @if(count($package) > 0)
            @php
            $counter = 0;
        @endphp
            @foreach ($package as $row)
          <tr>
              <td class="text-center">{{++$counter}}</td>
          <td class="text-center" scope="row">{{$row->credit}}</td>
          <td class="text-center" scope="row">${{$row->price}}</td>
           <td class="text-center" scope="row">{{$row->created_at}}</td>
           <td class="text-center" scope="row">
             
            <a href="{{route('edit_package',array('id'=>$row->id))}}" class="btn-theme-border"> Edit </a>
               
            <a href="{{route('del_package',array('id'=>$row->id))}}" class="btn-theme"> Delete </a> 
                     
              </td>
          </tr>
          @endforeach
         @else
         No Record Found
         @endif
         
        </tbody>
      </table>
</div>

<div class="modal fade" id="package" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Package</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{route('add_package')}}" method="POST">
            @csrf
           <div class="form-group">
               <input type="number" name="credit" class="form-control" placeholder="Enter Number Of Credits" required>
           </div>
           <div class="form-group">
            <input type="number" name="price" class="form-control" placeholder="Enter Price Of Credits" required>
        </div>
        <input type="submit" name="submit" value="Add" class="btn-theme d-block mx-auto">
       </form>
        </div>
       
      </div>
    </div>
  </div>


@endsection