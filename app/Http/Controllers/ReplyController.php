<?php

namespace App\Http\Controllers;

use App\Reply;
use App\Udetails;
use App\User;
use App\Wealth;
use Illuminate\Http\Request;


class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $reply = Reply::orderBy('id','desc')
        ->where('content','like','%'.request()->content.'%')
        ->paginate(3);
        return view('home.reply.index',['reply'=>$reply]);
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
      // $user = User::findOrFail($id);
      // $reply = Udetails::where('user_id','=',$user->id)->get()->first();
        //问题id
          
       
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
         $reply = Reply::findOrFail($id);
     if($reply->delete()){
         return back()->with('success','删除成功');

     }else{
        return back()->with('error','删除失败');
     }

    }
}
