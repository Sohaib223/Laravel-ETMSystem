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
                                                <li><a href="Notification.html" class="text-mg">Notification List</a></li>
                                                <li class="active text-dg">Create Notification</li>
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
                                            <li class="active"><a href="#Activity" data-toggle="pill">Create Notification</a></li>
                                            <li><a href="Notification.html">Notification List</a></li>
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
												<form class="form-horizontal validate-form" action="/create" method="post">
												@csrf
												<div class="form-group">
													<label for="Education" class="col-sm-2 control-label">Select Employee:</label>
														<div class="col-sm-10" >
														@if ($errors->has('empname'))
															<div class="error" style="color:red">{{ $errors->first('empname') }}</div>
															@endif	
														<select class="basic js-states form-control emp_id"  name="empname[]" multiple="" id="multiple">
															<option value="" >Select Employee Name</option>					
																@foreach($employee as $item)
																    <option value="{{$item->id}}" >{{$item->name}}</option>
																@endforeach
													</select>
												</div>
											</div>
													
												
													<div class="form-group">
																	<label for="inputEmail" class="col-sm-2 control-label">Description</label>
																<div class="col-sm-10">
																@if ($errors->has('description'))
															<div class="error" style="color:red">{{ $errors->first('description') }}</div>
															@endif
															<input class="form-control" type="text" id="description" name="description" placeholder="What To Notify">
														</div>
													</div>
													<div class="form-group">
																	<label for="inputpassword" class="col-sm-2 control-label">Notification Titile :</label>
																<div class="col-sm-10">
																@if ($errors->has('title'))
															<div class="error" style="color:red">{{ $errors->first('title') }}</div>
															@endif
															  <input type="text" class="form-control" id="title" name="title" placeholder="Please enter title">
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
<script>
$(function(){
	$('.emp_id').change(function(){
		
		var empid = $(this).val();

		$.ajax({
			url : "{{url('/get_emp_info')}}",
			type : 'GET',
			data : {
				emp_id : empid
			},
			dataType: 'json',
			success : function (response) {
				console.log(response);
				
			}
		});
	});
});
</script>
@endsection
