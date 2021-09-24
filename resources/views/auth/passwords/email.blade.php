@extends('layouts.app')
@section('content')
<div class="auth-page">
			<div class="animated zoomIn auth_box">
				<div class="col-md-4 col-sm-8 col-xs-10 col-md-offset-4 col-sm-offset-2 col-xs-offset-1 no-padding auth_login_bg">
					<div class="auth_login">
						<div class="text-center">
							<i class="fa fa-lock fa-5x" aria-hidden="true"></i>
							<h2 class="font-os-thin text-dg">Forgot Password?</h2>
							<p class="text-dg">You can reset your password here.</p>
						</div>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                        @csrf
							<div class="row">
								<div class="col-xs-12 col-md-12 col-sm-12 padding-l-r-xlg">	
									<div class="form-group margin-t-lg padding-l-r-xs">
										<input class="form-control email_textbox_length @error('email') is-invalid @enderror" id="email" type="email"  name="email" value="{{ old('email') }}" placeholder="Email address" name="email">
										@error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
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
                            <div class="row auth_loginOr">
								<div class="col-xs-6 col-sm-6 col-xs-offset-3 col-sm-offset-3">
									<a href="Login.html" class="btn btn-flat btn-block btn-theme margin-t font-16">
											<span>Login</span>
									</a>
                        		</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection

