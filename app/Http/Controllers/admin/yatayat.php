<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin_model\yatimg;
use Illuminate\support\facades\input;

class yatayat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $y=yatimg::get();
        return view('admin.pages.frontend_control.yat_img.yat_img_table',compact('y'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.frontend_control.yat_img.yatayat_img');
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
            'des'=>'required',
            'img'=>'required|image',
            

        ]);

        $destination='assets/yatayat';
        // dd($request);
        $s=new yatimg();

        if(input::file('img'))
        {
            $extension=input::file('img')->getClientOriginalExtension();
            $imgname=rand(1111111,9999999).'.'.$extension;
            $request->file('img')->move($destination,$imgname);
            $s->img=$imgname;
            // dd($imgname);
        }
        $s->dis=$request->des;
        $s->save();
        return redirect('admin/yatayat');
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
        $y=yatimg::find($id);
        // dd($y);
        return view('admin.pages.frontend_control.yat_img.yat_img_edit',compact('y'));
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
    $this->validate($request,[
        'des'=>'required',

    ]);
        

        $destination='assets/yatayat';
        
        $s=yatimg::find($id);

        if(input::file('img'))
        {
            $extension=input::file('img')->getClientOriginalExtension();
            $imgname=rand(1111111,9999999).'.'.$extension;
            $request->file('img')->move($destination,$imgname);
            $s->img=$imgname;
            // dd($imgname);
        }
        $s->dis=$request->des;
        $s->save();
        return redirect('admin/yatayat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $s=yatimg::find($id);
       $s->delete(); 
       return redirect('admin/yatayat');
    }
}
