<?php

namespace App\Http\Controllers;


<<<<<<< HEAD
=======
use App\Append;
use App\Cate;
use App\Problem;
<<<<<<< HEAD
=======
=======
>>>>>>> 5b3171883131ae3829c9a2451c05a4edd607e9d2

use App\Append;
use App\Cate;
use App\Problem;
use App\Tag;
<<<<<<< HEAD
=======
>>>>>>> 76281d878fb2c0454e2c9a085c6d899634d530c3
>>>>>>> a332c0a7a3201d20278d4f238d193edae39407b3
>>>>>>> 5b3171883131ae3829c9a2451c05a4edd607e9d2
use App\Reply;
use Illuminate\Http\Request;

class HomeProblemController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        $tags = Tag::paginate(34);
    	$problem = Problem::all();
    	return view('home.problem.hindex',compact('problem','tags'));
    }
    public function wtzs($id)
    {

    	$problem = Problem::findOrFail($id);
       // $reply = Reply::all();
        $reply = Reply::where('problem_id','=',$id)->get();
        $append = Append::all();
    	return view('home.problem.wtzs',compact('problem','id','reply','append'));
    }


    public function create()
    {
        $cate = Cate::all();
        return view('home.problem.create',['cate'=>$cate]);
    }
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======

>>>>>>> 76281d878fb2c0454e2c9a085c6d899634d530c3
>>>>>>> a332c0a7a3201d20278d4f238d193edae39407b3
>>>>>>> 5b3171883131ae3829c9a2451c05a4edd607e9d2
    public function createreply($id)
    {
        $pid = request() -> id;
        
        return view('home.append.create',compact('id','pid')); 
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======
  
>>>>>>> 76281d878fb2c0454e2c9a085c6d899634d530c3
>>>>>>> a332c0a7a3201d20278d4f238d193edae39407b3
>>>>>>> 5b3171883131ae3829c9a2451c05a4edd607e9d2
    }

}
