@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
<div class="panel panel-primary" width="400px">
    <div class="panel-heading">This is the form to edit the bus in the BTS.</div>
    <div class="panel-body">
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                            	<form method="post" action="{{url('admin/route')}}">
                            		{{csrf_field()}}
                            		<div class="form-group{{ $errors->has('from') ? ' has-error' : '' }}">
                            		<label for="fname">From.</label>
    <input type="text" id="fname" name="from" placeholder="Your bus no." class="form-control">
 @if ($errors->has('from'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('from') }}</strong>
                                    </span>
                                @endif
                              </div>
                              <div class="form-group{{ $errors->has('to') ? ' has-error' : '' }}">
    <label for="lname">To</label>
    <input type="text" id="lname" name="to" placeholder="enter the place" class="form-control">
 @if ($errors->has('to'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('to') }}</strong>
                                    </span>
                                @endif
                              </div>

<div class="form-group{{ $errors->has('distance') ? ' has-error' : '' }}">
    <label for="country">Distance(km)</label>
    <input type="text" id="lname" name="distance" placeholder="enter the place" class="form-control"> @if ($errors->has('distance'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('distance') }}</strong>
                                    </span>
                                @endif
                              </div>

<div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }}">
    <label for="country">Cost</label>
    <input type="text" id="lname" name="cost" placeholder="enter the cost"class="form-control">
     @if ($errors->has('cost'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('cost') }}</strong>
                                    </span>
                                @endif
                              </div>

                              <div class="form-group{{ $errors->has('cost') ? ' has-error' : '' }}">
    <label for="country">Transit details:</label>
    <input type="text" id="lname" name="tran_detail" placeholder="details of transit"class="form-control">
     @if ($errors->has('tran_detail'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('tran_detail') }}</strong>
                                    </span>
                                @endif
                              </div>
    <!-- <label for="country">bus no.</label>
    <input type="text" id="lname" name="bus_no" placeholder="Your last name.."> -->


<!-- <label for="country">Type</label>
    <input type="text" id="lname" name="type" placeholder="Your last name..">
    <label for="country">Route Type</label>
    <input type="text" id="lname" name="rt" placeholder="Your last name.."> -->


<!-- <label for="bus_no">Bus_no.</label>
    <select id="country" name="bus_no" class="form-control">
    	@foreach($b as $r)
      <option value="{{$r -> bus_no}}">{{$r -> bus_no}}</option>
      @endforeach
    </select> -->
  
    <input type="submit" value="Submit">
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