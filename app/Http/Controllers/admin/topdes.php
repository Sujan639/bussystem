<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin_model\top_des;
use Illuminate\support\facades\input;
use validator;

class topdes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $t=top_des::get();
        return view('admin.pages.frontend_control.top_des.top_des',compact('t'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.frontend_control.top_des.top_des_form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $this->validate($request,[
        'name'=>'required',
        'img'=>'required|image',
     ]);
        $t=new top_des();
        $despath='assets\top_des_img';
        if(input::file('img'))
        {
            $ex=input::file('img')->getClientOriginalExtension();
            $imgname=rand(1111111,9999999).'.'.$ex;
            $request->file('img')->move($despath,$imgname);
            $t->img=$imgname;
        }
        $t->name=$request->name;
        $t->save();
        return redirect('admin/top_des');
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
        $t=top_des::find($id);
        return view('admin.pages.frontend_control.top_des.top_des_edit',compact('t'));

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
    $this->validate($request,[
        'name'=>'required',
        
     ]);   
        $t=top_des::find($id);
    // dd($t);
        $despath='assets\top_des_img';
        if(input::file('img'))
        {
            $ex=input::file('img')->getClientOriginalExtension();
            $imgname=rand(1111111,9999999).'.'.$ex;
            $request->file('img')->move($despath,$imgname);
            $t->img=$imgname;
        }
        $t->name=$request->name;
        $t->save();
        return redirect('admin/top_des');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t=top_des::find($id);
        $t->delete();
        return redirect('admin/top_des');
    }
}
