@extends('layout.admin_app')
@section('content')
    <div class="row mt-5">
        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 offset-lg-2 offset-md-2 bg-white boxer2 chatbox2">
            <div class="row mt-3">
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                    <p>Researchers</p>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
                    <label class="switch">
                        <input type="checkbox" id="toggle" >
                        <span class="slider round"></span>
                      </label> 
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                    <p>Buyers</p>
                </div>
            </div>
            @if(Session::has('success'))
            <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
            {{ Session::get('success') }} </p>
            @endif
            @if(Session::has('error'))
            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
            @endif 
            @if ($errors->has('file')) <p style="color:red;">{{ $errors->first('file') }}</p> @endif 
            @if ($errors->has('message')) <p style="color:red;">{{ $errors->first('message') }}</p> @endif 
        
        <hr class="hr2">

        
        <input id="myInput" class="form-control mb-3" type="text" placeholder="Search For Names">
        <div id="researcher">
            <h6 class="text-center text-secondary">Researchers</h6> 
        @foreach ($researcher as $user)
        @php
            $notify=\App\chat::where('sender',$user->id)->where('receiver',$admin->id)
            ->where('marker',0)->count();
        @endphp
        <ul id="chat_ul">
            <div @if(isset($actor) && $user->id == $actor->id) class="active" @endif id="active">
                <li>
                    <a href="{{route('chat',array('id'=>$user->id))}}" 
                         style="text-decoration: none; padding-top:10px; color:black;">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                            @if($user->image != null)
                            <img src="{{asset('image/'.$user->image)}}" alt="" class="thumbnail d-inline img-fluid d-inline-flex">
                            @else
                            <img src="{{asset('img/boy.png')}}" alt="" class="thumbnail d-inline img-fluid d-inline-flex">
                            @endif
                        </div>
                        <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
                <p class="chat_user">{{$user->name}}</p>
                        </div>
                        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
                           @if($notify > 0) <p class="dot">{{$notify}}</p> @endif
                        </div>
                    </div>
                </a>
                <hr class="hr3">
               </li>
            </div>
        </ul>
        @endforeach
        </div>
        
        <div id="buyer" style="display: none;">
            <h6 class="text-center text-secondary">Buyers</h6> 

            @foreach ($buyer as $user)
            @php
                $notify=\App\chat::where('sender',$user->id)->where('receiver',$admin->id)
                ->where('marker',0)->count();
            @endphp
            <ul id="chat_ul">
                <div @if(isset($actor) && $user->id == $actor->id) class="active" @endif id="active">
                    <li>
                        <a href="{{route('chat',array('id'=>$user->id))}}" 
                             style="text-decoration: none; padding-top:10px; color:black;">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                                @if($user->image != null)
                                <img src="{{asset('image/'.$user->image)}}" alt="" class="thumbnail d-inline img-fluid d-inline-flex">
                                @else
                                <img src="{{asset('img/boy.png')}}" alt="" class="thumbnail d-inline img-fluid d-inline-flex">
                                @endif
                            </div>
                            <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5">
                    <p class="chat_user">{{$user->name}}</p>
                            </div>
                            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
                               @if($notify > 0) <p class="dot">{{$notify}}</p> @endif
                            </div>
                        </div>
                    </a>
                    <hr class="hr3">
                   </li>
                </div>
            </ul>
            @endforeach
        </div>
        
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
                     <form action="{{route('send_message')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-10 col-xs-10 form-group">
                    <input type="text" name="message" class="form-control" placeholder="Enter Your Message">
                <input type="text" style="display: none;" name="receiver" value="{{$actor->id}}">
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

            <h3 class="text-center h3"> Select User From Menu </h3>
            <img src="{{asset('img/wireless.png')}}" class="d-block mx-auto">

        </div>

        @endif


    </div>


    <script>
        $("#toggle").click(function() {
            $("#buyer").slideToggle();
            $("#researcher").slideToggle();
        });
      </script>

@endsection