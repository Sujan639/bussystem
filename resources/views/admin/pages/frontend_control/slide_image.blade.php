@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
<div class="panel panel-primary" width="400px">
    <div class="panel-heading"><i class="fas fa-images" style="font-size:24px;">slide image changer</i></div>
    <div class="panel-body">
<form method="post" action="{{url('admin/frontcon')}}" enctype="multipart/form-data">
	{{csrf_field()}}
	<!-- <input type="hidden" name="_method" value="put"> -->
	<div class="form-group">
		<label class="control-label">slide no.</label>
		<select name="img_id" class="form-control">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>
	</div>
	<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
		<label class="control-label">Title</label>
		<input type="text" name="title" value="" class="form-control">
		@if ($errors->has('title'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
	</div>
	<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
		<label class="control-label">image</label>
		<input type="file" name="image" value="" class="form-control">
		@if ($errors->has('image'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
	</div>
	<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
		<label class="control-label">Description</label>
		<input type="text" name="descrip" value="" class="form-control">
		@if ($errors->has('image'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary btn-xs">Submit</button>
	</div>
    
	</form>

</div>
</div>
</div>

</div>
</div>


@endsection