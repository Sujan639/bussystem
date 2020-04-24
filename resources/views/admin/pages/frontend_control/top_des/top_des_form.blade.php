@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
<div class="panel panel-primary" width="400px">
    <div class="panel-heading"><i class="fas fa-images" style="font-size:24px;">Yatayat image changer</i></div>
    <div class="panel-body">
<form method="post" action="{{url('admin/top_des')}}" class="form-horizontal" enctype="multipart/form-data">
	{{csrf_field()}}
	
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value="">
		@if ($errors->has('name'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
	</div>
	<div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
		<label>Image</label>
		<input type="file" name="img" class="form-control" value="">
		@if ($errors->has('img'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('img') }}</strong>
                                    </span>
                                @endif
	</div>
	
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-xs">Submit</button>
	</div>
</form>
</div>
</div>

@endsection