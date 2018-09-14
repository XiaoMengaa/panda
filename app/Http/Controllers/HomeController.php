<?php

namespace App\Http\Controllers;

use App\Address;
use App\Message;
use App\User;
use App\Wealth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    //
    public function register()
        {
            return view('home.register');
        }

        //前台注册
    public function create(Request $request)
        {
         	$user = new User;

	        $user -> username = $request->username;
	       
	        $user -> password = Hash::make($request->password);
            // dd($request->password);
            DB::beginTransaction();
    
	        if($user -> save()){
                 $w = new Wealth;
                 $w -> user_id = $user -> id;
                 if($w -> save()){
                    DB::commit();
                    return redirect('/home/login')->with('success', '注册成功');
                }else{
                    DB::rollBack();
                    return back()->with('error','注册失败');
                }
	            
	        }else{
                DB::rollBack();
	            return back()->with('error','注册失败');
    }
     
       
}
           public function dingdanguanli()
           {  
              // $message=Message::find($id);
           
              $message =Message::where( 'id','=',request()->address)->get()->first();
              $address=Address::where('message_id','=',$message->id)->get()->first();
              // dd($address);
             return view('home.shangcheng.dingdanguanli' ,['message'=>$message,'address'=>$address]);

           }
}

