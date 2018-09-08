<?php

namespace App\Http\Controllers;

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

    public function create(Request $request)
        {
         	$user = new User;

	        $user -> username = $request->username;
	       
	        $user -> password = Hash::make($request->password);
            // dd($request->password);
            DB::beginTransaction();
            if(Hash::check($request->newpass,$user->password)){
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
        }else{
        return back()->with('error','抱歉,您的两次密码不同');
    }
        }
}

