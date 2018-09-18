<?php

namespace App\Http\Controllers;
use App\Commodity;
use App\Record;
use App\User;
use App\Wealth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeDhjlController extends Controller
{
    public function index(Request $request)
    {
    	$tj = new Record;
        $tj -> commodity_id = $request -> id;
        $tj -> user_id = \Session::get('id');
        DB::beginTransaction();
        $tj -> money = Commodity::find($request -> id)['money'];
        if($tj -> save()){
            try{
                $caifu = new Wealth;
                $wealth = $caifu -> where('user_id','=',\Session::get('id'))->get()->first();

               $wealth -> riches = User::findOrFail(\Session::get('id'))->wealths->riches - Commodity::find($request -> id)['money'];           
              $wealth -> save();
              DB::commit(); 
          }catch(\Exception $e){
            DB::rollBack();
            return back()->with('error','订单提交失败');
          }
            return redirect('/home/center')->with('success', '提交成功');
        }else{
            DB::rollBack();
            return back()->with('error','提交失败');
        }
    }
}
