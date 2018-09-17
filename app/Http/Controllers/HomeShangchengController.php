<?php

namespace App\Http\Controllers;

use App\Address;
use App\Commodity;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeShangchengController extends Controller
{
    //
    public function index()
    {

    	return view('home.shangcheng.shdz',['id'=>request()->id]);
    }
   
    public function store(Request $request)
    {      
           $message=new Message;
    	   $message -> user_id =1;
	       $message -> name = $request->name;
	       $message -> phone = $request->phone;
	       $message -> bphone = $request->bphone;
	       DB::beginTransaction();
	       if($message->save()){   
    	     if($request -> cname){
    	     	$address = new Address;
		       	$address -> sname =$request->sname;
		       	$address -> cname =$request->cname;
		       	$address -> zname =$request->xname;
		       	$address -> xname =$request->town;
		       	$address -> xxdz =$request->xxdz;
		       	$address -> message_id = $message->id;
       	   if($address->save()){
                  DB::commit();
       	   	 	return redirect('/home/shangcheng/more?id='.request()->id)->with('success','保存成功');
       	      }else{
       	      	DB::rollBack();
       	      return back()->with('error','保存失败');
       	      } 
       	       


    	    }else{
	       
	       $address = new Address;
	       
	       $address -> cname =$request->sname;
	       $address -> zname =$request->xname;
	       $address -> xname =$request->town;
	       $address -> xxdz =$request->xxdz;
	       $address -> message_id =$message->id;
       
       	   if($address->save()){
                DB::commit();
       	   	 	return redirect('/home/shangcheng/more?id='.request()->id)->with('success','保存成功');
       	   }else{
	       	   	DB::rollBack();
	       	      	return back()->with('error','保存失败');
       	   } 
       	   		
	      }

	  }

     
}
       public function more()
       {
       	 $message=Message::all();


       	return view('/home/shangcheng/more',['message'=>$message]);
       }

       public function edit($id)
       {
            $message=Message::find($id);
            
           
       	return view('/home/shangcheng/edit',['message'=>$message]);
       }
       public function update(Request $request,$id)
       {

       	    $message=Message::find($id);
            //$commoditie=Commodity::findOrFail(request()->id)->get()->first();; 
       	    
    	   $message -> user_id =1;
	       $message -> name = $request->name;
	       $message -> phone = $request->phone;
	       $message -> bphone = $request->bphone;
  
	       DB::beginTransaction();
	       if($message->save()){   
    	     if($request -> cname){

    	     	$address =Address::where('message_id','=',$message -> id)->get()->first();
		       	$address -> sname =$request->sname;
		       	$address -> cname =$request->cname;
		       	$address -> zname =$request->xname;
		       	$address -> xname =$request->town;
		       	$address -> xxdz =$request->xxdz;
		       
       	   if($address->save()){
                  DB::commit();
       	   	 	return redirect('/home/shangcheng/more?id='.request()->id)->with('success','保存成功');
       	      }else{
       	      	DB::rollBack();
       	      return back()->with('error','保存失败');
       	      } 
       	       


    	    }else{
	       
	      $address=Address::where('message_id','=',$message-> id)->get()->first();
	       
	       $address -> cname =$request->sname;
	       $address -> zname =$request->xname;
	       $address -> xname =$request->town;
	       $address -> xxdz =$request->xxdz;
	      
       
       	   if($address->save()){
                DB::commit();
       	   	 	return redirect('/home/shangcheng/more?id='.request()->id)->with('success','保存成功');
       	   }else{
	       	   	DB::rollBack();
	       	      	return back()->with('error','保存失败');
       	   } 
       	   		
	      }

       }
}

         public function delete($id)
         {
           
        $message=Message::find($id);
        $address=Address::where('message_id','=',$message -> id)->get()->first();
        DB::beginTransaction();
        if($message -> delete()){
                if($address->delete()){
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

