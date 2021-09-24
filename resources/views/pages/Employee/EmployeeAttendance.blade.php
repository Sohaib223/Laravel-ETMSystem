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
                                                <li><a href="/EmployeeDetails" class="text-mg">Employee List</a></li>
                                                <li class="active text-dg">Create Employee</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <h5 class="text-right no-margin text-italic text-normal font-12">E.T.M.S</h5>
                                            <h1 class="text-right no-margin"><i class="fa fa-users" aria-hidden="true"></i> Create Employee</h1>
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
                                            <li class="active"><a href="/EmployeeCreate" data-toggle="pill">Create Employee</a></li>
                                            <li><a href="/EmployeeDetails">Employee List</a></li>
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
										<div class="section-body">
										<div class="col-sm-12" style="color:green; margin-top:10px; margin-bottom:10px;" >
											<!-- Message -->
                                        @if(Session::has('message'))
                                            <p >{{ Session::get('message') }}</p>
                                        @endif
										</div>
                                            <form class="form-horizontal validate-form" action="/uploadFile" method="post" enctype="multipart/form-data" >
                                            @csrf
                                            
                                            @if( $attendance = \App\Attendance::select()->where('month' ,'!=', \Carbon\Carbon::now()->month) )
                                        
                                                <input type='file' name='file' >
                                                <input type='submit' name='submit' value='Import'>
                                            @endif
                                            </form>
										</div>
									</div>
                                </div>
							</div>
						</div>
					
					</div>

</div>

@endsection
