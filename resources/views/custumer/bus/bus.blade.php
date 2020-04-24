@extends('admin.admin_index');
@section('main-content')

<div class="wbr">
                           <a href="{{url('admin/wbs')}}">
                           <button class="btn btn-primary btn-xs">Whole Bus Reservation</button>
                       </a></div>
                            <link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
                        

<div class="panel panel-primary" width="400px">
    <div class="panel-heading">you can view bus information here.</div>
    <div class="panel-body">
         <form method="post" action="{{url('admin/search_bus')}}">
            {{csrf_field()}}
        <input type="text" name="search" placeholder="Search" class="form-control" id="myInput">
        <input type="hidden" name="utype" value="{{Auth::user()->type}}">
        <button type="submit" class="btn btn-primary">search</button>
    </form>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                 
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Bus NO.</th>
                                                <th>Company</th>
                                                <th>Capacity</th>
                                                <th class="text-right">Date of Registration</th>
                                                <th class="text-right">Type</th>
                                                <th class="text-right">Route Type</th>
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
                                                <td>{{$a -> date_of_reg}}</td>
                                                <td class="text-right">{{$a -> type}}</td>
                                                <td class="text-right">{{$a -> yatayat}}</td>
                                                
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
                </div>

            </div>
        </div>
        <style type="text/css">
            .wbr{
                padding: 10px;
            }
        </style>
    


@endsection