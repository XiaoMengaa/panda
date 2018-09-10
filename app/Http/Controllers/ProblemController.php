<?php

namespace App\Http\Controllers;
use App\Problem;
use App\Cate;
use Illuminate\Http\Request;

class ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problem = Problem::orderBy('id','desc')
        ->where('title','like','%'.request()->title.'%')
        ->paginate(3);
        return view('home.problem.index',['problem'=>$problem]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $problem = new Problem;
        
        $problem -> title = $request -> title;
        $problem -> user_id = \Session::get('id');
        $problem -> cate_id = $request -> cate_id;
        $problem -> state = 1;
        $problem -> browse = 0;
        $problem -> content = $request -> content;

        if ($request->hasFile('image')) {
            $problem->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }

        if($problem->save()){
            return redirect('/home/problem/create')->with('success','保存成功');
        }else{
            return back()->with('error','保存失败');
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
        $problem = Problem::findOrFail($id);
        if($problem->delete()){
        return redirect('/problem')->with('success','删除成功');
        }else{
            return back()->with('error','删除成功');
        }
    }
}
