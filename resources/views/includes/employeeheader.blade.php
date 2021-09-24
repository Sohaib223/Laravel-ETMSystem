	<!-- Main Page wrapper -->

	<header class="header">
		<div class="navbar navbar-lg no-margin">
					<div class="nav-block">
						<div class="logo inline-block">
							<a href="#" class="btn menu-toggle pull-left"><i class="fa fa-th" aria-hidden="true"></i></a>
						</div>
						<div class="pull-right">
							<!-- Notification -->
							@php $notification = \App\Notification::select('notifications.Title_2','notifications.id','notifications.Description')->join('users','users.id', '=', 'notifications.Employee_id')->where('notifications.Employee_id' ,'=', Auth::user()->id)->get(); @endphp
							<div class="nav-menu-list dropdown dropdown-animating">
								<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
									<span class="label label-success notice-label">{{$notification->count()}}</span>
									<i class="fa fa-bell-o"></i>
								</a>
							
								<div class="dropdown-menu dropdown-menu-right notification-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
									<div class="header"><span>You have {{$notification->count()}} notification</span></div>
									<ul class="notification-scrollbar list-block">
									
									@foreach($notification as $row)
									<li><a href="GetNotificationDeatils/{{ $row->id }}"><span class="text-info"><i class="fa fa-address-card"></i><span>{{$row->Title_2}}</span></span></a></li>
									@endforeach
									
									</ul>
									<div class="navbar-footer"><span>View all</span></div>
								</div>
							</div>
							<!-- Nav profile -->
							@csrf
							<div class="nav-menu-list dropdown dropdown-animating nav-profile">
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
						<i class="fa fa-dashboard menu-icon" aria-hidden="true"></i>Employee Dashboards
					</a>
				</li>

				<li>
					<a href="javascript:;" class="list-link">
						<i class="menu-icon" aria-hidden="true"></i>
						<i class="fa fa-angle-right pull-right arrow"></i>Duties
					</a>
					<ul class="sub-menu">
						<li class="sub-list"><a href="/Duties-Details"><i class="fa fa-circle-o list-icon"></i><span>Duties Details</span></a></li>
						<li class="sub-list"><a href="#"><i class="fa fa-circle-o list-icon"></i><span>Pending Duties</span></a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="list-link">
						<i class="menu-icon" aria-hidden="true"></i>Leave Management
						<i class="fa fa-angle-right pull-right arrow"></i>
					</a>
					<ul class="sub-menu">
						<li class="sub-list"><a href="/Employee-Leave"><i class="fa fa-circle-o list-icon"></i><span>Leave List</span></a></li>
						<li class="sub-list"><a href="/Create-Leave"><i class="fa fa-circle-o list-icon"></i><span>Create Leave</span></a></li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="list-link">
						<i class="menu-icon" aria-hidden="true"></i>Notification

						<i class="fa fa-angle-right pull-right arrow"></i>
					</a>
					<ul class="sub-menu">
						<li class="sub-list"><a href="/Employee-Notification"><i class="fa fa-circle-o list-icon"></i><span>Notification List</span></a></li>
						<li class="sub-list"><a href="/Employee-Create-Notification"><i class="fa fa-circle-o list-icon"></i><span>Create Notification</span></a></li>
					</ul>
				</li>
				<li>
					<a href="/EmployeeReporting" class="list-link">
					<i class="menu-icon" aria-hidden="true"></i>Reporting
				</a>
				</li>

		</ul>
	</div>
	


			<!-- Main wrapper -->
			<div class="main-wrapper bg-lg page-animated">

            @yield('content')

			</div>

