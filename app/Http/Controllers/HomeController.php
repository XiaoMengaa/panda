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
	       // dd($user);
	        $user -> password = Hash::make($request->password);
            DB::beginTransaction();
	        if($user -> save()){
                 $w = new Wealth;
                 $w -> user_id = $user -> id;
                 if($w -> save()){
                    DB::commit();
                    return redirect('/home/login')->with('success', '添加成功');
                }else{
                    DB::rollBack();
                    return back()->with('error','添加失败');
                }
	            
	        }else{
                DB::rollBack();
	            return back()->with('error','添加失败');
    }
        }
}
