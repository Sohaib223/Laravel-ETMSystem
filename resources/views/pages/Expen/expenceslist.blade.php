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
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="tab-content">
                                    <div id="Activity" class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="section">
													<div class="section-body activity">
															<div class="section-header">
																	<h5 class="inline-block">Duties List</h5>

																<div class="input-group pull-right margin-t-xs" style="width: 40%;margin-top: 0%;">
																			<input class="form-control" type="text" placeholder="Search">
																			<span class="input-group-btn">
																				<button class="btn btn btn-theme" type="button">
																					<i class="fa fa-search"></i>
																					Search
																				</button>
																			</span>
																			<div class="pull-right margin-t-xs">
																					<a href="javascript:;" class="text-dg padding-xs" data-toggle="collapse" data-target=".user-detail"><i class="fa fa-angle-down"></i></a>
																				</div>
																</div>	
																		
															</div>
														<div class="section-body collapse in user-detail">	
														<div class="table-responsive">
															<table class="table userlist-table">
																<thead>
																	<tr>
																		<th class="col-md-3">Title</th>
																		<th class="col-md-5">Decs</th>
																		<th class="col-md-3">Amount</th>
																		<th class="col-md-3"><span class="pull-right">Action</span></th>
																	</tr> 
																</thead>
																<tbody>
																@foreach($expences as $row)
																<tr>
																		<td>{{$row->title}}</td>
																		<td>{{$row->decs}}</td>
																		<td>{{$row->amount}}</td>
																			<div class="pull-right">
																			<td>
																				<div class="pull-right">
																					<a href="Editedexpences/{{ $row->id }}" class="btn btn-default text-mg btn-xs margin-b-xs" title="Edit"><i class="fa fa-pencil fa-lg"></i></a>
																					<a href="DeleteExpence/{{ $row->id }}"  onclick="return myFunction();" class="btn btn-default text-mg btn-xs margin-b-xs" title="Delete"><i class="fa fa-trash-o fa-lg"></i></a>
																				</div>
																			</td>
                                                                            </div>
																	</tr>
																@endforeach	
																</tbody>
															</table>
														</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="btn-group pull-right">
																	<button class="btn btn-default" type="button">
																		<i class="fa fa-chevron-left" aria-hidden="true"></i>
																	</button>
																	<button class="btn btn-theme active" type="button">1</button>
																	<button class="btn btn-default" type="button">2</button>
																	<button class="btn btn-default" type="button">
																		<i class="fa fa-chevron-right" aria-hidden="true"></i>
																	</button>
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
				
</div>

@endsection
