<?php

namespace App\Http\Controllers;

use App\Spcate;
use Illuminate\Http\Request;

class AdminSpcateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $spfl = Spcate::orderBy('id','desc')
        ->where('sname','like','%'.request()->sname.'%')
        ->paginate(3);
        return view('admin.spcate.index',['spfl'=>$spfl]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.spcate.create');
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
        $spfl = new Spcate;
        $spfl->sname = $request->sname;
        if($spfl->save()){
            return redirect('/admin/spcate')->with('success','添加成功');
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
        $spfl = Spcate::find($id);
        return view('admin.spcate.edit',['spfl'=>$spfl]);
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
        // dd($id);
        $spfl = Spcate::find($id);
        $spfl->sname = $request->sname;
        if($spfl->save()){
            return redirect('/admin/spcate')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
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
        $spfl = Spcate::find($id);
        if($spfl->delete()){
            return redirect('/admin/spcate')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
