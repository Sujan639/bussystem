@extends('admin.admin_index')
@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>
                        

<div class="panel panel-primary" width="400px">
    <div class="panel-heading">you can view bus information here.</div>
    <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                 
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                
                                                <th>From</th>
                                                <th>Destination</th>
                                                <th>Trip Date</th>
                                                <th>Bus No</th>
                                                
                                                <th class="text-right">Capacity</th>
                                                <th class="text-right">Type</th>
                                                <th>Price</th>
                                                <th class="text-right">Name</th>
                                                <th class="text-right">Contact no.</th>
                                                <th class="text-right">address</th>
                                                <th class="text-right">Functions</th>
                                                
                                            </tr>
                                        </thead>
                                        @foreach($r as $a)
                                        <tbody>
                                           
                                            <tr>
                                                <td>{{$a -> id}}</td>
                                                
                                                <td>{{$a -> fro_m}}</td>
                                                <td>{{$a -> destination}}</td>
                                                <td>{{$a -> t_date}}</td>
                                                <td>{{$a -> bus_no}}</td>
                                                <td class="text-right">{{$a -> capacity}}</td>
                                                <td class="text-right">{{$a -> type}}</td>
                                                <td>{{$a -> price}}</td>
                                                <td>{{$a -> name}}</td>
                                                <td>{{$a -> contact}}</td>
                                                <td>{{$a -> address}}</td>
                                                
                                                <td>
                                                    
                                                       
                                                        
                                                        <a href="{{url('admin/reservation/'.$a->id.'/edit')}}">
                                                        <button class="btn btn-primary btn-xs">Edit/Add Price</button>
                                                    </a>
                                                     | <form method="post" action="{{url('admin/reservation/'.$a->id)}}" onsubmit="danger();">
                                                        
                                                        <input type="hidden" name="_method" value="delete">
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                        <button type="submit" class="btn btn-danger btn-xs">DONE</button>
                                                    </form>
                                                     
                                                </td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            
                    </div>
                </div>
                <script type="text/javascript">
                    function danger()
                    { 
                        var c=confirm("make sure...your record will be deleted.");
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