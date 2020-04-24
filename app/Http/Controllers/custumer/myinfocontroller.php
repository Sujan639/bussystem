<?php

namespace App\Http\Controllers\custumer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin_model\customermodel;
use Illuminate\Support\Facades\Input;

class myinfocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $i=customermodel::find($id);
        // dd($i);
        return view('custumer.personal info.info',compact('i'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $i=customermodel::find($id);
        return view('custumer.personal info.info_edit',compact('i'));
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
        $i=customermodel::find($id);
        if($request->formname=='val_update')
        {
            $despath='assets/user_image';
            if(Input::file('u_img')){
                $extension=input::file('u_img')->getClientOriginalExtension();
                $imgname=rand(1111111,9999999).'.'.$extension;
                $request->file('u_img')->move($despath,$imgname);
                $i->u_img=$imgname;
            }

        
        $i->name=$request->name;
        $i->email=$request->email;
        $i->gender=$request->gender;
        $i->address=$request->addres;
        $i->dob=$request->dob;
        $i->contact=$request->contact;

        $i->save();
        return redirect('admin/cusmyinfo/'.$id);
    }
        elseif ($request->formname=='tran_update') {
            $i=customermodel::find($id);
            $i->tran_code=encrypt($request->utrancode);
            $i->save();
            return redirect('admin/cusmyinfo/'.$id);
        }
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
}
