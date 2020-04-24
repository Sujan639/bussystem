@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
                        

<div class="panel panel-primary" width="400px">
    <div class="panel-heading">you can send feedback directly to the admin from here.</div>
    <div class="panel-body">
    	<form method="post" action="{{url('admin/feedback')}}" onsubmit="thanks();">
    		{{csrf_field()}}
    		<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    			<label class="control-lable">Title</label>
    			<input type="text" name="title" class="form-control">
    			<div style="color: red;"> 
    			@if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
    		</div>
    		<div class="form-group{{ $errors->has('feedback') ? 'has-error' : ''}}">
    			<label class="control-lable">Feedback</label>
    			<textarea name="feedback" class="form-control"></textarea>
    			<div style="color: red;"> 
    			@if ($errors->has('feedback'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('feedback') }}</strong>
                                    </span>
                                @endif
                            </div>
    		</div>
    		<input type="hidden" name="cus_id" value="{{Auth::user()->id}}">
    		<div class="form-group">
    			<button type="submit" class="btn btn-primary btn-xs"> SEND</button>
    	</form>



    </div>
</div>
<script type="text/javascript">
	function thanks()
	{
		alert("Thank you for your valuable comments. :) ");
	}
</script>
@endsection