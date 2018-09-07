<?php

namespace App\Http\Controllers;

use App\Append;
use App\Cate;
use App\Problem;
use App\Reply;
use App\Tag;
use App\Udetails;
use App\User;
use App\Wealth;
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
         if(\Session::has('id')){
            if(!\Session::has('ckwt')){
                \session(['ckwt' => 1]);
            }else if(\session::get('ckwt') == 5){
                $wealth = Wealth::where('user_id','=',\session::get('id'))->get()->first();
                $wealth -> integral = $wealth -> integral + 5;
                $wealth -> save();
            }else{
                \session(['ckwt'=>\session::get('ckwt') + 1]);
            }
            
        }
        if(\session::get('ckwt') == 5){
            request()->session()->flash('success', '恭喜您获得五积分');
            return view('home.problem.wtzs',compact('problem','id','reply','append'));
        }

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
        if(Udetails::where('user_id','=',$user->id)->get()->first()){
            $Udetails = Udetails::where('user_id','=',$user->id)->get()->first()->jurisdiction;
        }
        //校验密码
        if(Hash::check($request->password, $user->password)){
            //写入session
            session(['username'=>$user->username, 'id'=>$user->id]);
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

}
