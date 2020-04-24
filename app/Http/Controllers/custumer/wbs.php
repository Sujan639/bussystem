<?php

namespace App\Http\Controllers\custumer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin_model\buses;
use App\admin_model\available;

class wbs extends Controller
{
	public function create()
    {
        $b=buses::join('available','buses.bus_no','=','available.bus_no')->select('buses.id as id','buses.bus_no','buses.capacity','buses.company','buses.type','available.date','available.route_id')->get();
    //     dd($b);
      return view('custumer.bus.select_bus_whole_reserve',compact('b'));
    }

    function reserve(Request $request)
    {
    	$b=buses::join('available','buses.bus_no','=','available.bus_no')->select('buses.id as id','buses.bus_no','buses.capacity','buses.company','buses.type','available.date','available.route_id')->where('available.date','!=',$request->date)->get();
        dd($b);
    }
}
