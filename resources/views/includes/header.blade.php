	<!-- Main Page wrapper -->

	<header class="header">
		<div class="navbar navbar-lg no-margin">
					<div class="nav-block">
						<div class="logo inline-block">
							<a href="#" class="btn menu-toggle pull-left"><i class="fa fa-th" aria-hidden="true"></i></a>
						</div>
						<div class="pull-right">

							<!-- Notification -->
							@php $notification = \App\notification::where('readonly', '=', 0)->where('Status', '=', 2)->paginate(2000); @endphp							
							<div class="nav-menu-list dropdown dropdown-animating">
								<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
									<span class="label label-success notice-label">{{ $notification->total() }}</span>
									<i class="fa fa-bell-o"></i>
								</a>
							
								<div class="dropdown-menu dropdown-menu-right notification-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
									<div class="header"><span>You have {{ $notification->total() }} notification</span></div>
									<ul class="notification-scrollbar list-block">
									
									@foreach($notification as $row)
									<li><a href="GetNotificationDeatils/{{ $row->id }}"><span class="text-info"><i class="fa fa-address-card"></i><span>{{$row->Title}}</span></span></a></li>
									@endforeach
									
									</ul>
									<div class="navbar-footer"><span>View all</span></div>
								</div>
							</div>
							<!-- Nav profile -->

