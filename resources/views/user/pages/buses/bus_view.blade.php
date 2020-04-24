@extends('user.index')
@section('main-content')
 <link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>

<div class="panel panel-primary" width="400px">
    <div class="panel-heading">you can view the lsit of available bus details.</div>
    <div class="panel-body">
<table class="table table-hover">
	<thead style="background-color: rgb(18,90,199);color: white;">
		<tr>
		<th>Bus no.</th>
		<th>Form</th>
		<th>To</th>
		<th>Date</th>
		<th>Cost/seat</th>
		<th></th>
	</tr>
		
	</thead>
	<tbody>
		@foreach($r as $a)
		<tr>
			
			<td>{{$a->bus_no}}</td>
			<td>{{$a->fro_m}}</td>
			<td>{{$a->destination}}</td>
			<td>{{$a->date}}</td>
			<td>{{$a->cost}}</td>
			<td><form action="{{url('/seat_view')}}"method="post">
				{{csrf_field()}}
				<input type="hidden" name="bus_no" value="{{$a->bus_no}}">
				<input type="hidden" name="date" value="{{$a->date}}">
				<button type="submit" class="btn btn-primary btn-xs">View Seats</button>
			</form></td>
		</tr>
		@endforeach
	</tbody>
	
</table>
</div>
</div>


@endsection