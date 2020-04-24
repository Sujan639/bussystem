<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin_model\fedbackmodel;
use validator;
use App\user;


class fedback extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('custumer.feedback.feedback_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $f=fedbackmodel::join('users','users.id','=','feedback.cus_id')->select('feedback.id as id','users.id as cus_id','users.name','feedback.title','feedback.fedback')->get();
        // foreach($f as $a)
        //  $u=user::where('id','=',$a->cus_id)->select('name','id')->get();
         // dd($f);
        return view('admin.pages.cus_feedback.cus_feedback_view_table',compact('f'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request,[
            'title'=>'required',
            'feedback'=>'required'

        ]);
        $f=new fedbackmodel();
        $f->cus_id=$request->cus_id;
        $f->title=$request->title;
        $f->fedback=$request->feedback;
        $f->save();

        return redirect('admin/cusbus');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $d=fedbackmodel::find($id);
        $d->delete();
        return redirect('admin/feedback/create');
    }
    public function totalshow()
    {
        //
    }
}
