<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
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
	       // dd($user);
	        $user -> password = Hash::make($request->password);

	        if($user -> save()){
	            return redirect('/home/login')->with('success', '添加成功');
	        }else{
	            return back()->with('error','添加失败');
    }
        }
}
