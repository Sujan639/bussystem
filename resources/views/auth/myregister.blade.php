@extends('layouts.login_index')
@section('main-content')
				<form class="login100-form validate-form" role="form" method="POST" action="{{ url('/register') }}">
					{{csrf_field()}}
					<div class="sidebar-brand-icon">
          
          <img src="{{asset('fassets/images/logo.png')}}" width="100px" height="90px" class="center">
        </div>

					<span class="login100-form-title p-b-34 p-t-27">
						User Registration
					</span>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="name" placeholder="Name" required="please enter your name">
                                

						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span

                                @endif
					</div>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" placeholder="E-mail Address" required>
                                

						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span

                                @endif
					</div>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="gender" placeholder="Gender" required>
                                

						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span

                                @endif
					</div>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="addres" placeholder="Address" required>
                                

						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span

                                @endif
					</div>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="dob" placeholder="Date of Birth" required>
                                

						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span

                                @endif
					</div>
</div>
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="text" name="contact" placeholder="Contact No." >

						<span class="focus-input100" data-placeholder="&#xf191;"></span>
						@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
					</div>
					</div>

					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username" required>
                                

						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span

                                @endif

					</div>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="password" name="username" placeholder="Password" required>
                                

						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span

                                @endif
					</div>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="password_conformation" placeholder="Conform Password" required>
                                

						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span

                                @endif
					</div>
</div>
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="password" name="tran_code" placeholder="Transaction code" required>
                                

						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span

                                @endif
					</div>
</div>

						<input class="input100" type="hidden" name="type" value="custumer" required>
                                

						
					<!-- <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit"  class="login100-form-btn">
							Login
						</button>
					</div> -->
					<div class="container-login100-form-btn">
						<a href="{{ url('/register') }}" class="login100-form-btn">Register</a>
					</div>


					<!-- <div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div> -->
				</form>

				<style type="text/css">
					.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
				@endsection
				
			