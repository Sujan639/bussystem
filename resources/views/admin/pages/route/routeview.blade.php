@extends('admin.admin_index')
@section('main-content')

                            	<a href="{{url('admin/route/create')}}">
                            		<button class="btn btn-primary btn-xs">Add Routes</button>
                            	</a>
                                <link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
<div class="panel panel-primary" width="400px">
    <div class="panel-heading">This is the form to edit the bus in the BTS.</div>
    <div class="panel-body">
        <div style="margin-bottom: 5px;" >
                    <form method="post" action="{{url('admin/search_route')}}" >
            {{csrf_field()}}
        <input type="text" name="search" placeholder="Search" class="form-control" id="myInput">
        <input type="hidden" name="utype" value="{{Auth::user()->type}}">
        <button type="submit" class="btn btn-primary">search</button>
    </form>
</div>
                                <div class="#">
                                    <table class="table table-bordered table-striped ">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Distance(km)</th>
                                                <th class="text-right">cost</th>
                                                <!-- <th class="text-right">bus no</th> -->
                                                <!-- <th class="text-right">Route Type</th> -->
                                            <th>Transit Details</th>
                                                <th class="text-right">Functions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($r as $a)
                                            <tr>
                                                <td>{{$a -> id}}</td>
                                                <td>{{$a -> fro_m}}</td>
                                                <td>{{$a -> destination}}</td>
                                                <td>{{$a -> distance}}</td>
                                                <td>{{$a -> cost}}</td>
                                                <td class="text-right">{{$a -> tran_detail}}</td>
                                                <!-- <td class="text-right">{{$a -> route_type}}</td> -->
                                                
                                                <td>
                                                	<a href="{{url('admin/route/'.$a->id.'/edit')}}">
                                                		<button class="btn btn-primary btn-xs">edit</button>
                                                	</a>|
                                                	<form method="post" action="{{url('admin/route/'.$a->id)}}">
                                                		<input type="hidden" name="_method" value="delete">
                                                		<div class="form-group">
                                                			<input type="hidden" name="_token" value="{{csrf_token()}}">
                                                		</div>
                                                		<div class="form-group">
                                                			<button type="submit" class="btn btn-danger btn-xs">delete</button>
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

@endsection