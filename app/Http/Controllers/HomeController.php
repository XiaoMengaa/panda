<?php


namespace App\Http\Controllers;

use App\Address;
use App\Advertis;
use App\Cate;
use App\Commodity;
use App\Link;
use App\Message;
use App\Problem;
use App\Reply;
use App\Tag;
use App\Udetails;
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
             $m = new Udetails;
             $m -> user_id = $user -> id;
             if($w -> save() && $m -> save()){
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
     //exit;
        $message =Message::where( 'id','=',request()->address)->get()->first();
        $address=Address::where('message_id','=',$message->id)->get()->first();
        $commoditie=Commodity::findOrFail(request()->id); 


        // dd($address);
       return view('home.shangcheng.dingdanguanli' ,['message'=>$message,'address'=>$address,'commoditie'=>$commoditie]);


     }


     public function index()
     {
        $tags = Tag::all();
        $gggl = Advertis::all();
        $tags = Tag::paginate(34);
        $problem = Problem::orderBy('browse','desc') -> paginate(6);
        $problem1 = Problem::orderBy('reward','desc') -> paginate(6);
        $cate = Cate::paginate(5);
        $link = Link::all();
        return view('home.index',compact('problem','problem1','tags','link','gggl','cate'));
     }


     public function tags()
     {
        $a = json_decode(request()->foo);
        $tag = Tag::where('cate_id','=',$a -> cate_id)->get();
        $nihao = json_encode($tag);
        echo $nihao;
     }


     public function dangqian()
     {
        $m = json_decode(request()->foo);
        $problem = Problem::findOrFail($m -> id);
        $pro = $problem -> tags;
        $nihao = json_encode($pro);
        echo $nihao;
     }


     public function tagstore(Request $request)
     {
        $problem = Problem::findOrFail($request -> wentiid);
        try{
            $a = $problem -> tags() ->sync($request -> tag_id);
            return back()->with('success','已保存');  
        }catch(\Exception $e){
            return back()->with('error','保存失败');
        }
        


     }

     public function xuansang(Request $request)
     {

         $pr = Problem::findOrFail($request -> wtid);
        $pr -> reward = $request -> xuansang;
        if($pr ->save()){
            return back()->with('success','财富值设置成功');
        }else{
           return back()->with('error','财富值设置失败'); 
        }
     }

     public function createreply(Request $request)
     {
         $reply = new Reply;

       $reply -> user_id =\Session::get('id');
       $reply -> content = $request ->content;

       $reply -> problem_id = $request ->id;
       $reply -> state= '0';
       $reply -> fabulous =0;
       $reply -> tread =0;
        if($reply -> save()){
            if(!\Session::has('hfwt')){
                \session(['hfwt' => 1]);
                $wealth = Wealth::where('user_id','=',\session::get('id'))->get()->first();
                $wealth -> integral = $wealth -> integral + 10;
                $wealth -> save();
                return redirect('/home/problem/'.$request->id)->with(['success'=>'恭喜您回复成功','jifen'=>'恭喜您增加10积分']);
            }
                
            return redirect('/home/problem/'.$request->id)->with('success', '同志,发言成功');
        }else{
            return back()->with('error','革命尚未成功,同志仍需努力');
        }
     }

     //分类
         public function fenlei()
     {   
         $link = Link::all();
         $cate = Cate::paginate();
        $tags = Tag::all();
        $gggl = Advertis::all();
        $tags = Tag::paginate(34);
        return view('home.cate' ,compact('tags','gggl','link','cate'));
    }

    public function delete($id)
    {
        $problem = Problem::findOrFail($id);
        if($problem->delete()){
        return redirect('/home/problemlist')->with('success','删除成功');
        }else{
            return back()->with('error','删除成功');
        }
    }
}


