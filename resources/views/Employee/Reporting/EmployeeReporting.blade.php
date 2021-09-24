@extends('layouts.employee')
@section('content')
<style>
table.dataTable thead th {
border-bottom: 0;
}

table.dataTable.no-footer{
border-bottom:0px;
}
.dataTables_wrapper .dataTables_filter input{
  height: 30px;
  padding-left: 4px;
  font-size: 1.4rem;
  border: 1px solid #D0CFCE;
  outline: none;
  &:focus{
    border: 1px solid #008ABF;
    transition: 0.35s ease;
    color: #008ABF;
    &::-webkit-input-placeholder{
      transition: opacity 0.45s ease; 
  	  opacity: 0;
     }
    &::-moz-placeholder {
      transition: opacity 0.45s ease; 
  	  opacity: 0;
     }
    &:-ms-placeholder {
     transition: opacity 0.45s ease; 
  	 opacity: 0;
     }    
   }
}
</style>
<div class="profile">
<div class="row">
                        <div class="col-md-12 no-padding">
                            <div class="section breadcrumb-page-title padding-lg">
                                <div class="section-body">
                                    <div class="row">
                                        <div class="col-md-6 hidden-sm hidden-xs">
                                            <ul class="breadcrumb bg-white text-left no-margin padding-t-sm">
                                                <li><a href="index-2.html" class="text-mg"><i class="fa fa-home fa-lg"></i></a></li>
                                                <li><a href="#" class="text-mg">Reporting</a></li>
                                                <li class="active text-dg">Report</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <h5 class="text-right no-margin text-italic text-normal font-12">E.T.M.S</h5>
                                            <h1 class="text-right no-margin"><i class="fa fa-users" aria-hidden="true"></i> Reporting </h1>
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
                                            <li class="active"><a href="#Activity" data-toggle="pill">Reports</a></li>

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
																	<h5 class="inline-block">Employee  Reporting</h5>
																<div class="input-group pull-right margin-t-xs" style="width: 40%;">		
                                                                    <div class="form-group">
                                                                        <div id="reportrange" class="form-control pull-right">
                                                                            <i class="fa fa-calendar"></i>&nbsp;
                                                                            <span></span> <i class="fa fa-caret-down"></i>
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

</div>
@endsection
