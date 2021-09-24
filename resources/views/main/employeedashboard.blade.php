@extends('layouts.employee')
@section('content')

<div class="row social-widgets">
					<div class="col-lg-3 col-md-6 col-sm-6 margin-t-sm font-os-thin social-widgets-box">
						<div class="bg-white text-dg padding-lg" data-count=".num" data-from="0" data-to="6040" data-suffix="0" data-duration="2">
							<i class="fa-4x pull-right" aria-hidden="true"></i>
							<h4 class="num font-os-bold">20000</h4>
							<span>Total Employee</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 margin-t-sm font-os-thin social-widgets-box">
						<div class="bg-white text-dg padding-lg" data-count=".num" data-from="0" data-to="2080" data-suffix="0" data-duration="2">
							<i class="fa-4x pull-right" aria-hidden="true"></i>
							<h4 class="num font-os-bold">20000</h4>
							<span>Total Pending Inquiries</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 margin-t-sm font-os-thin social-widgets-box">
						<div class="bg-white text-dg padding-lg" data-count=".num" data-from="0" data-to="1800" data-suffix="0" data-duration="2">
							<i class="fa-4x pull-right" aria-hidden="true"></i>
							<h4 class="num font-os-bold">20000</h4>
							<span>New Notification</span>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 margin-t-sm font-os-thin social-widgets-box">
						<div class="bg-white text-dg padding-lg" data-count=".num" data-from="0" data-to="3070" data-suffix="0" data-duration="2">
							<i class="fa-4x pull-right" aria-hidden="true"></i>
							<h4 class="num font-os-bold">20000</h4>
							<span>Pending Duties</span>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="section no-margin">
							<div class="section-header">
								<h5 class="inline-block">New Task</h5>
								<div class="pull-right margin-t-xs">
									<a href="javascript:;" class="text-dg padding-xs" data-toggle="collapse" data-target=".user-detail"><i class="fa fa-angle-down"></i></a>
								</div>
							</div>
							@php $duties = \App\duties::where('Employee_id','=', Auth::user()->id)->orderBy('created_at')->paginate(20); @endphp	
							<div class="section-body collapse in user-detail">
								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
											<tr>
												<th class="col-md-1">Employee Name</th>
												<th class="col-md-1">Task</th>
												<th class="col-md-1">Progress</th>
												<th class="col-md-1">Status</th>
												<th class="col-md-1">End Date</th>
											</tr>
										</thead>
										<tbody>
										@foreach($duties as $row)
											<tr>		
											<td>{{$row->Employee_Name}}</td>
											<td>{{$row->Task}}</td>
											<td>{{$row->progress}}</td>
											<td>{{$row->status}}</td>
											<td>{{$row->Till}}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>


   
@endsection
