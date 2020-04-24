<?php

namespace App\Http\Controllers\custumer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin_model\buses;
use App\customer_model\seat_reservation;
use App\admin_model\route;
use App\admin_model\available;

class bus extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b=buses::get();
        return view('custumer.bus.bus',compact('b'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $b=buses::join('available','buses.bus_no','=','available.bus_no')->select('buses.id as id','buses.bus_no','buses.capacity','buses.company','buses.type','available.date','available.route_id')->get();
    //     dd($b);
      return view('custumer.bus.select_bus_whole_reserve',compact('b'));
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
        $b=seat_reservation::find($id);
        // dd($b);
        return view('custumer.bus.bus_reservation_form',compact('b'));
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

        return redirect("admin/cusbus/".$id."/edit");
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
    // public function reserver(Request $request)
    // {
    //     $b=buses::join('available','buses.bus_no','=','available.bus_no')->select('buses.id as id','buses.bus_no','buses.capacity','buses.company','buses.type','available.date','available.route_id')->where('available.date','!=',$request->date)->get();
    //     dd($b);


        
    // }
}
