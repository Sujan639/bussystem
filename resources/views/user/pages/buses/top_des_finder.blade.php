@extends('user.index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>

<div class="panel panel-primary" width="400px">
    <div class="panel-heading">Buses available for {{$t->name}}</div>
    <div class="panel-body">
    	<table class="table table-hover">
    		<thead class="thead-dark">
    			<tr>
    			<th>Bus no.</th>
    			<th>Date</th>
    			<th>From</th>
    			<th>To</th>
    			<th>distance</th>
    			<th>Cost</th>
    			<th></th>
</tr>
    		</thead>
    		<tbody>
    			@foreach($a as $b)
    			<tr>
    				<td>{{$b->bus_no}}</td>
    				<td>{{$b->date}}</td>
    				<td>{{$b->fro_m}}</td>
    				<td>{{$b->destination}}</td>
    				<td>{{$b->distance}}</td>
    				<td>{{$b->cost}}</td>
    				<td><form action="{{url('/seat_view')}}"method="post">
				{{csrf_field()}}
				<input type="hidden" name="bus_no" value="{{$b->bus_no}}">
				<input type="hidden" name="date" value="{{$b->date}}">
				<button type="submit" class="btn btn-primary btn-xs">View Seats</button>
			</form></td>
    			</tr>
    			@endforeach
    		</tbody>
    	</table>


@endsection