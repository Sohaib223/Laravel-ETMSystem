@extends('layouts.app')

@section('content')
<div class="animated zoomIn auth_box">
				<div class="col-md-4 col-sm-8 col-xs-10 col-md-offset-4 col-sm-offset-2 col-xs-offset-1 no-padding auth_login_bg">
					<div class="auth_login">
						<div class="text-center">
							<i class="fa fa-lock fa-5x" aria-hidden="true"></i>
							<h2 class="font-os-thin text-dg">Forgot Password?</h2>
							<p class="text-dg">You can reset your password here.</p>
						</div>
						<form action="#" autocomplete="off" method="POST">
							<div class="row">
								<div class="col-xs-12 col-md-12 col-sm-12 padding-l-r-xlg">	
									<div class="form-group margin-t-lg padding-l-r-xs">
										<input id="email" class="form-control email_textbox_length" type="email" placeholder="Email address" name="email">
										<button class="auth-button margin-r-xlg" type="submit">
										<i class="fa fa-chevron-right"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="row auth_loginOr">
								<div class="col-xs-6 col-sm-6 col-xs-offset-3 col-sm-offset-3">
									<hr class="auth_hrOr">
									<span class="auth_spanOr">OR</span>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="col-xs-12 col-sm-12 col-md-6">
										<a href="Login.html" class="btn btn-lg btn-block btn-theme margin-t font-16">
											<span>Login</span>
										</a>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6">
										<a href="Signup.html" class="btn btn-lg btn-block btn-primary margin-t font-16">
											<span>Signup</span>
										</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
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
