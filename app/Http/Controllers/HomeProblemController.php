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

    	$problem = Problem::findOrFail($id);
       // $reply = Reply::all();
        $reply = Reply::where('problem_id','=',$id)->get();
        
    	return view('home.problem.wtzs',compact('problem','id','reply'));
    }
}