@csrf							<div class="nav-menu-list dropdown dropdown-animating nav-profile">
								<a href="#" class="dropdown-toggle nav-link no-padding-b hidden-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
									<img class="img-circle avatar avatar-xs" alt="..." src="{{asset('assets/images/portrait/thumbnail.png')}}">    {{ Auth::user()->name }} <b class="caret"></b>
								</a>
								<a href="#" class="dropdown-toggle nav-link no-padding-b visible-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
									<img class="img-circle avatar avatar-xs" alt="..." src="{{asset('assets/images/portrait/thumbnail.png')}}">
								</a>
								<div class="dropdown-menu font-os-thin no-margin no-padding-b" data-dropdown-in="bounceInRight" data-dropdown-out="bounceOutRight">
									<div class="text-center padding-t">
										<div>
											<img class="img-circle avatar avatar-lg" alt="..." src="{{asset('assets/images/portrait/thumbnail.png')}}">
											<h5 class="no-margin-b">{{ Auth::user()->name }}</h5>
											<p>{{ Auth::user()->Title }}</p>
										</div>
										<div>
											<a href="Profile.html" target="_blank" class="btn btn-theme">Profile</a>
											<button class="btn btn-default"></button>
										</div>
										<div class="progress margin-t-b-lg progress-xs no-border-radius">
											<div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-theme">
											</div>
										</div>
									</div>
									<div>
									<a class="col-xs-12 menu-links" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}<span class="glyphicon glyphicon-log-out pull-right"></span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
									</div> 
								</div>
							</div>
						</div>
					</div>
		</div>
	</header>

	<!-- Left Sidebar -->
	<div class="sidebar sidebar-v1">
		<div class="logo inline-block"  style="margin-left: 40px;">
						<a href="/dashboard" style="color: #ED174C;">
							<h2>E.T<img src="{{asset('assets/images/heading-logo.png')}}">M.S</h2>
						</a>
					</div>
			<ul class="list-unstyled sidebar-menu" style="margin-top: 20px;">
				<li>
					<a href="/home" class="list-link active">
						<i class="fa fa-dashboard menu-icon" aria-hidden="true"></i>Dashboards
					</a>
				</li>

				<li>
					<a href="javascript:;" class="list-link">
						<i class="menu-icon" aria-hidden="true"></i>Employee Management
						<i class="fa fa-angle-right pull-right arrow"></i>
					</a>
					<ul class="sub-menu">
						<li class="sub-list"><a href="/EmployeeDetails"><i class="fa fa-circle-o list-icon"></i><span>Employee Details</span></a></li>
						<li class="sub-list"><a href="/EmployeeCreate"><i class="fa fa-circle-o list-icon"></i><span>Create Employee</span></a></li>
						<li class="sub-list"><a href="/EmployeeLeaves"><i class="fa fa-circle-o list-icon"></i><span>Employee Leave</span></a></li>
						<li class="sub-list"><a href="/EmployeeAttendance"><i class="fa fa-circle-o list-icon"></i><span>Employee Attendance</span></a></li>
						<!-- <li class="sub-list"><a href="/EmployeeCreate"><i class="fa fa-circle-o list-icon"></i><span>Employee Availability</span></a></li> -->
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="list-link">
						<i class="menu-icon" aria-hidden="true"></i>Duties
						<i class="fa fa-angle-right pull-right arrow"></i>
					</a>
					<ul class="sub-menu">
						<li class="sub-list"><a href="/DutiesDetails"><i class="fa fa-circle-o list-icon"></i><span>Duties List</span></a></li>
						<li class="sub-list"><a href="/DutiesCreate"><i class="fa fa-circle-o list-icon"></i><span>Create Duties</span></a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="list-link">
						<i class="menu-icon" aria-hidden="true"></i>Company Detail

						<i class="fa fa-angle-right pull-right arrow"></i>
					</a>
					<ul class="sub-menu">
						<li class="sub-list"><a href="/ClientDetials"><i class="fa fa-circle-o list-icon"></i><span>Company List</span></a></li>
						<li class="sub-list"><a href="/CreateClient"><i class="fa fa-circle-o list-icon"></i><span>Create Company</span></a></li>
						<li class="sub-list"><a href="/AssignClientDuties"><i class="fa fa-circle-o list-icon"></i><span>Assign Client Duties</span></a></li>

					</ul>
				</li>
				<li>
					<a href="javascript:;" class="list-link">
						<i class="menu-icon" aria-hidden="true"></i>Notification

						<i class="fa fa-angle-right pull-right arrow"></i>
					</a>
					<ul class="sub-menu">
						<li class="sub-list"><a href="/NotificationDetails"><i class="fa fa-circle-o list-icon"></i><span>Notification List</span></a></li>
						<li class="sub-list"><a href="/NotificationCreate"><i class="fa fa-circle-o list-icon"></i><span>Create Notification</span></a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="list-link">
						<i class="menu-icon" aria-hidden="true"></i>Users

						<i class="fa fa-angle-right pull-right arrow"></i>
					</a>
					<ul class="sub-menu">
						<li class="sub-list"><a href="/UserDetails"><i class="fa fa-circle-o list-icon"></i><span>Users List</span></a></li>
						<li class="sub-list"><a href="/CreateUser"><i class="fa fa-circle-o list-icon"></i><span>Create Users</span></a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="list-link">
						<i class="menu-icon" aria-hidden="true"></i>Inquiries

						<i class="fa fa-angle-right pull-right arrow"></i>
					</a>
					<ul class="sub-menu">
						<li class="sub-list"><a href="/Inquiries"><i class="fa fa-circle-o list-icon"></i><span>Inquiries List</span></a></li>
						<li class="sub-list"><a href="/CreateInquiries"><i class="fa fa-circle-o list-icon"></i><span>Create Inquiries</span></a></li>
					</ul>
				</li>
				<!-- <li>
					<a href="javascript:;" class="list-link">
						<i class="menu-icon" aria-hidden="true"></i>Reporting
						<i class="fa fa-angle-right pull-right arrow"></i>
					</a>
					<ul class="sub-menu">
						 <li class="sub-list"><a href="/Reporting"><i class="fa fa-circle-o list-icon"></i><span>Employee Reports</span></a></li>
						<li class="sub-list"><a href="/CreateInquiries"><i class="fa fa-circle-o list-icon"></i><span>Inquiries Reports</span></a></li>
						<li class="sub-list"><a href="/CreateInquiries"><i class="fa fa-circle-o list-icon"></i><span>Duties Reports</span></a></li>
						<li class="sub-list"><a href="/CreateInquiries"><i class="fa fa-circle-o list-icon"></i><span>Expences Reports</span></a></li> 

					</ul>
				</li> -->
				<li>
					<a href="javascript:;" class="list-link">
						<i class="menu-icon" aria-hidden="true"></i>Expences
						<i class="fa fa-angle-right pull-right arrow"></i>
					</a>
					<ul class="sub-menu">
						<li class="sub-list"><a href="/Expences"><i class="fa fa-circle-o list-icon"></i><span>Expences List</span></a></li>
						<li class="sub-list"><a href="/addexpences"><i class="fa fa-circle-o list-icon"></i><span>Add Expences</span></a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="list-link">
						<i class="menu-icon" aria-hidden="true"></i>Payroll Management
						<i class="fa fa-angle-right pull-right arrow"></i>
					</a>
					<ul class="sub-menu">
						<li class="sub-list"><a href="/payroll"><i class="fa fa-circle-o list-icon"></i><span>Make Payroll</span></a></li>
						 <li class="sub-list"><a href="/createpayroll"><i class="fa fa-circle-o list-icon"></i><span>Allownces</span></a></li>
					<!--	<li class="sub-list"><a href="/Reporting"><i class="fa fa-circle-o list-icon"></i><span>Deductions</span></a></li>
						<li class="sub-list"><a href="/Reporting"><i class="fa fa-circle-o list-icon"></i><span>Payroll History</span></a></li> -->
					</ul>
				</li>
		</ul>
	</div>
	


			<!-- Main wrapper -->
			<div class="main-wrapper bg-lg page-animated">

            @yield('content')

			</div>

