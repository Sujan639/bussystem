<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin_model\available;
use App\admin_model\route;
use App\customer_model\seat_reservation;
use App\customer_model\reservationmodel;
use App\admin_model\buses;
use validator;


class availablecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $a=available::join('routes','routes.id','=','available.route_id')->select('available.id','available.bus_no','date','fro_m','destination','tran_detail')->get();
        dd($a);
        return view('admin.pages.availability.available',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $b=buses::get();
        $a=route::get();
        // dd($a);
        return view('admin.pages.availability.available_form',compact('a'),compact('b'));
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
            'bus_no'=>'required',
            // 'from'=>'required',

// 'to'=>'required',

'date'=>'required|date|after:yesterday',


        ]);
        // $r=route::where(['fro_m'=> $request->from],['destination'=> $request->to])->get();
        // $i=compact('r');

        // dd($i);
        // dd($request->journey);
        $b=buses::where('bus_no','=',$request->bus_no)->get();
        // dd($request->journey);
        $s=new available();
        foreach($b as $c)
        {$s -> bus_id =$c->id;}
        $s -> bus_no =$request -> bus_no;
        $s -> date =$request -> date;
        // foreach($r as $i)
        $s -> route_id =$request -> journey;
        $s->exp_date=date('y-m-d',strtotime("-3 days",strtotime($request->date)));

        $s->save();
        return redirect('admin/available');
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
        $b=buses::get();
        // dd($b);
        

        $s=available::find($id);
        $a=route::get();
        $z=route::where('id','=',$s->route_id)->get();
        // dd($z);
        return view('admin.pages.availability.available_edit',compact('s','z'),compact('a','b'));
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
        // dd($request->bus_no);
        // dd($request->date);
        // dd($request->journey);
         $this ->validate($request,[
            'bus_no'=>'required',
            // 'from'=>'required',

// 'to'=>'required',
'journey'=>'required',
'date'=>'required|date|after:yesterday',


        ]);
        // $r=route::where(['fro_m'=> $request->from],['destination'=> $request->to])->get();
        // $i=compact('r');

        // dd($i);
        
        $b=buses::where('bus_no','=',$request->bus_no)->get();

        $s=available::find($id);
        foreach($b as $c)
        {$s -> bus_id =$c->id;}
        $s -> bus_no =$request -> bus_no;
        $s -> date =$request -> date;
        // foreach($r as $i)
        $s -> route_id =$request -> journey;

        $s->save();
        return redirect('admin/available');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a=available::find($id);
        
        $b=seat_reservation::where(['trip_date'=>$a->date])->where(['bus_id'=>$a->bus_id])->where(['bus_no'=>$a->bus_no])->get();
        // dd($b);
        $r=reservationmodel::where(['trip_date'=>$a->date])->where(['route_id'=>$a->route_id])->where(['bus_id'=>$a->bus_id])->get(); 
        // dd($r);
        foreach($b as $s)
        {$s->delete();}
    foreach($r as $n)
       {$n->delete();}
        $a->delete();
        return redirect('admin/available');
    }
}
