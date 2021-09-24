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
                                                <li><a href="Client.html" class="text-mg">Clients List</a></li>
                                                <li class="active text-dg">Create Clients</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <h5 class="text-right no-margin text-italic text-normal font-12">E.T.M.S</h5>
                                            <h1 class="text-right no-margin"><i class="fa fa-users" aria-hidden="true"></i> Your Custom Panel</h1>
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
                                            <li class="active"><a href="#Activity" data-toggle="pill">Create Clients</a></li>
                                            <li><a href="Client.html">Clients List</a></li>
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
										<div class="col-sm-12" style="color:green; margin-top:10px; margin-bottom:10px;" >
											<center>		
											@if(Session::has('success'))
												{{Session::get('success')}}	
											@endif
											</center>
										</div>
											<div class="section-body">
												<form class="form-horizontal validate-form" action="/create" metho="post">@csrf
													<div class="form-group">
																	<label for="inputEmail" class="col-sm-2 control-label">Client Name :</label>
																<div class="col-sm-10">
																@if ($errors->has('cname'))
															<div class="error" style="color:red">{{ $errors->first('cname') }}</div>
															@endif	
															<input class="form-control" type="text" name="cname" placeholder="Please enter employee name">
														</div>
													</div>
													<div class="form-group">
																	<label for="inputpassword" class="col-sm-2 control-label">Client Address:</label>
																<div class="col-sm-10">
																@if ($errors->has('address'))
															<div class="error" style="color:red">{{ $errors->first('address') }}</div>
															@endif	
															  <input type="text" class="form-control" name="address" placeholder="Please enter employee cell number">
														</div>
													</div>
													<div class="form-group">
																	<label for="inputphone" class="col-sm-2 control-label">Phone Number:</label>
																<div class="col-sm-10">
																@if ($errors->has('pnumber'))
															<div class="error" style="color:red">{{ $errors->first('pnumber') }}</div>
															@endif	
															<input class="form-control" type="text"  name="pnumber" placeholder="Please Enter client name"  >
														 </div>
													</div>
													<div class="form-group">
																	<label for="skill" class="col-sm-2 control-label">Company Name:</label>
																<div class="col-sm-10">
																@if ($errors->has('coname'))
															<div class="error" style="color:red">{{ $errors->first('coname') }}</div>
															@endif	
														  <textarea class="form-control" type="text"  name="coname" placeholder="Please Enter your client address" ></textarea>
														</div>
													</div>
													<div class="form-group">
													<label for="Education" class="col-sm-2 control-label">From</label>
													<div class="col-sm-10">
													@if ($errors->has('daterange'))
															<div class="error" style="color:red">{{ $errors->first('daterange') }}</div>
															@endif	
														<div class='input-group date' id='datetimepicker1'>
														<span class="input-group-addon">
															<span class="glyphicon glyphicon-calendar"></span>
														</span>
														<input  type="date" class="form-control" type="DOB"  name="daterange" id="DOB"  />
															
														</div>
													</div>
												</div>
													<div class="form-group">
														<label for="Education" class="col-sm-2 control-label">Status :</label>
															<div class="col-sm-10">
															@if ($errors->has('status'))
															<div class="error" style="color:red">{{ $errors->first('status') }}</div>
															@endif	
																<select class="basic js-states form-control"type="city"  name="status">
																	
																				<option value="">Select Status</option>
																				<option>Enable</option>
																				<option >Disable</option>
																
															</select>
														</div>
													</div>
													<div class="form-group">
														<div class="col-sm-offset-2 col-sm-10">
														
															<button type="submit" class="btn btn-md btn-theme" style="width:110px">Save</button>
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
