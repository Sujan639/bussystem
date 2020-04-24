@extends('admin.admin_index');
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
    <a href="{{url('admin/bus/create')}}">
                                    <button class="btn btn-primary btn-xs">Add Bus</button>
                                </a>                    

<div class="panel panel-primary" width="400px">
    <div class="panel-heading">you can view bus information here.</div>
    <div class="panel-body">
<form method="post" action="{{url('admin/search_bus')}}">
            {{csrf_field()}}
        <input type="text" name="search" placeholder="Search" class="form-control" id="myInput">
        <input type="hidden" name="utype" value="{{Auth::user()->type}}">
        <button type="submit" class="btn btn-primary">search</button>
    </form>
                                
                                <div class="#">
                                    <table class="table table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Bus NO.</th>
                                                <th>Company</th>
                                                <th>Capacity</th>
                                                <th class="text-right">Date of Registration</th>
                                                <th class="text-right">Type</th>
                                                <th class="text-right">Yatayat</th>
                                                <th class="text-right">Functions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($b as $a)
                                            <tr>
                                                <td>{{$a -> id}}</td>
                                                <td>{{$a -> bus_no}}</td>
                                                <td>{{$a -> company}}</td>
                                                <td>{{$a -> capacity}}</td>
                                                <td>{{$a -> date_of_reg}}</td>
                                                <td class="text-right">{{$a -> type}}</td>
                                                <td class="text-right">{{$a -> yatayat}}</td>
                                                
                                                <td>
                                                	<a href="{{url('admin/bus/'.$a->id.'/edit')}}">
                                                		<button class="btn btn-primary btn-xs"> Edit</button>
                                                	</a> |


                                                	<form method="post" action="{{url('admin/bus/'.$a->id)}}">
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