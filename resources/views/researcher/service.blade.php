@extends('layout.researcher_app')

@section('content')


<div class="bg-white boxer container mt-3">
    <div class="row">
    <h3 class="h3">Services List</h3>
    <a href="#" data-toggle="modal" data-target="#new" class="btn-theme offset-md-8 offset-lg-8 offset-sm-5 offset-xs-5 mt-2">Add New Service</a>
</div>
    @if(Session::has('success'))
    <p class="col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-success') }}">
    {{ Session::get('success') }} </p>
    @endif
    @if(Session::has('error'))
    <p class="col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-danger') }}">
        {{ Session::get('error') }}</p>
    @endif 
    @if ($errors->has('service')) <p style="color:red;">{{ $errors->first('service') }}</p> @endif 
    @if ($errors->has('asset')) <p style="color:red;">{{ $errors->first('asset') }}</p> @endif 
    @if ($errors->has('duration')) <p style="color:red;">{{ $errors->first('duration') }}</p> @endif 
    @if ($errors->has('market')) <p style="color:red;">{{ $errors->first('market') }}</p> @endif 
    @if ($errors->has('price')) <p style="color:red;">{{ $errors->first('price') }}</p> @endif 
    @if ($errors->has('description')) <p style="color:red;">{{ $errors->first('description') }}</p> @endif 
    @if ($errors->has('image')) <p style="color:red;">{{ $errors->first('image') }}</p> @endif 

    <table class="table table-bordered table-hover table-md table-lg mt-5">
       <thead>
            <tr>
                <th class="text-center">Service</th>
                <th class="text-center">market</th>
                <th class="text-center">asset</th>
                <th class="text-center">Signal</th>
                <th class="text-center">Subscription</th>
                <th class="text-center">duration</th>
                <th class="text-center">Image</th>
                <th class="text-center">Added</th>
                <th class="text-center">Action</th>
            </tr>
       </thead>
        <tbody>
            @if(count($services) > 0)
            @foreach ($services as $row)
          <tr>
          <td class="text-center" scope="row">{{$row->service}}</td>
          <td class="text-center" scope="row">{{$row->market}}</td>
          <td class="text-center" scope="row">{{$row->asset}}</td>
          <td class="text-center" scope="row">${{$row->price}}</td>
          <td class="text-center" scope="row">${{$row->subscription}}</td>
          <td class="text-center" scope="row">{{$row->duration}}</td>
          <td class="text-center" scope="row">
            <img src="{{asset('image/'.$row->file)}}" class="profile-image mx-auto d-block img-fluid" id="db_img" alt="">
          </td>
           <td class="text-center" scope="row">{{$row->created_at}}</td>
           <td class="text-center" scope="row"> 
               <a href="{{route('delete_service',array('id'=>$row->id))}}" class="btn btn-danger"> Delete </a> 
              </td>
          </tr>
          @endforeach
         @else
         No Record Found
         @endif
         
        </tbody>
      </table>
</div>

<div class="modal fade" id="new" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Publish a Service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{route('researcher_service')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <select name="service" id="" class="form-control" required>
                    <option selected disabled > Service Type </option>
                    @foreach ($admin_service as $item)
                        <option value="{{$item->name}}">{{$item->name}}</option>
                    @endforeach
                  </select>

                  <br>

                  <select name="asset" id="" class="form-control" required>
                    <option selected disabled > Asset Type </option>
                    @foreach ($asset as $item)
                        <option value="{{$item->name}}">{{$item->name}}</option>
                    @endforeach
                  </select>

                  <br>

                  <input type="number" name="duration" placeholder="Duration" class="form-control">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                  <select name="market" id="" class="form-control" required>
                    <option selected disabled > Market Type </option>
                    @foreach ($asset as $item)
                        <option value="{{$item->name}}">{{$item->name}}</option>
                    @endforeach
                  </select>

                  <br>

                  <input type="number" name="price" placeholder="Per Signal Price" class="form-control">
                  <br>    
                  <input type="number" name="sub_price" placeholder="Service Subscription Price" class="form-control">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-5">
                  <textarea name="description" id="" rows="5" class="form-control" placeholder="Enter Description" required></textarea>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-5">
                  <div class="imager" id="img-select">
                    <h3 class="text-center mt-3">Add an Image</h3>
                  </div>
                  <input type="file" accept="image/*" name="image" class="d-none" id="img-collect">
                  <img src="" id="blah" style="">
                </div>
                
              </div>
              <center><input type="submit" name="submit" value="Submit" class="btn btn-primary mt-3"></center>
          </form>
        </div>
       
      </div>
    </div>
  </div>


  <script>
      function readimg(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function (e) {
        $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
}
}
$('#blah').attr('style','display:none;');

$("#img-collect").change(function(){
$('#db_img').attr('class','d-none');
$('#blah').attr('class','profile-image mx-auto d-block img-fluid');
readimg(this);
});
  </script>

@endsection