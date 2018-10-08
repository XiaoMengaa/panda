<?php

namespace App\Http\Controllers;

use App\Udetails;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeZhmmController extends Controller
{
    public function index()
    {
    	return view('home.zhmm');

    }

    public function store(Request $request)
    {   
      
    	$user = User::where('username','=',request()->username)->get()->first();

		if($user){ 
			
			return view('home.xmm',compact('user'));
    		
    	}else{
    		return back()->with('error','该用户名不存在');
		}

      
  }


   public function update(Request $request)
   {
   	  $user = User::where('username','=',request()->username)->get()->first();
    if($request->password == $request->pass){
       $user->password =  Hash::make($request->password);
       $user->save();
       return redirect('/home/login')->with('success','密码设置成功');
    }
   }

   public function jiumima()
   {
      $jiumima = $_POST['v']; 
      // dd($jiumima);
      $id = \Session::get('id');
      $user = User::find($id);
      $mima = Hash::check($jiumima, $user->password);
      if($mima){
        echo '1';
      }else{
        echo '0';
      }

   }
 
         
   		  
}