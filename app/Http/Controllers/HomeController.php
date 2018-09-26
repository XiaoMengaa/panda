<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use App\Address;
use App\Advertis;
use App\Cate;
use App\Commodity;
use App\Link;
use App\Message;
use App\Problem;
use App\Tag;
use App\Udetails;
use App\User;
use App\Wealth;
>>>>>>> 6b6830238c966886f77cce4222fc3309110c33d0
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
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
        
        $problem = Problem::all();
        $cate = Cate::paginate(5);
        $link = Link::all();
        return view('home.index',compact('problem','tags','link','gggl','cate'));
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

     public function fenlei()
     {   
         $link = Link::all();
         $cate = Cate::paginate();
        $tags = Tag::all();
        $gggl = Advertis::all();
        $tags = Tag::paginate(34);
        return view('home.cate' ,compact('tags','gggl','link','cate'));
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
}
