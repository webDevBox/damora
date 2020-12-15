<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\User;
use App\comments;
use App\service;
use App\asset;
use App\adminService;
use App\transaction;
use App\market;
use App\withdraw;
class ResearcherController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();

            return $next($request);
        });
    }
    //Researcher Dashboard
    public function reseacherdash()
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
         $user=Auth::user();
         $chat_users=User::where('userRole',2)->orderBy('id','desc')->get();
         $admin=User::where('userRole',1)->first();
         $latest=transaction::where('researcher',$user->id)->orderBy('id','desc')->limit(4)->get();
         $withdraw=withdraw::where('researcher',$user->id)->orderBy('id','desc')->limit(4)->get();
        return view('researcher.dashboard')->with(array('withdraw'=>$withdraw,'latest'=>$latest,'admin'=>$admin,'chat_users'=>$chat_users,'user'=>$user));
    }

     //Researcher Profile
     public function researcher_profile()
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
          $user=Auth::user();
          $chat_users=User::where('userRole',2)->orderBy('id','desc')->get();
          $admin=User::where('userRole',1)->first();
         return view('researcher.researcher_profile')->with(array('admin'=>$admin,'chat_users'=>$chat_users,'user'=>$user));
     }


     //Update Profile
     public function researcher_profile_update(Request $request,$id)
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
          if(isset($request->submit) && $request->submit=='Update')
            {
             $messages = [
                 'dimensions' => 'Allowed Image Dimension: Width: 200-225 And Height: 200-225',
             ];
                $this->validate($request,[
                 'name'=>'required',
                 'user'=>'required',
                 'email'=>'required|email'
                ]);
             $user=User::find($id);
                 //Check Unique Username
             if($request->user!=$user->user)
             {
                 $this->validate($request,[
                     'user'=>'unique:users,user'
                    ]);
             }
               //Check Unique Email
             if($request->email!=$user->email)
             {
                 $this->validate($request,[
                     'email'=>'unique:users,email'
                    ]);
             }
             if(isset($request->image))
             {
                 $this->validate($request,[
                     'image'=>'dimensions:min_width=200,max_width=225,min_height=200,max_height=225'
                 ],$messages);
             $path1=$user->image;
             Storage::delete($path1);
             $path=$request->image->store('user');
             $user->image=$path;
             }
             $user->name=$request->name;
             $user->user=$request->user;
             $user->email=$request->email;
             $user->save();
             if($user->save())
             {
                 return redirect()->back()->with('success','Your Profile Updated');
             }
             else
             {
                 return redirect()->back()->with('error','Your Profile Not Updated');
             }
            }
     }


      //Researcher Service Page
      public function research_service()
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
           $user=Auth::user();
           $chat_users=User::where('userRole',2)->orderBy('id','desc')->get();
           $admin=User::where('userRole',1)->first();
           $services=service::where('provider',$user->id)->get();
           $admin_service=adminService::get();
           $asset=asset::get();
           $market=market::get();
          return view('researcher.service')->with(array('admin_service'=>$admin_service,'asset'=>$asset,'market'=>$market,'services'=>$services,'admin'=>$admin,'chat_users'=>$chat_users,'user'=>$user));
      }



      //Add New Service
     public function researcher_service(Request $request)
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
          if(isset($request->submit) && $request->submit=='Submit')
            {
                $this->validate($request,[
                 'service'=>'required',
                 'asset'=>'required',
                 'duration'=>'required|numeric',
                 'market'=>'required',
                 'price'=>'required|numeric',
                 'sub_price'=>'required|numeric',
                 'description'=>'required'
                ]);
                $user=Auth::user();
                $service=new service;
                $service->service=$request->service;
                $service->market=$request->market;
                $service->asset=$request->asset;
                $service->price=$request->price;
                $service->subscription=$request->sub_price;
                $service->duration=$request->duration;
                $service->description=$request->description;
                if(isset($request->image))
                {
                    $path=$request->image->store('services');
                    $service->file=$path;
                }
                $service->provider=$user->id;
                $service->save();
                if($service->save())
                {
                    return redirect()->back()->with('success','Your Service Added');
                }
                else
                {
                    return redirect()->back()->with('error','Your Service Not Added');
                }
            }
     }

      //Delete Service
      public function delete_service($id)
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
           $service=service::find($id);
           $path1=$service->file;
           Storage::delete($path1);
           $service->delete();
           return redirect()->back()->with('success','Service Deleted');
      }


      //Payment History
      public function pay_history()
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
           $payment=withdraw::where('researcher',Auth::user()->id)->orderby('id','desc')->get();
           $user=Auth::user();
           $balance=$user->credit;
           return view('researcher.payment')->with(array('payment'=>$payment,'balance'=>$balance));
      }
      //Payment History
      public function apply()
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
           $user=Auth::user();
           $withdraw=new withdraw;
           $withdraw->researcher=$user->id;
           $withdraw->amount=$user->credit;
           $withdraw->save();
           if($withdraw->save())
           {
            User::where('id', $user->id)->update(['credit' => 0]);
           }
           return redirect()->back()->with('success','Your Withdraw Request generated');
      }

}
