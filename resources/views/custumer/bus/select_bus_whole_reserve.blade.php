@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
<div class="panel panel-primary" width="400px">
    <div class="panel-heading">you can view the lsit of available bus details.</div>
    <div class="panel-body">
                            
                            
                            <div class="form-group">
                            <label for="name" class="col-md-4 control-label">required date</label>

                            <div>
                            	<input class="form-control" id="myInput" type="text" placeholder="Search.." value="{{$request->date}}" readonly>
                                
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">From</label>

                            <div>
                            	
                                <input  type="text" class="form-control" name="fro_m" id="fro_m" value="{{$request->fro_m}}" readonly >
                                
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">destination</label>

                            <div>
                            	
                                <input  type="text" class="form-control" name="destination" id="destination"value="{{$request->destination}}" readonly>
                                
                            </div>

                        </div>
                       <!--  <div class="form-group">
                        	<a href="#">
                        	<button class="btn btn-primary btn-xs" onclick="showavailables();">Request for bus </button>
                        </a>
                        </div>
 -->

                
                                
                            

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                 
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Bus NO.</th>
                                                <th>Company</th>
                                                <th>Capacity</th>
                                                <!-- <th class="text-right">Date of Registration</th> -->
                                                <th class="text-right">Type</th>
                                             <th class="text-right">function</th>
                                                <!-- <th class="text-right">Functions</th> -->
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($b as $a)
                                            <tr>
                                                <td>{{$a -> id}}</td>
                                                <td>{{$a -> bus_no}}</td>
                                                <td>{{$a -> company}}</td>
                                                <td>{{$a -> capacity}}</td>
                                                <!-- <td>{{$a -> date_of_reg}}</td> -->
                                                <td class="text-right">{{$a -> type}}</td>
                                                <!-- <td class="text-right">{{$a -> route_type}}</td> -->
                                                
                                                <td>
                                                    <form method="post" action="{{url('admin/wbs')}}" onsubmit="showavailables();">
                                                        {{csrf_field()}}
                                                    <input type="hidden" name="dat_e" value="{{$request->date}}">
                                                    <input type="hidden" name="fro_m" value="{{$request->fro_m}}">
                                                    <input type="hidden" name="destination" value="{{$request->destination}}">
                                                    <input type="hidden" name="cus_id" value="{{Auth::user()->id}}">
                                                    <input type="hidden" name="id" value="{{$a->id}}">
                            <button class="btn btn-primary btn-xs" type="submit">Request for bus </button>
                        
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                    </div>
                </div>
                </div>
                            
                                </div>


                        
                    
                    <script type="text/javascript">
                    	function showavailables()
                    	{
                    		
                    		alert("we will contact you shortly.")
                    		


                    	}
                    </script>
                    

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


@endsection