@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
<div>
	<a href="{{url('admin/yatayat/create')}}"><button class="btn btn-primary btn-xs">Add Image</button></a>
</div>
<div class="panel panel-primary" width="400px" style="margin-top: 5px;">
    <div class="panel-heading"><i class="fas fa-images" style="font-size:24px;">Yatayat image</i></div>
    <div class="panel-body">
<table class="table table-bordered table-hover">
	<thead class="thead-dark">
		<tr>
		<th>Id</th>
		<th>Image</th>
		<th>Description</th>
		<th>function</th>
	</tr>
	</thead>
	<tbody>
		@foreach($y as $a)
		<tr>
		<td>{{$a->id}}</td>
		<td>{{$a->img}}</td>
		<td>{{$a->dis}}</td>
		<td>
			<a href="{{url('admin/yatayat/'.$a->id.'/edit')}}"><button class="btn btn-primary btn-xs">Edit</button></a>|
			<form method="post" action="{{url('admin/yatayat/'.$a->id)}}">
				<input type="hidden" name="_method" value="delete">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button type="submit" class="btn btn-danger btn-xs">
				delete</button>
			</form>
		</td>

	</tr>
	@endforeach
	</tbody>
</table>
@endsection