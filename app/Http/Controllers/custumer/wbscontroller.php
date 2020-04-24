<?php

namespace App\Http\Controllers\custumer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin_model\buses;
use App\admin_model\available;
use App\customer_model\reserverequest;
use validator;

class wbscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('custumer.bus.full_bus_reserve_form');
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
        $r=new reserverequest();
        $r->date=$request->dat_e;
        $r->fro_m=$request->fro_m;
        $r->destination=$request->destination;
        $r->bus_id=$request->id;
        $r->cus_id=$request->cus_id;
        $r->save();
        return redirect('admin/wbs/'.$request->cus_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

        // $cus_id=$id;
        // dd($cus_id);
        $s=reserverequest::join('buses','reserve_request.bus_id','=','buses.id')->select('reserve_request.id as id','reserve_request.date','reserve_request.fro_m','reserve_request.destination','buses.bus_no','buses.company','buses.capacity',
            'buses.type')->where('reserve_request.cus_id','=',$id)->get();
        // dd($s);
        return view('custumer.my reservation.my_reservation_request',compact('s'));
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
        $this -> validate($request,[
            'date'=>'required|date|after:yesterday',
            'fro_m'=>'required',
            'destination'=>'required',

        ]);

        // dd($request->date);
        $b=buses::join('available','buses.bus_no','=','available.bus_no')->select('buses.id as id','buses.bus_no','buses.capacity','buses.company','buses.type','available.date','available.route_id')->where('available.date','!=',$request->date)->get();
        // dd($b);
      return view('custumer.bus.select_bus_whole_reserve',compact('b'),compact('request'));
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
