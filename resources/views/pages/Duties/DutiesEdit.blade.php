@extends('layouts.master')
@section('content')
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
                                            <li class="active"><a href="/EmployeeDetails" data-toggle="pill">Employee List</a></li>
                                            <li><a href="/EmployeeCreate">Create Employee</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                                <div class="tab-content">
                                    <div id="Activity" class="tab-pane fade in active">
										
											<div class="modal-dialog modal-lg" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
														<h4 class="modal-title">Edite Duties Details</h4>
													</div>
                                                    <div class="modal-body">
                                                        <form action="/UpdateDuties/{{$duties->id}}" method="post">
                                                            @csrf

                                                            <div class="form-group">
                                                                <label for="recipient-name1" class="form-control-label">ID:</label>
                                                                <input type="text" value="{{$duties->id}}"class="form-control" id="recipient-name1">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name1" class="form-control-label">Employee id:</label>
                                                                <input type="text" name="eid" value="{{$duties->Employee_id}}" class="form-control" id="recipient-name1">
                                                            </div>
                                                            <div class="form-group">
                                                                    <label for="recipient-name1" class="form-control-label">Employee Name:</label>
                                                                    <input type="text" name="ename" value="{{$duties->Employee_Name}}" class="form-control" id="recipient-name1">
                                                                </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name1" class="form-control-label">Employee Cell:</label>
                                                                <input type="text" name="ecell" value="{{$duties->Employee_PhoneNo}}" class="form-control" id="recipient-name1">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name1" class="form-control-label">Task:</label>
                                                                <input type="text" name="task" value="{{$duties->Task}}" class="form-control" id="recipient-name1">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name1" class="form-control-label">Date From To Till: :</label>
                                                                <input class="form-control" type="text" name="daterange" value="01/06/2019 - 01/06/2019 " />
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"  class="btn btn-default" value="/EmployeeDetails" data-dismiss="modal">Close</button>
                                                                <button type="submit" value="update" class="btn btn-theme">OK</button>
                                                            </div>
                                                        </form>
                                                    </div>
													
												</div>
											</div>
										</div>
                                    </div>
                                </div>
                            
                </div>
@endsection
