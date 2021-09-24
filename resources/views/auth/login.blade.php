@extends('layouts.app')

@section('content')
<div class="animated zoomIn auth_box">
				<div class="col-lg-6 col-md-8 col-sm-10 col-xs-10 col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-xs-offset-1 auth_login_bg bg-theme no-padding">
					<div class="col-md-6 col-sm-6 col-xs-12 no-padding-r no-padding-l">
						<div class="auth_login bg-white">
							<h3 class="no-margin-t">Login</h3>
							<form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                
									<div class="col-xs-12 col-md-12 col-sm-12">	
										<div class="form-group margin-t-lg">
											<input type="text" class="form-control padding-r-xlg @error('email') is-invalid @enderror" name="email" placeholder="User Name" autofocus/>
                                            @error('email')
                                         <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
										</div>
										<div class="form-group margin-t-lg">
											<input type="password" class="form-control padding-r-xlg @error('password') is-invalid @enderror" name="password" placeholder="Password"/>
                                            @error('password')
                                         <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
										
                                        </div>
										<div class="auth_forgotPassword margin-t-lg">
											<div class="inline-block">
												<input type="checkbox" class="remember_me" id="remember_me">
												<label for="remember_me">&nbsp;Remember me</label>
											</div>
                                            @if (Route::has('password.request'))
                                        	<p class="pull-right">
												<a href="{{ route('password.request') }}">Forgot password?</a>
											</p>
                                            @endif
										</div>
									<button id="showtoast" class="btn btn-lg btn-primary btn-theme btn-block margin-t-lg" type="submit">{{ __('Login') }}</button>
							    </div>	
							</form>
						</div>
					</div>
				</div>
			</div>





























@endsection
