<?php

namespace App\Http\Controllers\custumer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\customer_model\myreservationmodel;
use App\customer_model\reservationmodel;
use App\user;
use App\customer_model\seat_reservation;
use Illuminate\Support\Facades\Crypt;

class myreservationcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response;
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $r=myreservationmodel::where('cus_id','=',$id)->get();
       // dd($r);
       return view('custumer/my tickets/reservation_view_table',compact('r')); 
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
        // dd($request);
        $s=reservationmodel::find($id);
        $s->delete();
        $a=seat_reservation::where('bus_no','=',$request->bus_no)->where('trip_date','=',$request->date)->get();
// dd($a);
        $b=$request->seat_no;
        $q=explode(" ",$b);
        $r=count($q);
        
        foreach($a as $i)
        // $t=$i->$z;
        // dd($t);
       for($c=0;$c<count($q);$c++)
       {
        $z='seat'.$q[$c];
        $i->$z="A";
        $i->save();
       }
        
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

        
    }
}
