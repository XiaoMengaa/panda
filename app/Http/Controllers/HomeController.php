<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
     
       

     public function dingdanguanli()
     {  
        // $message=Message::find($id);
     //exit;
        $message =Message::where( 'id','=',request()->address)->get()->first();
        $address=Address::where('message_id','=',$message->id)->get()->first();
        $commoditie=Commodity::findOrFail(request()->id); 

        // dd($address);
       return view('home.shangcheng.dingdanguanli' ,['message'=>$message,'address'=>$address,'commoditie'=>$commoditie]);

     }
}
