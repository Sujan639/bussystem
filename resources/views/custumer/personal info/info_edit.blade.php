@extends('admin.admin_index')

@section('main-content')
<link rel="stylesheet" type="text/css" href="{{asset('extracss/panel.css')}}"/>

<div class="panel panel-primary" width="400px">
    <div class="panel-heading">you can view/edit your info here.</div>
    <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/cusmyinfo/'.Auth::user()->id)}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                    <input type="hidden" name="formname" value="val_update">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div>
                                <input id="name" type="text" class="form-control" name="name" value="{{$i->name}}" >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div >
                                <input id="email" type="email" class="form-control" name="email" value="{{$i->email}}" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">gender</label>

                            <div>
                                <input id="name" type="name" class="form-control" name="gender" value="{{$i->gender}}" >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">address</label>

                            <div>
                                <input id="name" type="name" class="form-control" name="addres" value="{{$i->address}}" >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">date of birth</label>

                            <div >
                                <input id="name" type="date" class="form-control" name="dob" required value="{{$i->dob}}" >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">contact</label>

                            <div >
                                <input id="name" type="name" class="form-control" name="contact" required value="{{$i->contact}}" >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('u_img') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">profile picture</label>

                            
                                <input type="file" class="form-control" name="u_img" value="{{$i->u_img}}">

                                @if ($errors->has('u_img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('u_img') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!--  <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">username</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="username" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                             <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Transaction Codel</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="tran_code" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                          

                            <div >
                                <input id="name" type="hidden" class="form-control" name="type" value="custumer" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save Updates
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

</div>
@endsection
