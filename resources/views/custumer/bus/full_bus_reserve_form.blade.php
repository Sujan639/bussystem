@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
<div class="panel panel-primary" width="400px">
    <div class="panel-heading">Whole Bus Reservation.</div>
    <div class="panel-body">


                            
                            <form method="post" action="{{url('admin/wbs/'.Auth::user()->id)}}">
                            	{{csrf_field()}}
                                <input type="hidden" name="_method" value="put">
                            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">required date</label>

                            <div>
                            	
                                <input  type="date" class="form-control" name="date" id="date" placeholder="yyyy-mm-yy">
                                 @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group{{ $errors->has('fro_m') ? ' has-error' : ''}} ">
                            <label for="name" class="col-md-4 control-label">From</label>

                            <div>
                            	
                                <input  type="text" class="form-control" name="fro_m" id="fro_m" >
                                 @if ($errors->has('fro_m'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fro_m') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group {{ $errors->has('destination') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">destination</label>

                            <div>
                            	
                                <input  type="text" class="form-control" name="destination" id="destination">
                                 @if ($errors->has('destination'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('destination') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group">
                        	
                        	<button class="btn btn-primary btn-xs"type="submit">search for the bus</button>
                        
                        </div>
                    </form>




@endsection