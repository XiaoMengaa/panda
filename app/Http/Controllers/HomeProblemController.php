<?php

namespace App\Http\Controllers;

use App\Problem;
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
    	return view('home.problem.wtzs',compact('problem'));
    }

    
}
