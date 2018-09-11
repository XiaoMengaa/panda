<?php

namespace App\Http\Controllers;

use App\Advertis;
use Illuminate\Http\Request;



class AdminGgglController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gggl = Advertis::orderBy('id','desc')
        ->where('name','like','%'.request()->keywords.'%')
        ->get();
       return view('admin.gggl.index',['gggl'=>$gggl]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gggl.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gggl = new Advertis;
        $gggl -> name = $request->name;
        $gggl -> glink = $request->glink;
      
       if ($request->hasFile('gpic')) {
            $gggl->gpic = '/'.$request->gpic->store('uploads/'.date('Ymd'));
        }
        


        if($gggl->save()){
            return redirect('/admin/gggl')->with('success','添加成功');
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
       $gggl = Advertis::findOrFail($id);
       return view('admin.gggl.edit',['gggl'=>$gggl]);
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
        $gggl = Advertis::FindOrFail($id);
        $gggl -> name = $request->name;
        $gggl -> glink = $request ->glink;
        if ($request->hasFile('gpic')) {
            $gggl->gpic = '/'.$request->gpic->store('uploads/'.date('Ymd'));
        }
        
     
       
       
        if($gggl->save()){
            return redirect('/admin/gggl')->with('success','更新成功');
        }else{
            return back()->with('error','更新失败');
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
        $gggl = Advertis::findOrFail($id);
        if($gggl->delete()){
           return  redirect('/admin/gggl')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
