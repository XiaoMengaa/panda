<?php

namespace App\Http\Controllers;

use App\Cate;
use App\Tag;
use Illuminate\Http\Request;

class AdminTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tag = Tag::orderBy('id','desc')->where('title','like','%'.request()->keywords.'%')->paginate(5);
        return view('admin.tag.index',compact('tag'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cate = Cate::all();


        return view('admin.tag.create',['cate'=>$cate]);
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
        $res = new Tag;
        $res ->cate_id = $request ->cate_id;
        $res -> title = $request->title;
        if($res->save()){
            return redirect('/admin/tag')->with('success','添加成功');
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

        $tag = Tag::findOrFail($id);
        $cate = Cate::all();
         
        return view('admin.tag.edit',['tag'=>$tag,'cate'=>$cate]);
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
        $tag = Tag::findOrFail($id);
        $tag ->title = $request ->title;
        if($tag ->save()){
            return redirect('/admin/tag')->with('success','修改成功');
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
        $res = Tag::findOrFail($id);
        if($res->delete()){
            return redirect('/admin/tag')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }


    }
}
