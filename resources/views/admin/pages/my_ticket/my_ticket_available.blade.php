@extends('admin.admin_index')
@section('main-content')

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                 
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <!-- <th>Custumer Name</th> -->
                                                
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Bus_no</th>
                                                <th>Bus Id</th>
                                                <!-- <th>Reservation Date</th> -->
                                            
                                                <!-- <th>Seat no.</th> -->
                                                <th>Trip Date</th>
                                                <!-- <th>Status</th> -->
                                                <!-- <th class="text-right">cost</th> -->
                                                
                                                
                                                <th class="text-right">Functions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($s as $a)
                                            <tr>
                                                <td>{{$a -> id}}</td>
                                                <!-- <td>{{$a -> name}}</td> -->
                                                <!-- <td>{{$a -> cus_id}}</td> -->
                                                <td>{{$a -> fro_m}}</td>
                                                <td>{{$a -> destination}}</td>
                                                <td>{{$a -> bus_no}}</td>
                                                <td>{{$a -> bus_id}}</td>
                                                <!-- <td>{{$a -> reservation_date}}</td> -->
                                                <!-- <td>{{$a -> seat_no}}</td> -->
                                                <td>{{$a -> date}}</td>
                                                <!-- <td>{{$a -> status}}</td> -->
                                                <!-- <td>{{$a -> total_cost}}</td> -->
                                                <td>
                                                    <form method="post" id="form1" action="{{url('admin/ticket/'.Auth::user()->id)}}" >
                                                    <input type="hidden" name="_method" value="put">
                                                    {{csrf_field()}}
                                                     <div class="form-group">
                                                            <!-- <input type="hidden" name="cus_id" value="{{$a->cus_id}}"> -->
                                                            <input type="hidden" name="bus_no" value="{{$a->bus_no}}">
                                                            <!-- <input type="hidden" name="bus_id" value="{{$a->bus_id}}"> -->
                                                            <input type="hidden" name="date" value="{{$a->date}}">
                                                            
                                                        </div>
                                                        <div class="form-group">

                                                            <button type="submit" value="submit" class="btn btn-primary btn-xs" >view Tickets</button>
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

@endsection