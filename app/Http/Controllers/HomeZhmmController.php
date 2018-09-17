<?php

namespace App\Http\Controllers;

use App\Udetails;
use App\User;
use Illuminate\Http\Request;

class HomeZhmmController extends Controller
{
    public function index()
    {
    	return view('home.zhmm');

    }

    public function store()
    {   
      
    	$user = User::where('username','=',request()->username)->get()->first();
        
    	if(!$user){
    		return back()->with('error','失败');
    	}
    	return view('home.xmm',compact('user'));
    }

   
}
