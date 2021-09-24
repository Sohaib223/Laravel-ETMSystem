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
											<form class="form-horizontal validate-form" action="/CreateNotify" method="POST">
											@csrf
                                            <div class="form-group">
												<label for="skill" class="col-sm-2 control-label">Title :</label>
												    <div class="col-sm-10">
													<input type="text" name="title" class="form-control" placeholder="Please Enter Title">
												</div>
											</div>
                                            <div class="form-group">
												<label for="skill" class="col-sm-2 control-label">Description :</label>
												    <div class="col-sm-10">
													<textarea class="form-control" type="text"  name="description" placeholder="What To Notify" ></textarea>
												</div>
											</div>
											<div class="form-group" style="visibility: hidden;">
												<label for="skill" class="col-sm-2 control-label">Employee Name :</label>
												    <div class="col-sm-10">
													<input type="text" name="employeeid" value=" {{Auth::user()->id}}" class="form-control">
													<input type="text" name="employeename" value=" {{Auth::user()->name}}" class="form-control">
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

@endsection
