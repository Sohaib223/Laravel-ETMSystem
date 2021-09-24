@extends('layouts.employee')
@section('content')
<div class="profile">
<div class="row">
	    <div class="col-md-12 no-padding">
								<div class="section breadcrumb-page-title padding-lg">
									<div class="section-body">
										<div class="row">
											<div class="col-md-6 hidden-sm hidden-xs">
												<ul class="breadcrumb bg-white text-left no-margin padding-t-sm">
													<li><a href="index-2.html" class="text-mg"><i class="fa fa-home fa-lg"></i></a></li>
													<li><a href="#" class="text-mg">Duties</a></li>
													<li class="active text-dg">Duties List</li>
												</ul>
											</div>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<h5 class="text-right no-margin text-italic text-normal font-12">E.T.M.S</h5>
												<h1 class="text-right no-margin"><i class="fa fa-users" aria-hidden="true"></i>Duties List</h1>
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
												<li class="active"><a href="#Activity" data-toggle="pill"> Duties List</a></li>
												<li><a href="CreateDuties.html">Create Duties</a></li>
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
											<form class="form-horizontal validate-form" action="{{url('/AssignDuties') }}" method="POST">

											@csrf					
												<div class="form-group">
													<label for="Education" class="col-sm-2 control-label">Employee Name :</label>
														<div class="col-sm-10" >
													
													
															<select class="multiple-placeholder js-states form-control" multiple="" type="text"  name="employeename[]">			
															<option value="" >Select Employe Name</option>	
																    <option value="" ></option>
														</select>
													</div>
												</div>
												<div class="form-group">
																<label for="inputphone" class="col-sm-2 control-label">Client Name:</label>
															<div class="col-sm-10">
															@if ($errors->has(''))
															<div class="error" style="color:red">{{ $errors->first('') }}</div>
															@endif
														
														<select class="basic js-states form-control client_id" type="text"  name="cname">
															<option value="">Select Client Name</option>
															<option value=""></option>
															
														</select>
														</div>
																</div>
																<div class="form-group">
																				<label for="skill" class="col-sm-2 control-label">Client Address :</label>
															<div class="col-sm-10">
															@if ($errors->has(''))
															<div class="error" style="color:red">{{ $errors->first('') }}</div>
															@endif
													  <textarea class="form-control" type="text"  name="caddress" id="CAdress" placeholder="Please Enter your client address" ></textarea>
													</div>
												</div>
												<div class="form-group">
																<label for="inputphone" class="col-sm-2 control-label">Client Cell :</label>
															<div class="col-sm-10">
															@if ($errors->has(''))
															<div class="error" style="color:red">{{ $errors->first('') }}</div>
															@endif
													  <input class="form-control" type="tel"  name="cphone" id="CCell" placeholder="Please Enter your client cell" >
													</div>
												</div>
												<div class="form-group">
													<label for="Education" class="col-sm-2 control-label">From</label>
													<div class="col-sm-10">
													@if ($errors->has(''))
															<div class="error" style="color:red">{{ $errors->first('') }}</div>
															@endif
														<input class="form-control daterange" type="text" name="daterange" />
														
													</div>
												</div>
												<div class="form-group">
												
												</div>
												<div class="form-group">
															<label for="inputphone" class="col-sm-2 control-label">Task :</label>
															<div class="col-sm-10">
															@if ($errors->has(''))
															<div class="error" style="color:red">{{ $errors->first('task') }}</div>
															@endif
											  			<input class="date form-control" type="text"  name="task" id="Task" placeholder="Please enter employee task" >
													</div>
												</div>
												<div class="form-group">
													<label for="Education" class="col-sm-2 control-label">Status :</label>
														<div class="col-sm-10" >
														@if ($errors->has(''))
															<div class="error" style="color:red">{{ $errors->first('status') }}</div>
															@endif
															<select class="form-control" type="status"  name="status" id="status" >
																
																			<option value="" >Select Duties Status</option>
																			<option value="OnGoing">Ongoing</option>
																			<option value="Pending">Pending</option>
																			<option value="Completed">Completed</option>
															
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
					</div>
</div>
<script>

</script>
@endsection
