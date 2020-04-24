@extends('admin.admin_index')
@section('main-content')


                                    <table class="table table-bordered table-striped ">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Customer's Name</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th class="text-right">Gender</th>
                                                <th class="text-right">Contact</th>
                                                <!-- <th class="text-right">Date of Birth</th> -->
                                                <th class="text-right">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($s as $a)
                                            <tr>
                                                <td>{{$a -> id}}</td>
                                                <td>{{$a -> name}}</td>
                                                <td>{{$a -> email}}</td>
                                                <td>{{$a -> address}}</td>
                                                <td class="text-right">{{$a -> gender}}</td>
                                                <td class="text-right">{{$a -> contact}}</td>
                                                <!-- <td class="text-right">{{$a -> dob}}</td> -->
                                                <td>
                                                	<a href="{{url('admin/customer/'.$a->id.'/edit')}}"><button class="btn btn-primary btn-xs"> Edit</button></a> |
                                                	<form method="post" action="{{url('admin/customer/'.$a->id)}}">
                                                		<input type="hidden" name="_method" value="delete">
                                                		<div class="form-group">
                                                			<input type="hidden" name="_token" value="{{csrf_token()}}">
                                                		</div>
                                                		<div class="form-group">
                          <button type="submit" class="btn btn-danger btn-xs" >Delete</button>
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