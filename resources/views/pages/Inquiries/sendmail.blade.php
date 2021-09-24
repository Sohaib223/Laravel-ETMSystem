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
                                                <li class="active text-dg">Send Email</li>
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
		<div class="mail">	
				<div class="compose col-md-12 col-sm-12 col-xs-12 margin-t">
							<div class="compose-mail">
								<div class="header height-50">
									<div class="name"><span>New Message</span></div>
									<div class="action pull-right">
										<a href="javascript:;" class="compose-mail-close text-mg"><i class="fa fa-times"></i></a>
									</div>
								</div>
								<div class="compose-message">
									<div class="mail-option">
										<div class="form-group">
											<select id="selectize-mail" class="selectize-email col-md-10 col-sm-10 col-xs-8 no-padding-l"></select>
											<div class="col-md-2 col-sm-2 col-xs-4 no-padding">
											</div>
										</div>
									</div>
									<div class="mail-option">
										<div class="form-group">
											<input type="text" value="{{$inquirie->title}}"  class="form-control" placeholder="Subject" />
										</div>
									</div>
									<div class="mail-option">
										<div class="form-group">
											<div class="heading">
												<span>Message</span>
												<span class="btn button-theme tool" id="mail-tool">Format</span>
											</div>
										</div>
									</div>
									<div class="message" id="mail-editor-scroll">
										<div id="mail-editor"></div>
									</div>
								</div>
								<div class="mail-footer height-50">
									<div class="pull-right right-block">
										<button type="button" class="btn btn-primary send" style="background-color:#ED174C;border-color:#ED174C">Send</button>
									</div>
								</div>
							</div>
			</div>
		</div>
	</div>
</div>
@endsection