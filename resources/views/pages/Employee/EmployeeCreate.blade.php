@extends('layouts.master')
@section('content')
<div class="profile">
<div class="row">
                        <div class="col-md-12 no-padding">
                            <div class="section breadcrumb-page-title padding-lg">
                                <div class="section-body">
                                    <div class="row">
                                        <div class="col-md-6 hidden-sm hidden-xs">
                                            <ul class="breadcrumb bg-white text-left no-margin padding-t-sm">
                                                <li><a href="index-3.html" class="text-mg"><i class="fa fa-home fa-lg"></i></a></li>
                                                <li><a href="/EmployeeDetails" class="text-mg">Employee List</a></li>
                                                <li class="active text-dg">Create Employee</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <h5 class="text-right no-margin text-italic text-normal font-12">E.T.M.S</h5>
                                            <h1 class="text-right no-margin"><i class="fa fa-users" aria-hidden="true"></i> Create Employee</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                            <div class="col-md-12 no-padding">
                                <div class="section no-margin">
                                    <div class="section-body no-padding">
                                        <ul class="nav nav-pills padding-xs">
                                            <li class="active"><a href="/EmployeeCreate" data-toggle="pill">Create Employee</a></li>
                                            <li><a href="/EmployeeDetails">Employee List</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row">
						<div class="col-md-12">
							<div class="tab-content">
                                <div id="Activity" class="tab-pane fade in active">
									<div class="section">
										<div class="section-body">
										<div class="col-sm-12" style="color:green; margin-top:10px; margin-bottom:10px;" >
											<center>		
											@if(Session::has('success'))
												{{Session::get('success')}}	
											@endif
											</center>
										</div>
                                            <form class="form-horizontal validate-form" action="/AddEmployee" method="post" enctype="multipart/form-data" >
											@csrf
											
												<div class="form-group margin-t-sm">
													<label for="inputName" class="col-sm-2 control-label">Name :</label>
													<div class="col-sm-10">
													@if ($errors->has('name'))
													  <div class="error" style="color:red">{{ $errors->first('name') }}</div>
													  @endif
													  <input class="form-control" type="Name" id="Name" name="name" placeholder="Please Enter your name" >
													</div>
												</div>
												<div class="form-group">
													<label for="inputEmail" class="col-sm-2 control-label">Email:</label>
													<div class="col-sm-10">
													@if ($errors->has('email'))
													  <div class="error" style="color:red">{{ $errors->first('email') }}</div>
													  @endif
														<input class="form-control" type="email" id="email" name="email" placeholder="Please enter your email" >
													</div>
												</div>
												<div class="form-group">
													<label for="inputpassword" class="col-sm-2 control-label">Password:</label>
													<div class="col-sm-10">
													@if ($errors->has('password'))
													  <div class="error" style="color:red">{{ $errors->first('password') }}</div>
													  @endif
													  <input type="password" class="form-control" id="inputpassword" name="password"placeholder="Please Enter your Password" >
													</div>
												</div>
												<div class="form-group">
													<label for="inputphone" class="col-sm-2 control-label">Address :</label>

													<div class="col-sm-10">
													@if ($errors->has('address'))
													  <div class="error" style="color:red">{{ $errors->first('address') }}</div>
													  @endif
														<textarea class="form-control" type="Address"  name="address" id="Address" placeholder="Please Enter your Address"  ></textarea>
													  </div>
												</div>
												<div class="form-group">
													<label for="skill" class="col-sm-2 control-label">CNIC :</label>

													<div class="col-sm-10">
													@if ($errors->has('cnic'))
													  <div class="error" style="color:red">{{ $errors->first('cnic') }}</div>
													  @endif
													  <input class="form-control" type="CNIC"  name="cnic" id="CNIC" placeholder="Please Enter your CNIC Number" >
													</div>
												</div>
												<div class="form-group">
														<label for="inputphone" class="col-sm-2 control-label">Phone Num:</label>

														<div class="col-sm-10">
														@if ($errors->has('phonenumber'))
													  <div class="error" style="color:red">{{ $errors->first('phonenumber') }}</div>
													  @endif
														  <input class="form-control" type="PhoneNumber"  name="phonenumber" id="PhoneNumber" placeholder="Please Enter your Phone Number" >
														</div>
                                                    </div>
                                                    
												<div class="form-group">
													<label for="Education" class="col-sm-2 control-label">Date Of Birth :</label>
													
													<div class="col-sm-10">
													@if ($errors->has('dob'))
													  <div class="error" style="color:red">{{ $errors->first('dob') }}</div>
													  @endif
														<div class='input-group date' id='datetimepicker1'>
														<input type='text' class="form-control" name="dob"/>
														<span class="input-group-addon">
														<span class="glyphicon glyphicon-calendar"></span>
													</span>
													</div>
													</div>
												</div>
											<div class="form-group">
													<label for="Education" class="col-sm-2 control-label">City :</label>
														<div class="col-sm-10" >
														<select class="basic js-states form-control" type="city"  name="city"  id="city" >
																<optgroup label="city">
																	<option value="Mumbai">Mumbai</option>
																	<option value="Surat">Surat</option>
																	<option value="Pune">Pune</option>
																	<option value="Vadodara">Vadodra</option>
																	<option value="Rajkot">Rajkot</option>
																</optgroup>
													</select>
												</div>
											</div>
											<div class="form-group">
													<label for="Education" class="col-sm-2 control-label">Services :</label>
														<div class="col-sm-10" >
														<select class="basic js-states form-control" type="service"  name="service">
																<optgroup label="city">
																	<option value="1">Software House</option>
																	<option value="2">Cleaning Services</option>
																</optgroup>
													</select>
												</div>
											</div>
												<div class="form-group">
													<div class="col-sm-offset-2 col-sm-10">
															<button type="submit" class="btn btn-md btn-theme">Save</button>
													</div>
												</div>
											</form>
										</div>
									</div>
                                </div>
							</div>
						</div>
					
					</div>

</div>

@endsection
