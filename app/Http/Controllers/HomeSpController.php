<?php

namespace App\Http\Controllers;

use App\Commodity;
use App\Link;
use App\Spcate;
use App\User;
use App\Wealth;
use Illuminate\Http\Request;

class HomeSpController extends Controller
{
	/**
	 * 前台商城主页
	 * @return [type] [description]
	 */
    public function index()
    {
        $sp = Spcate::all();
        $spb = Commodity::orderBy('id','desc') ->where('cname','like', '%'.request()->cname.'%')->get();
        $link = Link::all();

        return view('home.shangcheng.index',compact('sp','spb','link'));
    }

    /**
     * 前台商品单独展示
     * @return [type] [description]
     */
    public function shangpin(Request $request,$id)
    { 
      $link = Link::all();
      $spb = Commodity::where('spcate_id','=',$id)->get();
      $sp = Spcate::all();
   
      return view('home.shangcheng.spzs',compact('sp','spb','link'));
    }




     public function xiangqing(Request $request,$id)
    { 
        // dd($id);
      $user = User::findOrFail(\Session::get('id'));
      $spb = Commodity::findOrFail($id);
      $sp = Spcate::all();
      $link = Link::all();
      $spxx = Commodity::where('spcate_id','=',$spb->spcate_id)->get();
      return view('home.shangcheng.spxx',compact('sp','spb','spxx','user','link'));
    }
}
