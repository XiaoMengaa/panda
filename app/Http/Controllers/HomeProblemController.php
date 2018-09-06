<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Append;
use App\Cate;
use App\Problem;
=======
use App\Cate;
use App\Problem;
use App\Tag;
>>>>>>> d8573fc4284ddc2c68dffa32897fef3b061934c0
use App\Reply;
use App\Tag;
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
<<<<<<< HEAD
    public function createreply($id)
    {
        $pid = request() -> id;
        
        return view('home.append.create',compact('id','pid')); 
=======

    public function createreply()
    {

        return view('home.append.create');
>>>>>>> d8573fc4284ddc2c68dffa32897fef3b061934c0
    }

}
