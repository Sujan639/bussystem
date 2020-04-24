<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\customer_model\seat_form_detail;
use App\customer_model\seat_reservation;
use App\admin_model\slider;
use App\admin_model\route;
use App\user;
use App\customer_model\reservationmodel;
use validator;
use App\admin_model\yatimg;
use App\admin_model\top_des;
use App\admin_model\available;
use App\admin_model\buses;

class frontcontrols extends Controller
{
    public function home()
    {
        $r=route::count();
        // dd($r);
        $ra=route::paginate(10);
        // dd($ra);
        $u=user::where('type','!=','admin')->count();
        $s=slider::get();
        $t=reservationmodel::where('status','=',"B")->count();
        // dd($t);
        $se=route::get();
    	return view('user.pages.home',compact('s','r','u','t','ra','se'));

    }
     public function bus()
    {
        $y=yatimg::get();
        $t=top_des::get();
        $s=slider::get();
    	return view('user.pages.buses.bus',compact('s','y','t'));

    }
    public function about()
    {
        $s=slider::get();
    	return view('user.pages.about',compact('s'));

    }
    public function contact()
    {
        $s=slider::get();
    	return view('user.pages.contact',compact('s'));

    }
    public function privacy()
    {
        $s=slider::get();
    	return view('user.pages.privacy',compact('s'));

    }
    public function terms()
    {
        $s=slider::get();
    	return view('user.pages.terms',compact('s'));

    }
    public function bus_view(Request $request)
    {
        // dd($request);

        $this->validate($request,[
            // 'journey'=>'required',
            // 'to'=>'required',
            'trip_date'=>'required|date|after:yesterday',

        ]);
        // dd($request->Journey);
        $r=seat_form_detail::where('route_id','=',$request->Journey)->where('date','=',$request->trip_date)->get();
        // dd($r);

        return view('user.pages.buses.bus_view',compact('r'));
    }
    public function seat_view(Request $request){
        $r=seat_reservation::where(['bus_no'=>$request->bus_no])->where(['trip_date'=>$request->date])->get();
        // dd($r)  ;
        $s=seat_form_detail::where(['bus_no'=>$request->bus_no])->where(['date'=>$request->date])->get();
        // dd($s);

        return view('user.pages.buses.seats_view',compact('r','s'));

    }
    public function bus_finder_yatayat($id)
    { 

dd($id);
        $y=yatimg::find($id);
        $b=buses::where('yatayat','=',$y->dis)->get();
        $a=available::where($b->id,'=','bus_id')->get();
        return view('user.pages.buses.yat_finder');
    }
}
