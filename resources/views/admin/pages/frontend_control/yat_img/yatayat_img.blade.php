@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
<div class="panel panel-primary" width="400px">
    <div class="panel-heading"><i class="fas fa-images" style="font-size:24px;">Yatayat image changer</i></div>
    <div class="panel-body">
<form method="post" action="{{url('admin/yatayat')}}" enctype="multipart/form-data">
	{{csrf_field()}}
	<div class="form-group">
		<label class="control-label">discription</label>
		<input type="text" name="des" class="form-control">
	</div>
	<div class="form-group">
		<label class="control-label">Image</label>
		<input type="file" name="img" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-xs">Submit</button>
	</div>
</form>
</div>
</div>

@endsection