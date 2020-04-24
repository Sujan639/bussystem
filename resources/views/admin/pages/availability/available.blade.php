@extends('admin.admin_index')
@section('main-content')

                            	<a href="{{url('admin/available/create')}}">
                            		<button class="btn btn-primary btn-xs">Add Availability</button>
                            	</a>
                                <link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
<div class="panel panel-primary" width="400px">
    <div class="panel-heading">This is the form to edit the bus in the BTS.</div>
    <div class="panel-body">
        <form method="post" action="{{url('admin/search_available')}}" style="margin-bottom: 3px;">
            {{csrf_field()}}
        <input type="text" name="search" placeholder="Search date" class="form-control" id="myInput">
        <input type="hidden" name="utype" value="{{Auth::user()->type}}">
        <button type="submit" class="btn btn-primary">search</button>
    </form>
                                <div class="#">
                                    <table class="table table-striped ">
                                        <thead>
                                            <tr>
                                                <!-- <th></th> -->
                                                <th>Date</th>
                                                <th>Bus no</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Transit_detail</th>
                                                <!-- <th class="text-right">Route Type</th> -->
                                                <th class="text-right">Functions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($a as $b)
                                           
                                            <tr>
                                                <td>{{$b -> date}}</td>
                                                <td>{{$b -> bus_no}}</td>
                                                <td>{{$b -> fro_m}}</td>
                                                <td>{{$b -> destination}}</td>
                                                <td>{{$b->tran_detail}}</td>
                                               
                                                 
                                                <td>
                                                	<a href="{{url('admin/available/'.$b->id.'/edit')}}">
                                                		<button class="btn btn-primary btn-xs"> Edit</button>
                                                	</a> |


                                                	<form method="post" action="{{url('admin/available/'.$b->id)}}" onsubmit="danger();">
                                                        <input type="hidden" name="_method" value="delete">
                                                        <div class="from-group">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" value="submit" class="btn btn-danger btn-xs">delete</button>
                                                        </div>
                                                        
                                                    </form>

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
            <script type="text/javascript">
                    function danger()
                    { 
                        var c=confirm("make sure...your corresponding records of reservation will be deleted.");
                        if(c==true)
                        {
                            // alert("hello");
                           return true;  
                        }
                        else{
                            // alert("bye");
                            event.preventDefault();
                        }
                    
                    }
                </script>
@endsection