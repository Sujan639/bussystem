@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
                        

<div class="panel panel-primary" width="400px">
    <div class="panel-heading">you have some feedbacks from your customers.</div>
    <div class="panel-body">
    	<table class="table table-hover table-bordered">
    		<thead class="thead-dark">
    			<tr>
    				<th>Id</th>
    				<th>Customer Name</th>
    				<th>Customer Id</th>
    				<th>Title</th>
    				<th>Comments</th>
    				<th>Function</th>
    			</tr>
    		</thead>
    		<tbody>
    			@foreach($f as $s)
    			<tr>
    			<td>{{$s -> id}}</td>
    			<td>{{$s -> name}}</td>
    			<td>{{$s -> cus_id}}</td>
    			<td>{{$s -> title}}</td>
    			<td>{{$s -> fedback}}</td>
    			<td>
    				<form method="post" action="{{url('admin/feedback/'.$s->id)}}">
    					<input type="hidden" name="_method" value="delete">
    					<input type="hidden" name="_token" value="{{csrf_token()}}">
    					<button type="submit" class="btn btn-danger btn-xs">Delete</button>
    				</form>
    		</tr>
    			@endforeach
    		</tbody>

    	</table>

    </div>
</div>


@endsection