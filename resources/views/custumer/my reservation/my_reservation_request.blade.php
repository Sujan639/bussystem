@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
                        

<div class="panel panel-primary" width="400px">
    <div class="panel-heading">you can view bus information here.</div>
    <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                 
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>Date</th>
                                                <th>From</th>
                                                <th>Destination</th>
                                                <th>Bus No</th>
                                                <th class="text-right">Company</th>
                                                <th class="text-right">Capacity</th>
                                                <th class="text-right">Type</th>
                                                <th class="text-right">price</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($s as $a)
                                            <tr>
                                                <td>{{$a -> id}}</td>
                                                <td>{{$a -> date}}</td>
                                                <td>{{$a -> fro_m}}</td>
                                                <td>{{$a -> destination}}</td>
                                                <td>{{$a -> bus_no}}</td>
                                                <td class="text-right">{{$a -> company}}</td>
                                                <td class="text-right">{{$a -> capacity}}</td>
                                                <td class="text-right">{{$a -> type}}</td>
                                                <td class="text-right">{{$a -> price}}</td>
                                                
                                               <!--  <td>
                                                	<a href="{{url('admin/cusbus/'.$a->id.'/edit')}}">
                                                		<button class="btn btn-primary btn-xs" onclick="alert('here you can only reserve whole bus. for single seat go from availability.');"> Make Reservation</button>
                                                	</a> 


                                                	

                                                </td> -->
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                    </div>
                </div>
                @endsection