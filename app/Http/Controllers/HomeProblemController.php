<?php

namespace App\Http\Controllers;

use App\Advertis;
use App\Append;
use App\Cate;
use App\Commodity;
use App\Feedback;
use App\Link;
use App\Problem;
use App\Record;
use App\Reply;
use App\Tag;
use App\Udetails;
use App\User;
use App\Wealth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeProblemController extends Controller
{
    public function index()
    {   
        $tags = Tag::all();
        $gggl = Advertis::all();
        $tags = Tag::paginate(34);
        if(request()->cid){
            $problem = Problem::where('cate_id','=',request()->cid)->get();
        }else if(request()->tid){
            $tagss = Tag::findOrFail(request()->tid);
            $problem = $tagss -> problems;
        }else{
            $problem = Problem::orderBy('id', 'desc')->paginate(5);
        }
    	
        $link = Link::all();
    	return view('home.problem.hindex',compact('problem','tags','link','gggl'));
    }
    public function wtzs($id)
    {

       // $user = User::where('username')->first();
        $tags = Tag::all();
        $gggl = Advertis::all();
        $tags = Tag::paginate(59);
    	$problem = Problem::findOrFail($id);
       // $reply = Reply::all();
        $reply = Reply::where('problem_id','=',$id)->get();
        $append = Append::all();
        $link = Link::all();
         if(\Session::has('id')){
            if(!\Session::has('ckwt')){
                \session(['ckwt' => 1]);
            }else if(\session::get('ckwt') == 5){
                $wealth = Wealth::where('user_id','=',\session::get('id'))->get()->first();
                $wealth -> integral = $wealth -> integral + 5;
                $wealth -> save();
                \session(['ckwt'=>\session::get('ckwt') + 1]);
            }else{
                \session(['ckwt'=>\session::get('ckwt') + 1]);
            }
            
        }
        if(\session::get('ckwt') == 6){
            request()->session()->flash('success', '恭喜您获得五积分');
            return view('home.problem.wtzs',compact('problem','id','reply','append','link'));
        }

    	return view('home.problem.wtzs',compact('problem','id','reply','append','link','tags','gggl'));
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


        if($Udetails = Udetails::where('user_id','=',$user->id)->get()->first()){
          $Udetails = Udetails::where('user_id','=',$user->id)->get()->first()->jurisdiction;  
        }
        




        if(Udetails::where('user_id','=',$user->id)->get()->first()){
            $Udetails = Udetails::where('user_id','=',$user->id)->get()->first()->jurisdiction;
        }
        //校验密码
        if(Hash::check($request->password, $user->password)){
            //写入session
            session(['username'=>$user->username, 'id'=>$user->id,'pic'=>$user->udetails->pic]);
            return redirect('/')->with('success','登录成功');
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
       $problem = Problem::where('user_id','=',\Session::get('id'))->get();
       $reply = Reply::where('user_id','=',$user->id)->get();
       $dh = Record::where('user_id','=',$user->id)->get();
       $udetails = Udetails::where('user_id','=',$user->id)->get()->first();
       return view('home.center.center',['user'=>$user,'udetails'=>$udetails,'dh'=>$dh,'problem'=>$problem,'reply'=>$reply]);

    }
     public function update(Request $request,$id){
        
        $user = User::findOrFail($id);
         
        $yhxq = Udetails::where('user_id','=',$user->id)->get()->first();
        if(!$yhxq){
            $yhxq = new Udetails;
             
        }
        $yhxq -> user_id =$user->id;
        $yhxq -> sex = $request->sex;
        $yhxq -> synopsis = $request->synopsis;
        $yhxq -> phone = $request->phone;
        $yhxq -> email = $request->email;
        if($request->jurisdiction){
           $yhxq -> jurisdiction = $request->jurisdiction; 
        }
        
         if($user->save()){
            if($yhxq->save()){
                return back()->with('success','更新成功');
            }else{
                return back()->with('error','更新失败');
            }
        }else{
            return back()->with('error','更新失败');
        } 
        
    }


    public function xgmm(Request $request)
    {
        $user = User::findOrFail(\Session::get('id')); 
        
        if(Hash::check($request ->jiupass ,$user->password)){
            if($request->password == $request->pass){
                $user->password = Hash::make($request->password);
                $user->save();
                Session()->flush();
                return redirect('/home/login')->with('success','修改密码成功,请重新登陆');
                    }
           }
     }

    //采纳判断
    public function caina(Request $request)
    {
        DB::beginTransaction();
         if($request->panduan == '1'){
            $reply = Reply::findOrFail($request -> rid);
            $reply -> state = 1;
            if($reply -> save()){
                $uid = $reply -> user_id;
                $user = Wealth::where('user_id','=',$uid)->get()->first();
                $user -> riches = $user -> riches + 10;
                if($user -> save()){
                    DB::commit();
                }else{
                    DB::rollBack();
                }
            }
            
         }else{
            rollBack();
         }
    }
       
    public function dianzan(request $request)
    {        
        DB::beginTransaction();
        
           $reply = Reply::findOrFail($request ->id);
            $reply -> fabulous  =$reply -> fabulous + 1;
          if ($reply ->save())
           { 
            DB::commit();
            echo $reply->fabulous;
              
          }else{
               DB::rollBack();
          }
 

    }
    public function chai(request $request)
    {
        DB::beginTransaction();
        $reply = Reply::findOrFail($request ->id);
        $reply -> tread =$reply -> tread + 1;
        if($reply->save())
        {
            DB::commit();
            echo $reply->tread;
              
          }else{
               DB::rollBack();
          }
    }




    public function touxiang(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $yhxq = Udetails::where('user_id','=',$user->id)->get()->first();
        if ($request->hasFile('pic')) {
            $yhxq->pic = '/'.$request->pic->store('uploads/'.date('Ymd'));
        }
      
        if($yhxq->save()){
            return back()->with('success','更新成功');
        }else{
            return back()->with('error','更新失败');
        }
    }


    public function qrsh(Request $request)
    {   
        $request -> id;
        
        $dh = Record::find($request -> id);
        $dh -> rstate = '1';
        if($dh->save()){
            return back()->with('success','收货成功');
        }
    }

    public function store(Request $request)
    {
       $problem = new Problem;
    
        $problem -> title = $request -> title;
        $problem -> user_id = \Session::get('id');
        $problem -> cate_id = $request -> cate_id;
        $problem -> state = 1;
        $problem -> browse = 0;
        $problem -> content = $request -> content;

        if ($request->hasFile('image')) {
            $problem->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }

        if($problem->save()){
            return redirect('/home/problemlist')->with('success','提问成功');
        }else{
            return back()->with('error','提问失败');
        } 
    }

    public function createtag($id)
    {
        
    }

  
}
