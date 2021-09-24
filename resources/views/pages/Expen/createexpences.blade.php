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
													<li><a href="index-2.html" class="text-mg"><i class="fa fa-home fa-lg"></i></a></li>
													<li><a href="#" class="text-mg">Expences</a></li>
													<li class="active text-dg">Expences List</li>
												</ul>
											</div>
											<div class="col-md-6 col-sm-12 col-xs-12">
												<h5 class="text-right no-margin text-italic text-normal font-12">E.T.M.S</h5>
												<h1 class="text-right no-margin"><i class="fa fa-users" aria-hidden="true"></i> Add Expences</h1>
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
												<li class="active"><a href="#" data-toggle="pill"> Add Expences</a></li>
												<li><a href="#">Expences List</a></li>
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
											<form class="form-horizontal validate-form" action="{{url('/CreateExpences') }}" method="POST">
											@csrf					
											<div class="form-group">
												<label for="inputphone" class="col-sm-2 control-label">Task :</label>
													<div class="col-sm-10">
														@if ($errors->has('title'))
															<div class="error" style="color:red">{{ $errors->first('title') }}</div>
														@endif
											  			<input class="date form-control" type="text"  name="title" id="Task" placeholder="Please enter title" >
													</div>
											</div>
											<div class="form-group">
												<label for="inputphone" class="col-sm-2 control-label">Description :</label>
													<div class="col-sm-10">
														@if ($errors->has('description'))
															<div class="error" style="color:red">{{ $errors->first('description') }}</div>
														@endif
											  			<input class="date form-control" type="text"  name="description" id="Task" placeholder="Please enter description" >
													</div>
											</div>
											<div class="form-group">
												<label for="inputphone" class="col-sm-2 control-label">Amount :</label>
													<div class="col-sm-10">
														@if ($errors->has('amount'))
															<div class="error" style="color:red">{{ $errors->first('amount') }}</div>
														@endif
														  <input type="number" name="amount" placeholder="Please enter amount" class="form-control margin-b-sm">
													</div>
											</div>
												<div class="form-group">
													<div class="col-sm-offset-2 col-sm-10">
														<button type="submit" class="btn btn-md btn-theme" style="width:110px">Save</button>
													</div>
												</div>
												<div class="col-md-4 col-sm-12 col-xs-12">
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
