@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
<div class="panel panel-primary" width="400px">
    <div class="panel-heading">This is the form to add the bus in the BTS.</div>
    <div class="panel-body">

                            	<form method="post" action="{{url('admin/bus')}}">
                            		{{csrf_field()}}
                            		<div class="form-group{{ $errors->has('bus_no') ? ' has-error' : '' }}">
                            		<label for="fname">Bus NO.</label>
    <input type="text" id="fname" name="bus_no" placeholder="Your bus no." class="form-control">
     @if ($errors->has('bus_no'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('bus_no') }}</strong>
                                    </span>
                                @endif
</div>
<div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
    <label for="lname">company</label>
    <input type="text" id="lname" name="company" placeholder="company" class="form-control">
     @if ($errors->has('company'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
</div>
<div class="form-group{{ $errors->has('capacity') ? ' has-error' : '' }}">
    <label for="country">Capacity</label>
    <input type="text" id="lname" name="capacity" placeholder="no.of seats bus has"class="form-control">
     @if ($errors->has('capacity'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('capacity') }}</strong>
                                    </span>
                                @endif
</div>
<div class="form-group{{ $errors->has('date_of_reg') ? ' has-error' : '' }}">
    <label for="country">Date of Registration</label>
    <input type="date" id="lname" name="dor" placeholder="enter todays date"class="form-control">
     @if ($errors->has('date_of_reg'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('date_of_reg') }}</strong>
                                    </span>
                                @endif
</div>
<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
<label for="country">Type</label>
    <input type="text" id="lname" name="type" placeholder="type of bus"class="form-control">
     @if ($errors->has('type'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
  </div>
  <div class="form-group{{ $errors->has('route') ? ' has-error' : '' }}">
    <label for="country">Route Type</label>
    <input type="text" id="lname" name="rt" placeholder="what type of route bus has"class="form-control">
     @if ($errors->has('route_type'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('route_type') }}</strong>
                                    </span>
                                @endif

</div>

    <!-- <select id="country" name="country">
      <option value="australia">Date Of Registration</option>
      <option value="canada">Type</option>
      <option value="usa">USA</option>
    </select> -->
  <div class="form-group">
    <input type="submit" value="Submit" class="form-control">
  </div>
                            	</form>

                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
<style>

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


</style>

@endsection
