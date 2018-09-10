<?php

namespace App\Http\Controllers;

use App\Udetails;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
	public function index()
	    {
	        return view('admin.index');
	    }

    public function login()
    {
    	return view('admin.login');
    }
    /**
	 * 登陆操作
	 */
	public function dologin(Request $request)
	{
		//获取用户的数据
		$user = User::where('username', $request->username)->first();

		if(!$user){
			return back()->with('error','登陆失败!');
		}

		$Udetails = Udetails::where('user_id','=',$user->id)->get()->first()->jurisdiction;


		if(Udetails::where('user_id','=',$user->id)->get()->first()){
            $Udetails = Udetails::where('user_id','=',$user->id)->get()->first()->jurisdiction;
        }else{
        	$Udetails = [];
        }
		
		if(empty($Udetails))
		{
			return back()->with('error','您权限不足,请与管理员联系');
		}

		//校验密码
		if(Hash::check($request->password, $user->password)){
			//写入session
			session(['username'=>$user->username, 'aid'=>$user->id,'pic'=>$user->udetails->pic]);
			return redirect('/admin')->with('success','登陆成功');
		}else{
			return back()->with('error','登陆失败!');
		}
	}

	/**
	 * 退出登陆
	 */
	public function logout(Request $request)
	{
		$request->session()->flush();
		return redirect('/admin/login')->with('success','退出成功');
	}

}
