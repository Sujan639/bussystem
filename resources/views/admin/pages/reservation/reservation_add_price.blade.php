@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
<div class="panel panel-primary" width="400px">
    <div class="panel-heading">This is the form to edit the bus in the BTS.</div>
    <div class="panel-body">
<form method="post" action="{{url('admin/reservation/'.$r->id)}}" onsubmit="alert('price added!');">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="put">
	<div class="form-group">
    <label for="lname" class="control-label">Id</label>
    <input type="text" id="lname" name="dat_e" placeholder="Your last name.." class="form-control" value="{{$r->id}}" readonly>
</div>
<div class="form-group">
    <label for="lname" class="control-label">Form</label>
    <input type="text" id="lname" name="dat_e" placeholder="Your last name.." class="form-control" value="{{$r->fro_m}}" readonly>
</div>
<div class="form-group">
    <label for="lname" class="control-label">Destination</label>
    <input type="text" id="lname" name="dat_e" placeholder="Your last name.." class="form-control" value="{{$r->destination}}" readonly>
</div>
<div class="form-group">
    <label for="lname" class="control-label">Trip Date</label>
    <input type="text" id="lname" name="dat_e" placeholder="Your last name.." class="form-control" value="{{$r->t_date}}" readonly>
</div>
<div class="form-group">
    <label for="lname" class="control-label">Bus No.</label>
    <input type="text" id="lname" name="dat_e" placeholder="Your last name.." class="form-control" value="{{$r->bus_no}}" readonly>
</div>
<div class="form-group">
    <label for="lname" class="control-label">Capacity</label>
    <input type="text" id="lname" name="dat_e" placeholder="Your last name.." class="form-control" value="{{$r->capacity}}" readonly>
</div>
<div class="form-group">
    <label for="lname" class="control-label">Type</label>
    <input type="text" id="lname" name="dat_e" placeholder="Your last name.." class="form-control" value="{{$r->type}}" readonly>
</div>
<div class="form-group">
    <label for="lname" class="control-label">Name</label>
    <input type="text" id="lname" name="dat_e" placeholder="Your last name.." class="form-control" value="{{$r->name}}" readonly>
</div>
<div class="form-group">
    <label for="lname" class="control-label">Contact</label>
    <input type="text" id="lname" name="dat_e" placeholder="Your last name.." class="form-control" value="{{$r->contact}}" readonly>
</div>
<div class="form-group">
    <label for="lname" class="control-label">Address</label>
    <input type="text" id="lname" name="dat_e" placeholder="Your last name.." class="form-control" value="{{$r->address}}" readonly>
</div>
<div class="form-group">
    <label for="lname" class="control-label">price</label>
    <input type="text" id="lname" name="price" placeholder="enter the price" class="form-control">
</div>

<button type="submit" class="btn btn-primary btn-xs">submit</button>
</form>
</div>
</div>


@endsection