@extends('admin.admin_index')
@section('main-content')

                            	<!-- <a href="{{url('admin/route/create')}}">
                            		<button class="btn btn-primary btn-xs">Add Routes</button>
                            	</a> -->
                              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Route list</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{url('admin/search_route')}}" >
            {{csrf_field()}}
        <input type="text" name="search" placeholder="Search" class="form-control" id="myInput">
        <input type="hidden" name="utype" value="{{Auth::user()->type}}">
        <button type="submit" class="btn btn-primary">search</button>
    </form>
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                 
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <!-- <th>Bus_no</th>
                                                <th>Date</th> -->
                                                <th>Distance(km)</th>
                                                <th class="text-right">cost</th>
                                                
                                                
                                                <th class="text-right">Transit Detail</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($r as $a)
                                            <tr>
                                                <td>{{$a -> id}}</td>
                                                <td>{{$a -> fro_m}}</td>
                                                <td>{{$a -> destination}}</td>
                                                <!-- <td>{{$a -> bus_no}}</td>
                                                <td>{{$a -> date}}</td> -->
                                                <td>{{$a -> distance}}</td>
                                                <td>{{$a -> cost}}</td>
                                                <td>{{$a -> tran_detail}}</td>
                                                
                                                
                                                
                                                
                                                	<!-- <td>
                                                    <a href="{{url('admin/cusroute/'.$a->id.'/edit')}}">
                                                        <button class="btn btn-primary btn-xs"> Make Reservation</button>
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
                            </div>
                            
                    </div>
                </div>
            </div>

@endsection