<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin_model\buses;
use validator;
class buscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b=buses::orderby('id','DESC')->get();
        return view('admin.pages.buses.bus_view',compact('b'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo "heloo";
        return view('admin.pages.buses.bus_add_form');
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
            'bus_no'=>'required|unique:buses',
            'company'=>'required',
            'capacity'=>'required|numeric',
            'dor'=>'required|date',
            'type'=>'required', 
            'rt'=>'required',
        ]);
        $b=new buses();
        $b -> bus_no=$request -> bus_no;
        $b -> company=$request -> company;
        $b -> capacity=$request -> capacity;
        $b -> date_of_reg=$request -> dor;
        $b -> type=$request -> type;
        $b -> route_type=$request -> rt;

        $b->save();
        return redirect('admin/bus');
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
        $b=buses::find($id);
        return view('admin.pages.buses.bus_edit_form',compact('b'));
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
            'bus_no'=>'required',
            'company'=>'required',
            'capacity'=>'required|numeric',
            'dor'=>'required|date',
            'type'=>'required',
            'rt'=>'required',
        ]);
        $b=buses::find($id);
        $b -> bus_no=$request -> bus_no;
        $b -> company=$request -> company;
        $b -> capacity=$request -> capacity;
        $b -> date_of_reg=$request -> dor;
        $b -> type=$request -> type;
        $b -> route_type=$request -> rt;

        $b->save();
        return redirect('admin/bus');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b=buses::find($id);
        $b->delete();
        return redirect('admin/bus');
    }
}
