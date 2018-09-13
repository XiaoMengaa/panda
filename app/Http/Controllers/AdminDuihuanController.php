<?php

namespace App\Http\Controllers;
use App\Record;
use Illuminate\Http\Request;

class AdminDuihuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dh = Record::orderBy('id','desc') 
        ->paginate(3);

        return view('admin.dhjl.index', ['dh'=>$dh]);
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
         $dh = Record::findOrFail($id);
         
        return view('admin.dhjl.edit',['dh'=>$dh]);
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
        $dh = Record::findOrFail($id);
        $dh -> commodity_id = $request->commodity_id;
        $dh -> money = $request->money;
        $dh -> rstate = $request->rstate;
        if($dh ->save()){
            return redirect('/admin/dhjl')->with('success','修改成功');
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
         $dh = Record::findOrFail($id);
        if($dh->delete()){
        return redirect('/admin/dhjl')->with('success','删除成功');
        }else{
            return back()->with('error','删除成功');
        }
    }
}
