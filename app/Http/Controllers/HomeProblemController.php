<?php

namespace App\Http\Controllers;

use App\Cate;
use App\Problem;
use App\Tag;
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
        
    	return view('home.problem.wtzs',compact('problem','id','reply'));
    }


    public function create()
    {
        $cate = Cate::all();
        return view('home.problem.create',['cate'=>$cate]);
    }

    public function createreply()
    {

        return view('home.append.create');
    }

}
