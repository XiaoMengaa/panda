<?php

namespace App\Http\Controllers;

use App\Cate;
use Illuminate\Http\Request;

class AdminCateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = Cate::orderBy('id','desc')
        ->where('cname','like','%'.request()->keywords.'%')
        ->paginate(3);
        return view('admin.cate.index',['cate'=>$cate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cate = new Cate;
        $cate -> cname = $request ->cname;
        if($cate->save()){
            return redirect('/admin/cate')->with('success','添加成功');
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
        $cate = Cate::findOrFail($id);
        return view('admin.cate.edit',['cate'=> $cate]);
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
        $cate = Cate::findOrFail($id);
        $cate -> cname = $request ->cname;
        if ($cate->save()){
            return redirect('/admin/cate')->with('success','修改成功');
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
      $cate = Cate::findOrFail($id);
      if($cate->delete()){
        return redirect('/admin/cate')->with('success','删除成功');
      }else{
        return back()->with('error','删除成功');
      }
    }
}
