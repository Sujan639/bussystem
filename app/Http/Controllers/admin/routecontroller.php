<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin_model\route;
use App\admin_model\buses;
use validator;

class routecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $r=route::orderby('id','DESC')->get();
        return view('admin.pages.route.routeview',compact('r'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $b=buses::get();
        return view('admin.pages.route.route_add_form',compact('b'));
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
            'from'=>'required',
            'to'=>'required',
            'distance'=>'required|numeric',
            'cost'=>'required|numeric',
            

        ]);
        $r=new route();
        $r -> fro_m =$request -> from;
        $r -> destination =$request -> to;
        $r -> distance =$request -> distance;
        $r -> cost =$request -> cost;
        $r -> tran_detail =$request -> tran_detail;

        $r -> save();
        return redirect('admin/route');
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
        $r=route::find($id);
        $b=buses::get();
        return view('admin.pages.route.route_edit',compact('r'),compact('b'));
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
        $this ->validate($request,[
            'from'=>'required',
            'to'=>'required',
            'distance'=>'required|numeric',
            'cost'=>'required|numeric',
            

        ]);
        $r=route::find($id);
        $r -> fro_m =$request -> from;
        $r -> destination =$request -> to;
        $r -> distance =$request -> distance;
        $r -> cost =$request -> cost;
        $r -> tran_detail =$request -> tran_detail;

        $r -> save();
        return redirect('admin/route');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $r=route::find($id);
        $r->delete();
        return redirect('admin/route');
    }
}
