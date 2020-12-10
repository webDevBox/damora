@extends('layout.researcher_app')

@section('content')
<div class="bg-white boxer container mt-3">
<h3 class="h3 text-center mt-5">Edit {{$research->researchName}} Research</h3>
    @if(Session::has('success'))
    <p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-success') }}">
    {{ Session::get('success') }} </p>
    @endif
    @if(Session::has('error'))
    <p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
    @endif 
    <div class="row">
        <div class="lagend offset-md-3 offset-lg-3 col-lg-6 col-md-6 col-sm-10 col-xs-10 rounded">
            <form action="{{route('update_research',array('id'=>$research->id))}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                  <label>Research Detail</label>
                  <textarea name="detail" rows="4" class="form-control" required>{{ $research->detail }}</textarea>
                  @if ($errors->has('detail')) <p style="color:red;">{{ $errors->first('detail') }}</p> @endif 
  
              </div>
              <hr>
                <div class="form-group">
                  <label>Research Service</label>
                  <br>
                  <select name="service" id="" class="form-control">
                    @foreach ($services as $service)
                  <option value="{{$service->id}}" @if($research->service == $service->id) selected @endif> {{$service->service}} </option>
                    @endforeach
                  </select>
                </div>
                <hr>
                <div class="form-group">
                  <label>Research File</label><br>
                  <a id="img-select" class="btn_theme">Change File</a><br><br>
                    <p id="para"></p>
                    <input type="file" id="img-collect" class="form-control d-none" name="file">
                  @if ($errors->has('file')) <p style="color:red;">{{ $errors->first('file') }}</p> @endif 
   
              </div>
                
  
                <center><input type="submit" name="update" value="Update" class="btn btn-primary"></center>
            </form>
        </div>
    </div>

</div>
<script>
 
  $('#para').attr('class','d-none');
  $("#img-collect").change(function(){
  $('#para').attr('class','text-success text-left mt-3');
  $('#para').html('File Selected');
  });
  </script>
@endsection