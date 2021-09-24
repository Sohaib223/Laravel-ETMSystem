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
                                                <li><a href="#" class="text-mg">Inquiries</a></li>
                                                <li class="active text-dg">Inquiries List</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <h5 class="text-right no-margin text-italic text-normal font-12">E.T.M.S</h5>
                                            <h1 class="text-right no-margin"><i class="fa fa-users" aria-hidden="true"></i> Inquiries List</h1>
                                        </div>
                                    </div>
                </div>
        	</div>
		</div>
		<div class="row mail" id="mail-inbox">	
				<div class="col-md-12" id="inbox-block">
							<div class="section">
								<div class="section-body no-padding">
										<div class="section-header">
										<h5 class="inline-block">Inquiries List</h5>
										<div class="input-group pull-right margin-t-xs" style="width: 40%;">
											<div class="has-feedback pull-right search">
												<input type="text" class="form-control input-sm margin-b-xs" placeholder="Search Mail">
												<span class="fa fa-search form-control-feedback"></span>
											</div>			
										</div>
									</div>
									<div class="padding-sm">
									</div>
									<div class="table-responsive">
										<table class="table table-hover no-margin userlist-table">
											<thead>
												<tr>
													<th class="col-md-1"> Name</th>
													<th class="col-md-1">Address</th>
													<th class="col-md-1">Email</th>
													<th class="col-md-1">Phone Number</th>
													<th class="col-md-1">Title</th>
													<th class="col-md-1">Description</th>
												</tr>
											</thead>
											<tbody>
											@foreach($Inquirie as $row)
											<tr>		
											<td>{{$row->name}}</td>
											<td>{{$row->address}}</td>
											<td>{{$row->email}}</td>
											<td>{{$row->phoneno}}</td>
											<td>{{$row->title}}</td>
											<td>{{$row->description}}</td>
											</tr>
											@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
			</div>
		</div>
	</div>
</div>
@endsection
