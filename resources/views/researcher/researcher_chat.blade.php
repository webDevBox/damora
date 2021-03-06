@extends('layout.researcher_app')

@section('content')

@php
     $notify_admin=\App\chat::where('sender',$admin->id)->where('receiver',Auth::user()->id)->where('marker',0)->count();
@endphp
    <div class="row mt-5">
        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 offset-lg-2 offset-md-2 bg-white boxer2 chatbox2">
            <a href="{{route('researcher_chat',array('id'=>$admin->id))}}" class="btn btn-primary d-block chater mt-2">
                Chat With Admin
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2 d-inline">
                    @if($notify_admin > 0) <p class="dot">{{$notify_admin}}</p> @endif
                 </div>
        </a>
        <hr class="hr2">

        <h6 class="text-center text-secondary">Buyers</h6> 
        @if(Session::has('success'))
    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
    {{ Session::get('success') }} </p>
    @endif
    @if(Session::has('error'))
    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
    @endif 
    @if ($errors->has('file')) <p style="color:red;">{{ $errors->first('file') }}</p> @endif 
    @if ($errors->has('message')) <p style="color:red;">{{ $errors->first('message') }}</p> @endif 

        <input id="myInput" class="form-control mb-3" type="text" placeholder="Search For Names">

        @foreach ($chat_users as $buddy)
        @php
           $id=Auth::user()->id;
            $notify=\App\chat::where('sender',$buddy->id)->where('receiver',$id)
            ->where('marker',0)->count();
            $pump=\App\chat::whereIn('sender',[$buddy->id,$id])->whereIn('receiver',[$id,$buddy->id])->orderBy('id','desc')->first();
        @endphp
        <ul id="chat_ul">
            <div @if(isset($user) && $buddy->id == $user->id) class="active" @endif id="active">
                <li>
                    <a href="{{route('researcher_chat',array('id'=>$buddy->id))}}" 
                         style="text-decoration: none; padding-top:10px; color:black;">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                            @if($buddy->image != null)
                            <img src="{{asset('image/'.$buddy->image)}}" alt="" class="thumbnail d-inline img-fluid d-inline-flex">
                            @else
                            <img src="{{asset('img/boy.png')}}" alt="" class="thumbnail d-inline img-fluid d-inline-flex">
                            @endif
                        </div>
                        <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
                <p class="chat_user">{{$buddy->name}}</p>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
                           @if($notify > 0) <p class="dot">{{$notify}}</p> @endif
                        </div>
                        <div class="text-secondary col-lg-9 col-md-9 col-sm-9 col-xs-9 offset-lg-3 offset-md-3 offset-sm-3 offset-xs-3">
                            <p class="pump">@if(isset($pump)) {{$pump->message}} @endif</p>
                        </div>
                    </div>
                </a>
               
                <hr class="hr3">
               </li>
               
            </div>
            
            
        </ul>
        @endforeach
        </div>
        @if(isset($chats))
        <div id="pointer" class="col-md-6 col-lg-6 col-sm-9 col-xs-9 bg-white boxer1 mb-3 chatbox">
            @foreach ($chats as $chat)
           
            <div class="row container">
                @if ($chat->sender == Auth::user()->id)
                    <div class="col-md-8 col-lg-8 col-sm-9 col-xs-9 mt-2 mb-2 make-it-slow me boxer">
                        @if($chat->file != null)
                        <img src="{{asset('image/'.$chat->file)}}" style="width: 150px; height:150px;">
                        @endif   
                        <p class="inline_para"> {{$chat->message}}</p> 
                        <p class="text-right">{{ $chat->created_at }}</p>
                    </div>
                    @else
                    <div class="boxer mt-2 mb-2 make-it-slow other offset-md-4 offset-lg-4 offset-sm-3 offst-xs-3 col-md-8 col-lg-8 col-sm-9 col-xs-9">
                        @if($chat->file != null)
                        <img src="{{asset('image/'.$chat->file)}}" style="width: 150px; height:150px;">
                        @endif 
                        <p class="inline_para"> {{$chat->message}}</p> 
                        <p class="text-right">{{ $chat->created_at }}</p>
                    </div>
                @endif
            </div>
            @endforeach
           
            <div class="sender">
                <form action="{{route('send_message_researcher')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                        <div class="col-md-8 col-lg-8 col-sm-10 col-xs-10 form-group">
                            <input type="text" name="message" class="form-control" placeholder="Enter Your Message">
                        <input type="text" style="display: none;" name="receiver" value="{{$user->id}}">
                        </div>
                        <div class="form-group col-md-1 col-lg-1 col-sm-2 col-xs-2">
                            <i class="fa fa-paperclip btn btn-success mt-1" aria-hidden="true" id="attach"></i>
                            <input type="file" name="file" id="file" style="display: none;">
                        </div>
                        <div class="form-group col-md-2 col-lg-2 col-sm-2 col-xs-2">
                            <input type="submit" name="submit" value="Send" class="btn btn-primary">
                        </div>
                    </div>
                    </form>
                </div>
        </div>
        @else
        <div id="pointer" class="col-md-6 col-lg-6 col-sm-9 col-xs-9 bg-white boxer1 mb-3 chatbox">

            <h3 class="text-center h3"> Select Buyer From Menu </h3>
            <img src="{{asset('img/wireless.png')}}" class="d-block mx-auto">

        </div>

        @endif

    </div>
    <script>
        var txt= $('.pump').text();
        if(txt.length > 20)
        $('.pump').text(txt.substring(0,18) + '.....');
    </script>
@endsection