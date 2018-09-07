<?php

namespace App\Http\Controllers;

use App\Udetails;
use App\Append;
use App\User;
use App\Cate;
use App\Problem;
use App\Tag;
use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeProblemController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        $tags = Tag::paginate(34);
    	$problem = Problem::all();
    	return view('home.problem.hindex',compact('problem','tags'));
    }
    public function wtzs($id)
    {

    	$problem = Problem::findOrFail($id);
       // $reply = Reply::all();
        $reply = Reply::where('problem_id','=',$id)->get();
        $append = Append::all();
    	return view('home.problem.wtzs',compact('problem','id','reply','append'));
    }


    public function create()
    {
        $cate = Cate::all();
        return view('home.problem.create',['cate'=>$cate]);
    }




    public function createreply($id)
    {
        $pid = request() -> id;
        
        return view('home.append.create',compact('id','pid')); 
    }

    /**
    *前台登录
    */
    public function login()
    {
        return view('home.login');
    }

    /**
    *登录操作
    */
    public function dologin(Request $request)
    {
        //获取用户的数据
        $user = User::where('username', $request->username)->first();

        if(!$user){
            return back()->with('error','登陆失败!');
        }

        $Udetails = Udetails::where('user_id','=',$user->id)->get()->first()->jurisdiction;


        //校验密码
        if(Hash::check($request->password, $user->password)){
            //写入session
            session(['username'=>$user->username, 'id'=>$user->id,'pic'=>$user->udetails->pic]);
            return redirect('home/problemlist')->with('success','登录成功');
        }else{
            return back()->with('error','登录失败!');
        }
    }



    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/home/problemlist')->with('success','退出成功');
    }


    public function center(Request $request)
    {
      
       
       $id = \Session::get('id');
       $user = User::find($id);
  
       return view('home.center.center',['user'=>$user]);

    }

}
