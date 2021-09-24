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
                                                <li><a href="#" class="text-mg">Employee</a></li>
                                                <li class="active text-dg">Employee List</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <h5 class="text-right no-margin text-italic text-normal font-12">E.T.M.S</h5>
                                            <h1 class="text-right no-margin"><i class="fa fa-users" aria-hidden="true"></i> Employee List</h1>
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
                                            <li class="active"><a data-toggle="pill">Employee List</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="row">
					<div class="col-md-12">
						<div class="section">
							<div class="section-header">
								<h5>Notification Detail</h5>
							</div>
							<div class="section-body">
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<td><b>Subject:</b></td>
												<td><b>{{$notification->Title_2 }}</b> <a><i class="fa fa-pencil text-mg pull-right" aria-hidden="true"></i></a></td>
											</tr>
											<tr>
												<td><b>Assignee:</b></td>
												<td>
													<a>{{$notification->Employee_Name}}</a> <a href="javascript:;"><i class="fa fa-pencil text-mg pull-right" aria-hidden="true"></i></a>
												</td>
											</tr>
											<tr>
												<td><b>Update:</b></td>
												<td>{{$notification->Created_Date}}<a href="javascript:;"><i class="fa fa-pencil text-mg pull-right" aria-hidden="true"></i></a></td>
											</tr>
                                            <tr>
												<td><b>Detail:</b></td>
												<td><p>{{$notification->Description}}</p></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
</div>
</div>		
@endsection
