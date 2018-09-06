<?php

namespace App\Http\Controllers;

use App\Append;
use App\User;
use Illuminate\Http\Request;

class AppendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $append = Append::orderBy('id','desc')
        ->where('content','like','%'.request()->content.'%')
        ->get();;
        return view('home.append.index',['append'=>$append]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //
        $append = new Append;

        $append -> reply_id = 1;
        $append -> content = $request->content;
        $append -> user_id = 1;
        if($append ->save()){
            return redirect('/home/append/create')->with('success','评论成功');
        }else{
            return back()->with('error','评论失败');
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
        $append = Append::findOrFail($id);
        if($append->delete()){
            return redirect('/append')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
