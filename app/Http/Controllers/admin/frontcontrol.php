<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\admin_model\slider;
use validator;
use App\admin_model\yatimg;

class frontcontrol extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.frontend_control.slide_image');
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
        $this->validate($request,[
            'title'=>'required',
            'image'=>'required|image',
            'descrip'=>'required'

        ]);

        $destination='assets/slide_image';
        $s=slider::find($request->img_id);
        // dd($request);
        if(input::file('image'))
        {
            $extension=input::file('image')->getClientOriginalExtension();
            $imgname=rand(1111111,9999999).'.'.$extension;
            $request->file('image')->move($destination,$imgname);
            $s->img=$imgname;
            // dd($imgname);
        }
        
        $s->id=$request->img_id;
        $s->title=$request->title;
        $s->description=$request->descrip;
        $s->save();
        return redirect('admin/home');
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
    }
    public function yatimg(Request $request)
    {
        //
    }
}
