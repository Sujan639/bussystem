@extends('layouts.login_index')
@section('main-content')
				<form class="login100-form validate-form" role="form" method="POST" action="{{ url('/login') }}">
					{{csrf_field()}}
					<div class="sidebar-brand-icon">
          
          <img src="{{asset('fassets/images/logo.png')}}" width="100px" height="90px" class="center">
        </div>

					<span class="login100-form-title p-b-34 p-t-27">
						 <h2>BTS</h2>
						Log in
					</span>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="number" name="contact" placeholder="contact" required>
                                

						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@if ($errors->has('contact'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span

                                @endif
					</div>
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" >

						<span class="focus-input100" data-placeholder="&#xf191;"></span>
						@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
					</div>
					</div> 

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit"  class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="container-login100-form-btn" style="margin-top: 5px;">
						<a href="{{ url('/register') }}" class="login100-form-btn">Register</a>
					</div>


					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>


				<style type="text/css">
					.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
					


				</style>
				@endsection
				
			