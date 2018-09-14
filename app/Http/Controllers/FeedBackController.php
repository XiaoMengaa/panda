<?php

namespace App\Http\Controllers;
use App\Feedback;
use App\User;

use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
         $fk = Feedback::orderBy('id','desc')
        ->where('content','like','%'.request()->content.'%')
        ->get();;
        return view('home.fankui.create',['fk'=>$fk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home.fankui.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
        $fk = new Feedback;

        $fk -> content = $request-> content;
        $fk -> user_id = 1;
       

        if($fk -> save()){
            return redirect('/home/problemlist')->with('success', '反馈成功,请耐心等待!');
        }else{
            return back()->with('error','添加失败');
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $fk = Feedback::findOrFail($id);
          if($fk->delete()){
            return redirect('/fankui')->with('success','删除成功');
          }else{
            return back()->with('error','删除失败');
          } 
    }
}
