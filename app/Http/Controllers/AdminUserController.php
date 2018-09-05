<?php

namespace App\Http\Controllers;


use App\Udetails;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::orderBy('id','desc') ->where('username','like', '%'.request()->username.'%')->paginate(5);

        return view('admin.user.index', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('admin.user.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $user = new User;

        $user -> username = $request->username;
       // dd($user);
        $user -> password = Hash::make($request->password);

        if($user -> save()){
            return redirect('/admin/user')->with('success', '添加成功');
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
        $user = User::findOrFail($id);
        $udetails = Udetails::where('user_id','=',$user->id)->get()->first();
    
           return view('admin.user.edit', ['user'=>$user ,'udetails'=>$udetails]); 

        //解析模板显示数据
        
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
        
        $user = User::findOrFail($id);
         
        $yhxq = Udetails::where('user_id','=',$user->id)->get()->first();
        if(!$yhxq){
            $yhxq = new Udetails;
             
        }
          $yhxq -> user_id =$user->id;
        $yhxq -> sex = $request->sex;
        //dd($yhxq);
        $yhxq -> pic = $request->pic;


        $yhxq -> synopsis = $request->synopsis;
        $yhxq -> phone = $request->phone;
        $yhxq -> email = $request->email;
        if($request->jurisdiction){
           $yhxq -> jurisdiction = $request->jurisdiction; 
        }
        
        
        $user -> username = $request->username;
         if($user->save()){
            if($yhxq->save()){
                return back()->with('success','更新成功');
            }else{
                return back()->with('error','更新失败');
            }
        }else{
            return back()->with('error','更新失败');
        } 
        
         

        //更新
       
        
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
        $user = User::findOrFail($id);
       // dd($user);;
        if($user->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
