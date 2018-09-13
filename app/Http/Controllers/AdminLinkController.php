<?php

namespace App\Http\Controllers;
use App\Link;
use Illuminate\Http\Request;

class AdminLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $link = Link::orderBy('id','desc') 
        ->where('name','like','%'.request()->name.'%')
        ->paginate(3);

        return view('admin.link.index', ['link'=>$link]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.link.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $link = new Link;

        $link -> name = $request->name;
        $link -> url = $request->url;
        if ($request->hasFile('lpic')) {
            $link->lpic = '/'.$request->lpic->store('uploads/'.date('Ymd'));
        }

        if($link -> save()){
            return redirect('/admin/link')->with('success', '添加成功');
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
        $link = Link::findOrFail($id);
         
        return view('admin.link.edit',['link'=>$link]);
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
        $link = Link::findOrFail($id);
        $link -> name = $request->name;
        $link -> url = $request->url;
        $link -> lpic = $request->lpic;
        if($link ->save()){
            return redirect('/admin/link')->with('success','修改成功');
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
        $link = Link::findOrFail($id);
        if($link->delete()){
        return redirect('/admin/link')->with('success','删除成功');
        }else{
            return back()->with('error','删除成功');
        }
    }
}
