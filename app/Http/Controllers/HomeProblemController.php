<?php

namespace App\Http\Controllers;

use App\Problem;
use App\Reply;
use Illuminate\Http\Request;

class HomeProblemController extends Controller
{
    public function index()
    {
    	$problem = Problem::all();
    	return view('home.problem.hindex',compact('problem'));
    }
    public function wtzs($id)
    {
<<<<<<< HEAD

=======
        
>>>>>>> 9355c29c2986d2f84cec81b024321c080694c0c9
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
