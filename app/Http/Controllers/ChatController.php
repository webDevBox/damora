<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\User;
use App\comments;
use App\chat;
class ChatController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();

            return $next($request);
        });
    }


    //Blank Chat Page for Admin
    public function admin_chat()
    {
        if (Auth::check()) {
            if($this->user->userRole != 1)
            {
             return redirect('/admin');
            }
         }
         else
         {
             return redirect('/admin');
         }
            $buyer=User::where('userRole',2)->orderBy('id','desc')->get();
            $researcher=User::where('userRole',3)->orderBy('id','desc')->get();
            $admin=Auth::user();
            return view('admin.chat')->with(array('admin'=>$admin,'buyer'=>$buyer,'researcher'=>$researcher));
    }
    

      //Admin Chat Page
    public function chat($id)
    {
        if (Auth::check()) {
            if($this->user->userRole != 1)
            {
             return redirect('/admin');
            }
         }
         else
         {
             return redirect('/admin');
         }
         $chats=chat::where('sender',$id)->orWhere('receiver',$id)->get();
         $buyer=User::where('userRole',2)->orderBy('id','desc')->get();
         $researcher=User::where('userRole',3)->orderBy('id','desc')->get();
         $actor=User::find($id);
         $admin=Auth::user();
         chat::where('sender',$id)->where('receiver',$admin->id)->update(['marker' => 1]);
         return view('admin.chat')->with(array('admin'=>$admin,'actor'=>$actor,'researcher'=>$researcher,'buyer'=>$buyer,'chats'=>$chats));
        }

         //Send Message From admin side
    public function send_message(Request $request)
    {
        if (Auth::check()) {
            if($this->user->userRole != 1)
            {
             return redirect('/admin');
            }
         }
         else
         {
             return redirect('/admin');
         }
         if(isset($request->submit))
         {
            $this->validate($request,[
                'receiver'=>'required',
                'file'=>'mimes:jpeg,jpg,png,gif'
            ]);
            if(!isset($request->message) && !isset($request->file))
            {
                return redirect()->back()->with('error','Blank Message Not allowed');
            }
            if(!isset($request->message))
            {
                $this->validate($request,[
                    'file'=>'required'
                ]); 
            }
            if(!isset($request->file))
            {
                $this->validate($request,[
                    'message'=>'required'
                ]); 
            }


         $message=new chat;
         if(isset($request->message))
         {
           $message->message=$request->message;
         }
         else
         {
           $message->message=null;
         }
         if(isset($request->file))
          {
            $path=$request->file->store('chat');
            $message->file=$path;
          }
          else
          {
            $message->file=null;
          }
         $message->sender=Auth::user()->id;
         $message->receiver=$request->receiver;
         $message->marker=0;
         $message->save();
         return redirect()->back();
        }
    }



    //Send Message From Buyer side
    public function send_message_buyer(Request $request)
    {
       if (Auth::check()) {
           if($this->user->userRole != 2)
           {
            return redirect('/login');
           }
        }
        else
        {
            return redirect('/login');
        }
         if(isset($request->submit))
         {
            $this->validate($request,[
                'receiver'=>'required',
                'file'=>'mimes:jpeg,jpg,png,gif'
            ]);
            if(!isset($request->message) && !isset($request->file))
            {
                return redirect()->back()->with('error','Blank Message Not allowed');
            }
            if(!isset($request->message))
            {
                $this->validate($request,[
                    'file'=>'required'
                ]); 
            }
            if(!isset($request->file))
            {
                $this->validate($request,[
                    'message'=>'required'
                ]); 
            }

         $message=new chat;
         if(isset($request->message))
         {
           $message->message=$request->message;
         }
         else
         {
           $message->message=null;
         }
         if(isset($request->file))
          {
            $path=$request->file->store('chat');
            $message->file=$path;
          }
          else
          {
            $message->file=null;
          }
         $message->sender=Auth::user()->id;
         $message->receiver=$request->receiver;
         $message->marker=0;
         $message->save();
         return redirect()->back();
        }
    }





    //Blank Chat Page for Researcher
    public function researcher_chat_page()
    {
        if (Auth::check()) 
        {
            if($this->user->userRole != 3)
            {
             return redirect('/login');
            }
        }
         else
        {
             return redirect('/login');
        }
            $chat_users=User::where('userRole',2)->orderBy('id','desc')->get();
            $admin=User::where('userRole',1)->first();
            return view('researcher.researcher_chat')->with(array('admin'=>$admin,'chat_users'=>$chat_users));
    }

    //Researcher Chat Page
    public function researcher_chat($id)
    {
        if (Auth::check()) 
        {
            if($this->user->userRole != 3)
            {
             return redirect('/login');
            }
        }
         else
        {
             return redirect('/login');
        }
            $researcher=Auth::user();
            $chats=chat::whereIn('sender',[$id,$researcher->id])->whereIn('receiver',[$id,$researcher->id])->get();
            $chat_users=User::where('userRole',2)->orderBy('id','desc')->get();
            chat::where('sender',$id)->where('receiver',$researcher->id)->update(['marker' => 1]);
            $admin=User::where('userRole',1)->first();
            $user=User::find($id);
            return view('researcher.researcher_chat')->with(array('admin'=>$admin,'user'=>$user,'chat_users'=>$chat_users,'chats'=>$chats));
    }

    //Buyer Chat Page
    public function buyer_chat($id)
    {
        if (Auth::check()) 
        {
            if($this->user->userRole != 2)
            {
             return redirect('/login');
            }
        }
         else
        {
             return redirect('/login');
        }
            $buyer=Auth::user();
            $chats=chat::whereIn('sender',[$id,$buyer->id])->whereIn('receiver',[$id,$buyer->id])->get();
            chat::where('sender',$id)->where('receiver',$buyer->id)->update(['marker' => 1]);
            $chat_users=User::where('userRole',3)->orderBy('id','desc')->get();
            $admin=User::where('userRole',1)->first();
            $researcher=User::find($id);
            return view('buyer.buyer_chat')->with(array('admin'=>$admin,'researcher'=>$researcher,'chat_users'=>$chat_users,'chats'=>$chats));
    }

    //Blank Chat Page for Buyer
    public function chat_page()
    {
        if (Auth::check()) 
        {
            if($this->user->userRole != 2)
            {
             return redirect('/login');
            }
        }
         else
        {
             return redirect('/login');
        }
            $chat_users=User::where('userRole',3)->orderBy('id','desc')->get();
            $admin=User::where('userRole',1)->first();
            return view('buyer.buyer_chat')->with(array('admin'=>$admin,'chat_users'=>$chat_users));
    }



    

     //Send Message From Researcher side
     public function send_message_researcher(Request $request)
     {
        if (Auth::check()) {
            if($this->user->userRole != 3)
            {
             return redirect('/login');
            }
         }
         else
         {
             return redirect('/login');
         }
          if(isset($request->submit))
          {
             $this->validate($request,[
                 'receiver'=>'required',
                 'file'=>'mimes:jpeg,jpg,png,gif'
             ]);
             if(!isset($request->message) && !isset($request->file))
             {
                 return redirect()->back()->with('error','Blank Message Not allowed');
             }
             if(!isset($request->message))
             {
                 $this->validate($request,[
                     'file'=>'required'
                 ]); 
             }
             if(!isset($request->file))
             {
                 $this->validate($request,[
                     'message'=>'required'
                 ]); 
             }
          $message=new chat;
          if(isset($request->message))
          {
            $message->message=$request->message;
          }
          else
          {
            $message->message=null;
          }
          if(isset($request->file))
          {
            $path=$request->file->store('chat');
            $message->file=$path;
          }
          else
          {
            $message->file=null;
          }
          $message->sender=Auth::user()->id;
          $message->receiver=$request->receiver;
          $message->marker=0;
          $message->save();
          return redirect()->back();
         }
     }



}
