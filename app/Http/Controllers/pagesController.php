<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\comments;
use App\asset;
use App\adminService;
use App\market;
use App\package;
use App\withdraw;
use App\transaction;
use App\research;
use App\service;
class pagesController extends Controller
{
    public function index()
    {
        $sale=transaction::count();
        $researcher=User::where('userRole',3)->count();
        $users=User::where('userRole',3)->limit(6)->orderBy('id','desc')->get();
        $signal=research::count();
        $asset=asset::get();
        $market=market::get();
        return view('pages.index')->with(array('users'=>$users,'signal'=>$signal,'researcher'=>$researcher,'sale'=>$sale,'asset'=>$asset,'market'=>$market));
    }

    //redirect to register page
    public function register()
    {
        return view('pages.register');
    }

     //redirect to Login page
     public function login()
     {
         return view('pages.login');
     }

     //redirect to Research Page
     public function view_research()
     {
         $services=service::get();
         return view('pages.research')->with(array('services'=>$services));
     }


     //redirect to Signals Page
     public function view_signals($id)
     {
         $signals=research::where('service',$id)->get();
         return view('pages.signal')->with(array('signals'=>$signals));
     }

      //redirect to Research Page
      public function filter(Request $request)
      {
         if(isset($request->submit) && $request->submit == 'Apply')
         {
             if(isset($request->researcher))
             {
                 $user=User::where('name',$request->researcher)->first();
                $services=service::where('provider',$user->id)->get();
             }
             else if(isset($request->start) && isset($request->end))
             {
                $services=service::whereBetween('price',[$request->start,$request->end])->get();
             }
             else if(isset($request->asset))
             {
                $services=service::where('asset',$request->asset)->get();
             }
             else if(isset($request->market))
             {
                $services=service::where('market',$request->market)->get();
             }
             else
             {
                 return redirect()->back()->with('error','Select one Filter Type');
             }

            return view('pages.research')->with(array('services'=>$services));
         }
         
      }


}
