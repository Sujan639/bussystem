<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\admin_model\buses;
use App\customer_model\seat_form_detail;
use App\admin_model\route;
use App\admin_model\available;

class searchcontroller extends Controller
{
	public function bus(Request $r)
    {
    	// dd($r);
    	$b=buses::where(['bus_no'=>$r->search])->orwhere(['company'=>$r->search])->orwhere(['capacity'=>$r->search])->orwhere(['date_of_reg'=>$r->search])->orwhere(['type'=>$r->search])->orwhere(['yatayat'=>$r->search])->get();
    	// dd($b);
    	if($r->utype=="custumer"){
    	return view('custumer.bus.bus',compact('b'));}
    	elseif($r->utype=="admin"){
    		return view('admin.pages.buses.bus_view',compact('b'));
    	}

    }
    public function available(Request $r)
    {
    	if($r->utype=="custumer"){
    	 $r= seat_form_detail::where('bus_no','like',$r->search)->orwhere('date','like',$r->search)->orwhere('fro_m','like',$r->search)->orwhere('destination','like',$r->search)->get();
    	 // dd($r);
      return view('custumer.availability.available_table',compact('r'));}
      elseif($r->utype=="admin")
      {
      	$a=available::join('routes','routes.id','=','available.route_id')->select('available.id','available.bus_no','date','fro_m','destination','tran_detail')->where('bus_no','like',$r->search)->orwhere('date','like',$r->search)->orwhere('fro_m','like',$r->search)->orwhere('destination','like',$r->search)->get();
        // dd($a);
        return view('admin.pages.availability.available',compact('a'));
      }
    }
    public function route(Request $re)
    {
    	// dd($r);
    	$r= route::where('fro_m','like',$re->search)->orwhere('destination','like',$re->search)->get();
    	if($re->utype=="custumer")
      {return view('custumer.route.route_list_table',compact('r'));}
  elseif($re->utype=="admin")
  	{return view('admin.pages.route.routeview',compact('r'));}
    }
    public function tickets(Request $r){
    	$s=seat_form_detail::where('date','like',$r->search)->get();
        return view('admin.pages.my_ticket.my_ticket_available',compact('s'));
    }
    
}
