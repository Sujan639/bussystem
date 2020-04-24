@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
<div class="panel panel-primary" width="400px">
    <div class="panel-heading"><i class="fas fa-images" style="font-size:24px;">Top Destination image changer</i></div>
    <div class="panel-body">

<form method="post" action="{{url('admin/top_des/'.$t->id)}}" class="form-horizontal" enctype="multipart/form-data">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="put">
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value="{{$t->name}}">
		@if ($errors->has('name'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
	</div>
	<div class="form-group">
		<label>Image</label>
		<input type="file" name="img" class="form-control" value="{{$t->img}}">
	</div>
	
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-xs">Submit</button>
	</div>
</form>
</div>
</div>

@endsection