<?php

namespace App\Http\Controllers;


<<<<<<< HEAD



=======
>>>>>>> 319071f28582f686cfc124cfc079ce0b67bf39dc
use App\Append;
use App\Cate;
use App\Problem;
use App\Tag;
<<<<<<< HEAD

=======
>>>>>>> 319071f28582f686cfc124cfc079ce0b67bf39dc
use App\Reply;
use Illuminate\Http\Request;

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

}
