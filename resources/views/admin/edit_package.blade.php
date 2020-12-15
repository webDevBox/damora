@extends('layout.admin_app')

@section('content')
<div class="bg-white boxer container mt-3">
<h3 class="h3 text-center">Edit Package</h3>
    @if(Session::has('success'))
    <p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-success') }}">
    {{ Session::get('success') }} </p>
    @endif
    @if(Session::has('error'))
    <p class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
    @endif 
    <div class="row">
        <div class="lagend offset-md-3 offset-lg-3 col-lg-6 col-md-6 col-sm-10 col-xs-10 rounded">
        <form action="{{route('update_package',array('id'=>$package->id))}}" method="POST" class="form">
        @csrf
        <div class="form-group mt-3">
            <div class="row">
            <div class="col-5 mt-2"><label>Enter Package Credits</label> </div>
       <div class="col-7"> 
           <input type="number" name="credit" value="{{$package->credit}}" class="form-control border-top-0 border-right-0 border-left-0" required>
            @if ($errors->has('credit')) <p style="color:red;">{{ $errors->first('credit') }}</p> @endif 
        </div> 
        </div>
    </div>

    <div class="form-group mt-3">
        <div class="row">
        <div class="col-5 mt-2"><label>Enter Package Price</label> </div>
   <div class="col-7"> 
       <input type="number" name="price" value="{{$package->price}}" class="form-control border-top-0 border-right-0 border-left-0" required>
        @if ($errors->has('price')) <p style="color:red;">{{ $errors->first('price') }}</p> @endif 
    </div> 
    </div>
</div>

        <input type="submit" name="submit" value="Update" class="btn-theme mx-auto d-block">
      </form>
        </div>
    </div>

</div>




@endsection