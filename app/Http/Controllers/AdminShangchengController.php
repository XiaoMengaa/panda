<?php

namespace App\Http\Controllers;

use App\Address;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminShangchengController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message=Message::all();
        $address=Address::all();
        return view('/admin/shangcheng/shdz', ['message'=>$message ,'address'=>$address]);
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
        $address =Address::findOrFail(request()->aid);
        $message=Message::findOrFail($id);
        DB::beginTransaction();
        if($address->delete()){
                if($message -> delete()){
                    DB::commit();
                  return back()->with('success','删除成功');  
              }else{
                DB::rollBack();
            return back()->with('error','删除失败');
              }
        }else{
            DB::rollBack();
            return back()->with('error','删除失败');
        }
    }
}
