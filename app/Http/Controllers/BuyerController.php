<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\User;
use App\package;
use App\service;
use App\research;
use App\transaction;
use App\subscription;
use Carbon\Carbon;
class BuyerController extends Controller
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
    public function buyerdash()
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
         $user=Auth::user();
         $chat_users=User::where('userRole',3)->orderBy('id','desc')->get();
         $admin=User::where('userRole',1)->first();
         $latest=transaction::where('buyer',$user->id)->orderBy('id','desc')->limit(4)->get();
         $package=package::orderBy('id','desc')->limit(4)->get();
        return view('buyer.dashboard')->with(array('package'=>$package,'latest'=>$latest,'admin'=>$admin,'chat_users'=>$chat_users,'user'=>$user));
    }

     //Buyer Profile
     public function buyer_profile()
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
          $user=Auth::user();
          $chat_users=User::where('userRole',2)->orderBy('id','desc')->get();
          $admin=User::where('userRole',1)->first();
         return view('buyer.profile')->with(array('admin'=>$admin,'chat_users'=>$chat_users,'user'=>$user));
     }


     //Update Profile
     public function buyer_profile_update(Request $request,$id)
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


     //Researcher List
     public function buyer_researcher()
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
          $user=Auth::user();
          $chat_users=User::where('userRole',2)->orderBy('id','desc')->get();
          $admin=User::where('userRole',1)->first();
          $researcher=User::where('userRole',3)->where('status',1)->orderBy('id','desc')->get();
         return view('buyer.researcher')->with(array('researcher'=>$researcher,'admin'=>$admin,'chat_users'=>$chat_users,'user'=>$user));
     }

     //Services List
     public function service_list($id)
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
          $user=Auth::user();
          $chat_users=User::where('userRole',2)->orderBy('id','desc')->get();
          $admin=User::where('userRole',1)->first();
          $service=service::where('provider',$id)->orderBy('id','desc')->get();
          $researcher=User::find($id);
         return view('buyer.services')->with(array('researcher'=>$researcher,'service'=>$service,'admin'=>$admin,'chat_users'=>$chat_users,'user'=>$user));
     }

      //Signals List
      public function signal_list($service,$researcher)
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
           $user=Auth::user();
           $chat_users=User::where('userRole',2)->orderBy('id','desc')->get();
           $admin=User::where('userRole',1)->first();
           $signals=research::where('researcher',$researcher)->where('service',$service)->orderBy('id','desc')->get();
           $seller=User::find($researcher);
           $service=service::find($service);
          return view('buyer.signal')->with(array('service'=>$service,'seller'=>$seller,'signals'=>$signals,'admin'=>$admin,'chat_users'=>$chat_users,'user'=>$user));
      }

       //Signals List
       public function add_credit()
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
            $user=Auth::user();
            $chat_users=User::where('userRole',2)->orderBy('id','desc')->get();
            $admin=User::where('userRole',1)->first();
            $package=package::get();
           return view('buyer.credit')->with(array('package'=>$package,'admin'=>$admin,'chat_users'=>$chat_users,'user'=>$user));
       }


        //Signals Download
      public function file_down($id)
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
           $user=Auth::user();
           $signals=research::find($id);
           $service=$signals->service;
           $pricer=service::find($service);
           $price=$pricer->price;
           $credit=$user->credit;
           $now=$credit-$price;
           User::where('id', $user->id)->update(['credit' => $now]);
           //update Researcher Balance
           $researcher=$signals->researcher;
           $record=User::find($researcher);
           $credit=$record->credit;
           $balance=($price*0.8)+$credit;
           User::where('id', $researcher)->update(['credit' => $balance]);
           //Add Transaction history
           $transaction=new transaction;
           $transaction->researcher=$researcher;
           $transaction->buyer=$user->id;
           $transaction->signal=$id;
           $transaction->save();
           return redirect()->back()->with('ready','You can download File before Page Reload');
        }
        //Services List
        public function services()
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
             $services=service::get();
            return view('buyer.service_list')->with(array('services'=>$services));
        }




       //Retailer Stripe Payment
     public function payment(Request $request)
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
          \Stripe\Stripe::setApiKey('sk_test_51HU1AWDBgTW6OaYYSFWfYxwHUaaUwbXNLhTNhkiQCqaPrOkHT7vzLAgQjAiczzSmuP8QsUblIkfvqXi3SYdURF8K00jmiodGre');
          try {
           $package=$request->input('package');
           $pick=package::find($package);
           $price=$pick->price*100;
            \Stripe\Charge::create (array (
                    "amount" => $price,
                    "currency" => "USD",
                    "source" => $request->input('stripeToken'), // obtained with Stripe.js
                    "description" => "Damora Payment System" 
            ));
            $credit=$pick->credit;
            $user=User::find(Auth::user()->id);
            $current=$user->credit;
            $increment=$current+$credit;
            $user->credit=$increment;
            $user->save();
            return redirect()->back()->with('success','Payment Successfull');
        } catch ( \Exception $e ) {
            return redirect()->back()->with('error','Payment Unsuccessfull. Please Try Again');
        }
     }

     //Add Subscription List
     public function subscribe($id)
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
          $check=subscription::where('service_id',$id)->where('subscriber',Auth::user()->id)->where('status',1)->count();
          if($check > 0)
          {
            return redirect()->back()->with('error','You have Puchased This Service');
          }
          $subscribe=new subscription;
          $subscribe->service_id=$id;
          $subscribe->subscriber=Auth::user()->id;
          $subscribe->save();
          $service=service::find($id);
          if($subscribe->save())
          {
            $price=$service->subscription;
            $credit=Auth::user()->credit;
            $new=$credit-$price;
            User::where('id',Auth::user()->id)->update(['credit'=>$new]);
            return redirect()->back()->with('success','You have Puchased Service for '.$service->duration.' Days');
          }
     }

     //Subscription List
     public function subs()
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

          $unsub=subscription::where('subscriber',Auth::user()->id)->where('status',1)->get();
          foreach($unsub as $row)
          {
            $service=service::find($row->service_id);
            $sub_time=$row->created_at;
            $end_date=Carbon::parse($sub_time)->addDays($service->duration);
            $left=now()->diffInDays($end_date);
            if(now()->greaterThan($end_date))
            {
                subscription::where('service_id',$row->service_id)->where('subscriber',Auth::user()->id)->where('status',1)->update(['status'=>0]);
            }
          }

          $subscribe=subscription::where('subscriber',Auth::user()->id)->where('status',1)->get();
          return view('buyer.subscription')->with(array('subscribe'=>$subscribe));
     }
     
     
     //Subscription List
     public function subscribe_signal($id)
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

          $signals=research::where('service',$id)->get();
          return view('buyer.freeSignal')->with(array('signals'=>$signals));
     }


}
