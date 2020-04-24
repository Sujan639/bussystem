<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('admin.admin_index');
});

Route::group(['middleware'=>['web'] ,'prefix'=>''],function(){
	Route::get('/','frontend\frontcontrols@home');
Route::get('/bus','frontend\frontcontrols@bus');
Route::get('/about','frontend\frontcontrols@about');
Route::get('/contact','frontend\frontcontrols@contact');
Route::get('/privacy','frontend\frontcontrols@privacy');
Route::get('/terms','frontend\frontcontrols@terms');
Route::post('/bus_view','frontend\frontcontrols@bus_view');
Route::post('/seat_view','frontend\frontcontrols@seat_view');
Route::Resource('/yat_td_finder','frontend\yat_td_finder');
});


// Auth::routes();

// Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>['auth'],'prefix'=>'admin'],function(){
	Route::Resource('/home','admin\homeController');
	Route::resource('/customer','admin\customercontroller');
	Route::Resource('/bus','admin\buscontroller');
	Route::Resource('/route','admin\routecontroller');
	Route::Resource('/available','admin\availablecontroller');
	Route::Resource('/cusbus','custumer\bus');
	Route::Resource('/wbs','custumer\wbscontroller');
	Route::resource('/cusroute','custumer\routecontroller');
	Route::Resource('/cusavailable','custumer\availablecontroller');
	Route::Resource('/cusmyreservation','custumer\myreservationcontroller');
	Route::Resource('/cusmyinfo','custumer\myinfocontroller');
	Route::post('/wbs/w','custumer\wbs@reserve');
	Route::Resource('/ticket','admin\myticketcontroller');
	Route::Resource('/reservation','admin\reservationcontroller');
	Route::Resource('/feedback','admin\fedback');
	Route::Resource('/frontcon','admin\frontcontrol');
	Route::Resource('/cuspay','custumer\paycontroller');
	Route::Resource('/yatayat','admin\yatayat');
	Route::Resource('/top_des','admin\topdes');
	Route::post('/search_bus','admin\searchcontroller@bus');
	Route::post('/search_available','admin\searchcontroller@available');
	Route::post('/search_route','admin\searchcontroller@route');
	Route::post('/search_tickets','admin\searchcontroller@tickets');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
