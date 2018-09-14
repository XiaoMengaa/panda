<?php

namespace App\Http\Controllers;
use App\Commodity;
use App\Record;
use Illuminate\Http\Request;

class HomeDhjlController extends Controller
{
    public function index(Request $request)
    {
    	$tj = new Record;
        $tj -> commodity_id = $request -> id;
        $tj -> user_id = \Session::get('id');
        $tj -> money = Commodity::find($request -> id)['money'];
        if($tj -> save()){
            return redirect('/home/center')->with('success', '提交成功');
        }else{
            return back()->with('error','提交失败');
        }
    }
}
