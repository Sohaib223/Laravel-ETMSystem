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
											<form class="form-horizontal validate-form" action="UpdateDutiesStatus/{{$duties->id}}" method="POST">
											@csrf
											<div class="form-group">
												<label for="skill" class="col-sm-2 control-label">Employee Name :</label>
												    <div class="col-sm-10">
													<input type="text" name="employee-name" value="{{$duties->Employee_Name}}" class="form-control" readonly >
												</div>
											</div>
                                            <div class="form-group">
												<label for="skill" class="col-sm-2 control-label">Task :</label>
												    <div class="col-sm-10">
													<input type="text" name="task" value="{{$duties->Task}}" class="form-control" readonly>
												</div>
											</div>
                                            <div class="form-group">
												<label for="skill" class="col-sm-2 control-label">Progress :</label>
												    <div class="col-sm-10">
													<input type="text" name="progress" value="{{$duties->progress}}" class="form-control">
												</div>
											</div>
                                            <div class="form-group">
														<label for="Education" class="col-sm-2 control-label">Status :</label>
															<div class="col-sm-10">
															@if ($errors->has('status'))
															<div class="error" style="color:red">{{ $errors->first('status') }}</div>
															@endif	
																<select class="basic js-states form-control" type="city"   name="status">
																	<option value="{{$duties->status}}">{{$duties->status}}</option>
																	<option value="Complete">Complete</option>
																	<option value="In Progress">In Progress</option>
															</select>
														</div>
													</div>
											<div class="form-group">
												<div class="col-sm-offset-2 col-sm-10">
													<button type="submit" class="btn btn-md btn-theme" style="width:110px">Update</button>
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

@endsection
