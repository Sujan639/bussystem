@extends('admin.admin_index')
@section('main-content')


                            	<!-- <a href="{{url('admin/route/create')}}">
                            		<button class="btn btn-primary btn-xs">Add Routes</button>
                             	</a> -->
                              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                 
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Bus no.</th>
                                                <th>Reservation Date</th>
                                            
                                                <th>Seat no.</th>
                                                <th>Trip Date</th>
                                                <th>Status</th>
                                                <th class="text-right">cost</th>
                                                
                                                
                                                <th class="text-right">Functions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($r as $a)
                                            <tr>
                                                <td>{{$a -> id}}</td>
                                                <td>{{$a -> fro_m}}</td>
                                                <td>{{$a -> destination}}</td>
                                                <td>{{$a -> bus_no}}</td>
                                                <td>{{$a -> reservation_date}}</td>
                                                <td>{{$a -> seat_no}}</td>
                                                <td>{{$a -> trip_date}}</td>
                                                <td>{{$a -> status}}</td>
                                                <td>{{$a -> total_cost}}</td>
                                                <td>
                                                    @if($a->status=="R")
                                                    <form method="post" id="form1" action="{{url('admin/cusmyreservation/'.$a->id)}}" onsubmit="conformdelete();">
                                                    <input type="hidden" name="_method" value="put" >
                                                    {{csrf_field()}}
                                                     <div class="form-group">
                                                            <input type="hidden" name="cus_id" value="{{$a->cus_id}}">
                                                            <input type="hidden" name="bus_no" value="{{$a->bus_no}}">
                                                            <input type="hidden" name="bus_id" value="{{$a->bus_id}}">
                                                            <input type="hidden" name="date" value="{{$a->trip_date}}">
                                                            <input type="hidden" id="seat" name="seat_no" value="{{$a->seat_no}}">
                                                            
                                                        </div>
                                                        <div class="form-group">

                                                            <button type="submit" value="submit" class="btn btn-danger btn-xs" >delete</button>
                                                        </div>
                                                    </form>
                                                     <div>
                                                            <a href="{{url('admin/cuspay/'.$a->id)}}">
                                                                <button class="btn btn-primary btn-xs">make payment</button>
                                                        </div>
    
                                                    @endif
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
                function conformdelete() {
                    alert("hello");
                    var s=confirm("do you really want to delete your reservation??");
                    // 
                    if(s==false)
                    {
                        event.preventDefault();
                    }
                    
                    }
            </script>
           

@endsection