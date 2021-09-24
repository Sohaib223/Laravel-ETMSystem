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
						<br>
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="material-card material-card-click theme">
							<h2>
								<span>{{$employee->name}}</span>
								<strong>
									<i class="fa fa-fw fa-star"></i>
									UX/UI Developer
								</strong>
							</h2>
							<div class="mc-content">
								<div class="img-container">
									<img class="img-responsive" src="assets/images/profile/profile-cover.jpg" alt="">
								</div>
								<div class="mc-description padding-l-r">
									Department : {{$employee->department}}
									<br>
									<br>
									<p id="salary">Salary : <label id="slry">{{$employee->salary}}</label></p>
									<br>
									<br>
									Date of joining : {{$employee->created_at}} 
								</div>
							</div>
							<a class="mc-btn-action">
								<i class="fa fa-bars"></i>
							</a>
							<div class="mc-footer text-center">	
								<a href="javascript:;" class="fa fa-lg fa-facebook"></a>
								<a href="javascript:;" class="fa fa-lg fa-twitter"></a>
								<a href="javascript:;" class="fa fa-lg fa-linkedin"></a>
								<a href="javascript:;" class="fa fa-lg fa-google-plus"></a>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-10 col-xs-10">
						<div class="section">
							<div class="section-body">
								<div class="panel panel-primary disable-control" style="border-color:#ED174C">
									<div class="panel-heading" style="background-color:#ED174C">
										<div class="panel-title">
												Make Payment	
										</div>
									</div>
									<form id="add_a_d" enctype="multipart/form-data">
									@csrf
										<div class="panel-body">
											<div class="row margin-b-sm">
												<div class="col-md-12 col-sm-12 col-xs-12">
												@if ($errors->has('selectmonth'))
													  <div class="error" style="color:red">{{ $errors->first('selectmonth') }}</div>
													  @endif
													<p class="no-margin">Month</p>
													<select class="multiple-placeholder js-states form-control" name="selectmonth">
															<option value="January">January</option>
															<option value="February">February</option>
															<option value="March">March</option>
															<option value="April">April</option>
															<option value="May">May</option>
															<option value="June">June</option>
															<option value="July">July</option>
															<option value="August">August</option>
															<option value="September">September</option>
															<option value="October">October</option>
															<option value="November">November</option>
															<option value="December">December</option>
													</select>
												</div>
											</div>
											<div class="row margin-b-sm">
												<div class="col-md-12 col-sm-12 col-xs-12">
												@if ($errors->has('selectyear'))<div class="error" style="color:red">{{ $errors->first('selectyear') }}</div>@endif
													<p class="no-margin">Year</p>
													<select class="multiple-placeholder js-states form-control" name="selectyear" >
															<option value="2019">2019</option>
															<option value="2020">2020</option>
															<option value="2021">2021</option>
															<option value="2022">2022</option>
															<option value="2023">2023</option>
															<option value="2024">2024</option>
															<option value="2025">2025</option>
													</select>
												</div>
											</div>
											<div class="row margin-b-sm">
												<div class="col-md-12 col-sm-12 col-xs-12">
												@if ($errors->has('total_allowances'))<div class="error" style="color:red">{{ $errors->first('total_allowances') }}</div>@endif
													<p class="no-margin">Allowances :  <u id="opt_Allowances"></u> <input type="text" id="t_allowances"  name="total_allowances" style="visibility: hidden"/></p>
													@if ($errors->has('total_dections'))<div class="error" style="color:red">{{ $errors->first('total_dections') }}</div>@endif
													<p class="no-margin">Deductions : <u id="price"></u> <input type="text" id="t_dections"  name="total_dections" style="visibility: hidden"/> </p>
													@if ($errors->has('total_salary'))<div class="error" style="color:red">{{ $errors->first('total_salary') }}</div>@endif
													<p class="no-margin">Total : <u id="total"></u> <input type="text" id="t_salary"  name="total_salary" style="visibility: hidden"/></p>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-4 col-xs-6" style=" margin-left: 30px;;">
												<input type="button" onclick="myTotal()" value="Make Payment" style="width: 310%;" class="btn btn-theme btn-rounded margin-b-xs col-md-12 " />
											</div>
										</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-10 col-xs-10">
						<div class="section">
							<div class="section-body">
								<div class="panel panel-primary disable-control" style="border-color:#ED174C">
									<div class="panel-heading" style="background-color:#ED174C">
										<div class="panel-title">
										Salary Allowances & Deductions
										</div>
									</div>
									<div class="panel-body">
										<span id="form_output"></span>
											<div class="row margin-b-sm">
											@if ($errors->has('get_allowances'))<div class="error" style="color:red">{{ $errors->first('get_allowances') }}</div>@endif
												<div class="col-md-12 col-sm-12 col-xs-12">
													<p class="no-margin">Allowances</p>
													<select class="multiple-placeholder js-states form-control" multiple="" type="text"  name="get_allowances[]" id="Allowances_Price">			
															<option value="Vehicle" data-price="150">Vehicle</option>
															<option value="Home" data-price="200">Home</option>
														</select>
													
												</div>
											</div>
											<div class="row margin-b-sm">
											@if ($errors->has('deductions'))<div class="error" style="color:red">{{ $errors->first('deductions') }}</div>@endif
												<div class="col-md-12 col-sm-12 col-xs-12">
													<p class="no-margin">Deductions</p>
													<select class="multiple-placeholder js-states form-control"  name="deduction[]" id="Deductions_Price" multiple="">
															<option value="GP Funds" data-price="50"> GP Funds</option>
													</select>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-4 col-xs-6" style=" margin-left: 30px;;">
												<button class="btn btn-theme btn-rounded margin-b-xs col-md-12 " style="width: 310%;"> Submit </button>
												<input type="text" name="eid" value="{{$employee->id}}" style="visibility: hidden"/>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section">
							<div class="section-body">
								<div id="lobipanel-nested-example">
								    <div class="bs-example">
								        <div class="panel panel-primary lobipanel">
								            <div class="panel-heading">
								                <div class="panel-title">
								                    <h4>Employee Payment History</h4>
								                </div>
								            </div>
								            <div class="panel-body">
											<div class="row">
								                    <div class="col-lg-6">
								                        <div class="panel panel-default lobipanel" data-sortable="true">
								                            <div class="panel-heading">
								                                <div class="panel-title">
								                                    <h4>Allowances</h4>
								                                </div>
								                            </div>
								                            <div class="panel-body">
															@php $allowances = \App\Allowances::select('allowances.allowance','allowances.deductions')->join('users','users.id', '=', 'allowances.eid')->where('allowances.eid' ,'=', $employee->id)->get(); @endphp
                                                               @foreach($allowances as $row)
																<tr>
																	<td>{{$row->allowance}}</td>
																</tr>
																@endforeach
								                            </div>
								                        </div>
								                    </div>
								                    <div class="col-lg-6">
								                        <div class="panel panel-default lobipanel" data-sortable="true">
								                            <div class="panel-heading">
								                                <div class="panel-title">
								                                    <h4>Deductions</h4>
								                                </div>
								                            </div>
								                            <div class="panel-body">
																@php $allowances = \App\Allowances::select('allowances.deductions')->join('users','users.id', '=', 'allowances.eid')->where('allowances.eid' ,'=', $employee->id)->get(); @endphp
                                                               	@foreach($allowances as $row)
																<tr>
																	<td>{{$row->deductions}}</td>
																</tr>
																@endforeach
								                            </div>
								                        </div>
								                    </div>
								                </div>
								                <div class="panel panel-success lobipanel">
								                    <div class="panel-heading">
								                        <div class="panel-title">
								                            <h4>Payment History</h4>
								                        </div>
								                    </div>
								                    <div class="panel-body">
													@php $allowances = \App\Allowances::select('allowances.month','allowances.year','allowances.salary')->join('users','users.id', '=', 'allowances.eid')->where('allowances.eid' ,'=', $employee->id)->get(); @endphp
                                                               	@foreach($allowances as $row)
																<tr>
																	<td>{{$row->month}}</td>
																	<td>{{$row->year}}</td>
																	<td>{{$row->salary}}</td>
																		<td>
																			<div class="pull-right">
																				<a href="MakePayroll/{{$row->id}}" class="btn btn-default text-mg btn-xs margin-b-xs" title="Make Payment"><i class="fa fa-pencil fa-lg"></i></a>
																			</div>
																		</td>
																</tr>
																@endforeach
								                    </div>
								                </div>
								            </div>
								        </div>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){

	  $('#add_a_d').on('submit', function(e)
	  {
		  e.preventDefault();
		  $.ajax({
			type: "POST",
			url: "/addpayroll",
			data: $('#add_a_d').serialize(),
			success: function(response) {
				console.log(response)
				alert("Data Saved");
			},
			error: function(error){
				console.log(error)
				alert("Data Not Saved");
			}
		  });
	  });
  });
	$(document).ready(function() {
	$('#Allowances_Price').on('change', function() {
		$('#opt_Allowances').html(valueFUnction());
	});
	});

	function valueFUnction(quan) {
	var $selection = $('#Allowances_Price').find(':selected');
	var total = 0;
	$selection.each(function() {
		total += $(this).data('price');
		})
	return total;
	}

	$(document).ready(function() {
	$('#Deductions_Price').on('change', function() {
		$('#price').html(valueFUnction1());
	});
	});
	function valueFUnction1(quan1) {
	var $selection1 = $('#Deductions_Price').find(':selected');
	var deductionsprice1 = $('#Deductions_Price').val();
	var total1 = 0;
	$selection1.each(function() {
	total1 += $(this).data('price');
	})
	return total1;
	}
	
	function myTotal() {
		var s = document.getElementById("slry").innerHTML;
		var a = document.getElementById("opt_Allowances").innerHTML;
		var d = document.getElementById("price").innerHTML;
	
		var total;
		total =  (eval(s) + eval(a)) - eval(d);
		document.getElementById("total").innerHTML=total;
		document.getElementById("t_salary").value = total;
		document.getElementById("t_allowances").value = a;
		document.getElementById("t_dections").value = d;
  }

</script>






@endsection
