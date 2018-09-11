<?php

namespace App\Http\Controllers;

use App\Configure;
use Illuminate\Http\Request;

class AdminWzpzController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    
       $wzpz = Configure::get()->first();

       return view('admin.wzpz.index',['wzpz'=>$wzpz]); 
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
        $wzpz = Configure::get()->first();
        if(!$wzpz){
        $wzpz = new Configure;
        }

        $wzpz->logo = $request->logo;
        if($request->hasFile('logo')){
            $wzpz->logo = '/'.$request->logo->store('uploads/'.date('Ymd'));
        }
        $wzpz->jieshao = $request->jieshao;
        $wzpz->title = $request->title;
        $wzpz->jfjs = $request->jfjs;
        $wzpz->switch = $request->switch;   
        if($wzpz -> save()){
            return back()->with('success', '提交成功');
        }else{
            return back()->with('error','提交失败');
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
    }
}
