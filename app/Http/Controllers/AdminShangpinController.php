<?php

namespace App\Http\Controllers;

use App\Commodity;
use App\Spcate;
use Illuminate\Http\Request;

class AdminShangpinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $shangpin = Commodity::OrderBy('id','desc')->get();
      $spcate = Spcate::all();
     
      return view('admin.shangpin.index',['shangpin'=>$shangpin, 'spcate'=>$spcate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spcate = Spcate::all();
        return view('admin.shangpin.create',['spcate'=>$spcate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shangpin = new Commodity;
        $shangpin -> cname = $request->cname;
        $shangpin -> spcate_id = $request->spcate_id;
        $shangpin -> money = $request->money;
        $shangpin -> cdetails = $request->cdetails;

        if($request->hasFile('cpic')){
            $shangpin->cpic= '/'.$request->cpic->store('uploads/'.date('Ymd'));
        }
        
        if($shangpin->save()){
            return redirect('/admin/shangpin')->with('success','添加成功');
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
       $shangpin = Commodity::FindOrFail($id);
       $spcate = Spcate::all();
       return view('admin.shangpin.edit',['shangpin'=>$shangpin, 'spcate'=>$spcate]);
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
        $shangpin = Commodity::FindOrFail($id);
        $shangpin -> cname = $request->cname;
        $shangpin -> spcate_id = $request->spcate_id;
        $shangpin -> money = $request->money;
        $shangpin -> cdetails = $request ->cdetails;
     

        if($request->hasFile('cpic')){
              $shangpin->cpic= '/'.$request->cpic->store('uploads/'.date('Ymd'));
         }
         if($shangpin->save()){
            return redirect('/admin/shangpin')->with('success','更新成功');
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
        $shangpin = Commodity::FindOrFail($id);
        if($shangpin->delete()){
            return  redirect('/admin/shangpin')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
        
}
