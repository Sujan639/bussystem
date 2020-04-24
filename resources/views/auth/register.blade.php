@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/register') }}">
                        @csrf

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="eg.jhon" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="eg.abc@gmail.com"  required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">gender</label>

                            <div class="col-md-6">
                                <select class="form-control" name="gender" required>
                                    <option value="Male">Male</option>
                                     <option value="Female">Female</option>

                                    </select>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('addres') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">address</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="addres" placeholder="eg.ktm" required>

                                @if ($errors->has('addres'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('addres') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 

                         <!-- <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">date of birth</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="dob" required>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

                         <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">contact</label>

                            <div class="col-md-6">
                                <input id="name" type="number" class="form-control" name="contact" placeholder="eg.9847547069"  required>

                                @if ($errors->has('contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <!-- <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">username</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="username" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

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
                        <!-- <div class="form-group{{ $errors->has('tran_code') ? ' has-error' : '' }}">
                             <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Transaction Code</label>

                            <div class="col-md-6">
                                <input id="name" type="password" class="form-control" name="tran_code" required>

                                @if ($errors->has('tran_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tran_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div> -->
                         
                          

                            <div class="col-md-6">
                                <input id="name" type="hidden" class="form-control" name="type" value="admin" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6">
                                     <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
                                     <div style="color: red;"> 
                                     @if($errors->has('g-recaptcha-response'))
                                     <span calss="help-block">
                                        <strong>{{$errors->first('g-recaptcha-response')}}</strong>
                                     </span>
                                 </div>
                             

                                     @endif

                                </div>
                                
                            </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
