<?php

namespace App\Http\Controllers\custumer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\customer_model\seat_form_detail;
use App\customer_model\seat_reservation;
use App\customer_model\reservationmodel;
use Validator;

class availablecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $r= seat_form_detail::get();
      return view('custumer.availability.available_table',compact('r'));
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
        // return view('custumer.availability.esewa');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $r=seat_form_detail::select('bus_no','bus_id','date','fro_m','destination','distance','cost','route_id')->find($id);
        // dd($r);
        $a=seat_reservation::where(['trip_date'=>$r->date])
            ->where('bus_id','=',$r->bus_id)
            ->where(['bus_no'=>$r->bus_no])->get();
        // dd($a); 
        
        return view('custumer.availability.seat_reservation',compact('a'),compact('r'));
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
            'seatindex'=>'required',
             ]);
        $r=seat_reservation::find($id);
        $r->seat1=$request->seat1;
        $r->seat2=$request->seat2;
        $r->seat3=$request->seat3;
        $r->seat4=$request->seat4;
        $r->seat5=$request->seat5;
        $r->seat6=$request->seat6;
        $r->seat7=$request->seat7;
        $r->seat8=$request->seat8;
        $r->seat9=$request->seat9;
        $r->seat10=$request->seat10;
        $r->seat11=$request->seat11;
        $r->seat12=$request->seat12;
        $r->seat13=$request->seat13;
        $r->seat14=$request->seat14;
        $r->seat15=$request->seat15;
        $r->seat16=$request->seat16;

        // dd($request);

        $r-> save(); 
        
        $m=new reservationmodel();
        $m->bus_id=$request->bus_id;
        $m->route_id=$request->route_id;
        $m->reservation_date=date('y-m-d');
        $m->cus_id=$request->cus_id;
        $m->seat_no=$request->seatindex;
        $m->status=$request->mode_of_reserve;
        $m->trip_date=$request->dat_e;
        $m->total_cost=$request->cost;


        $m->save();
        return redirect('admin/cusmyreservation/'.$request->cus_id);
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
