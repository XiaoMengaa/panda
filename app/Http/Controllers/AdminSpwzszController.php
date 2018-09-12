<?php

namespace App\Http\Controllers;

use App\Scwzszb;
use Illuminate\Http\Request;

class AdminSpwzszController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $spwzsz = Scwzszb::get()->first();
        return view('admin.wzpz.create',['spwzsz'=>$spwzsz]);
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
         $spwzsz = Scwzszb::get()->first();
        if(!$spwzsz){
        $spwzsz = new Scwzszb;
        }

        $spwzsz->logo = $request->logo;
        if($request->hasFile('logo')){
            $spwzsz->logo = '/'.$request->logo->store('uploads/'.date('Ymd'));
        }
        $spwzsz->jieshao = $request->jieshao;
        $spwzsz->title = $request->title;
        $spwzsz->switch = $request->switch;   
        if($spwzsz -> save()){
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
