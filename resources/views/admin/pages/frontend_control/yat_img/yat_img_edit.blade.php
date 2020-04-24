@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
<div class="panel panel-primary" width="400px">
    <div class="panel-heading"><i class="fas fa-images" style="font-size:24px;">Yatayat image changer</i></div>
    <div class="panel-body">
<form method="post" action="{{url('admin/yatayat/'.$y->id)}}" class="form-horizontal" enctype="multipart/form-data">
	{{csrf_field()}}
	<input type="hidden" name="_method" value="put">
	<div class="form-group{{ $errors->has('des') ? ' has-error' : '' }}">
		<label>discription</label>
		<input type="text" name="des" class="form-control" value="{{$y->dis}}">
		@if ($errors->has('des'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('des') }}</strong>
                                    </span>
                                @endif
	</div>
	<div class="form-group">
		<label>Image</label>
		<input type="file" name="img" class="form-control" value="{{$y->img}}">
	</div>
	
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-xs">Submit</button>
	</div>
</form>
</div>
</div>

@endsection