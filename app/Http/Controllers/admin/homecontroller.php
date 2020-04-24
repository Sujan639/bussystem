<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin_model\available;
use App\admin_model\route;
use App\admin_model\buses;
use App\admin_model\fedbackmodel;
use App\user;
use App\customer_model\reservationmodel;
use App\customer_model\reserverequest;
use App\admin_model\slider;

class homecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a=available::join('routes','routes.id','=','available.route_id')->select('available.id','available.bus_no','date','fro_m','destination')->paginate(5);
        $r=route::paginate(5);
        $b=buses::paginate(5);
        $u=user::where('type','=','custumer')->count();
        $f=fedbackmodel::count();
        $res=reservationmodel::count();
        $re=reserverequest::count();
        $bu=buses::count();
        $si=slider::get();

        // dd($u);
        return view('homepage',compact('a','r','b','u','f','res','re','bu','si'));

        // return view('custumer.availability.esewa');
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
        //
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
