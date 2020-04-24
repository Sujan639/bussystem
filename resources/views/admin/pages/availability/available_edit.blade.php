@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
<div class="panel panel-primary" width="400px">
    <div class="panel-heading">This is the form to edit the bus in the BTS.</div>
    <div class="panel-body">

                            	<form method="post" action="{{url('admin/available/'.$s->id)}}">
                            		{{csrf_field()}}
                            		<input type="hidden" name="_method" value="put">
                            		<div class="form-group{{ $errors->has('bus_no') ? ' has-error' : '' }}">
                                <label for="fname">Bus NO.</label>

    <select id="country" name="bus_no" class="form-control" value="">
      <option value="{{$s->bus_no}}">{{$s->bus_no}}</option>
      <option value=""></option>
      @foreach($b as $c)

      <option value="{{$c->bus_no}}">{{$c->bus_no}}</option>
      <!-- <option value="canada">Type</option>
      <option value="usa">USA</option> -->
      @endforeach
    </select>
    @if ($errors->has('bus_no'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('bus_no') }}</strong>
                                    </span>
                                @endif
</div>

<div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
    <label for="name">Date</label>
    <input type="date" id="lname" name="date" placeholder="Your last name.." class="form-control" value="{{$s->date}}">
    @if ($errors->has('date'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
</div>
    <!-- <label for="country">From</label>
    <input type="text" id="lname" name="from" placeholder="Your last name..">

    <label for="country">To</label>
    <input type="text" id="lname" name="to" placeholder="Your last name.."> -->


<!-- <label for="country">Type</label>
    <input type="text" id="lname" name="type" placeholder="Your last name..">
    <label for="country">Route Type</label>
    <input type="text" id="lname" name="rt" placeholder="Your last name.."> -->
<div class="form-group{{ $errors->has('bus_no') ? ' has-error' : '' }}">
<label for="from">Journey</label>
@foreach($z as $x)


    <select id="country" name="journey" class="form-control">
      <option value="{{$x->id}}">{{$x->fro_m}} To {{$x->destination}}</option>
      <option value=""></option>
      @foreach($a as $c)
      
      <option value="{{$c->id}}">{{$c->fro_m}} To {{$c-> destination}}</option>
      
      @endforeach
    </select>
    @endforeach
    @if ($errors->has('journey'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('journey') }}</strong>
                                    </span>
                                @endif
    
</div>
<!-- <div class="form-group">
    <label id="country">To</label>
    <select id="country" name="to" class="form-control" value="{{$s->destination}}">
      <option value="{{$s->destination}}">{{$s->destination}}</option>
      @foreach($a as $c)
      <option value="{{$c->destination}}">{{$c->destination}}</option> -->
      <!-- <option value="canada">Type</option>
      <option value="usa">USA</option> -->
      <!-- @endforeach
    </select>
  </div> -->
    

  <div class="form-group">
    <input type="submit" value="Submit" class="form-control">
                            	</form>
</div>
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