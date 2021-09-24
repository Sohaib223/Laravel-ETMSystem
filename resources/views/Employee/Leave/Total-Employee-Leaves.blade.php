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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="section">
													<div class="section-body activity">
															<div class="section-body collapse in user-detail">
														<div class="table-responsive">
															<table class="table userlist-table hover" id="myTable">
															<thead>
																	<tr>
                                                                      <th class="col-md-2">Employee Name</th>
																			<th class="col-md-2">Employee Number</th>
																			<th class="col-md-2">Progress</th>
																			<th class="col-md-1">Task</th>
																			<th class="col-md-2">From</th>
																			<th class="col-md-1">Till</th>
																			<th class="col-md-2"><span class="pull-right">Action</span></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
																
																<tr>
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																			<td></td>
																		<td>
																			<div class="pull-right">
																			<a href="" class="btn btn-default text-mg btn-xs margin-b-xs" title="Edit"><i class="fa fa-pencil fa-lg"></i></a>
																			<a href="" onclick="return myFunction();" class="btn btn-default text-mg btn-xs margin-b-xs delete" title="Delete"><i class="fa fa-trash-o fa-lg"></i></a>
																				   
																			</div>
																		</td>
																	</tr>
																
                                                                </tbody>
															</table>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="btn-group pull-right">
                                                                
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
<script>

function myFunction() {
      if(!confirm("Are You Sure to delete this?"))
      event.preventDefault();
  }

$(document).ready(function() {
    $('#myTable').DataTable( {
		bInfo: false,
        "paging": false, 
        "info": false,         
        "lengthChange":false,
        "lengthMenu": [[40,100, 250, 300, -1], [40,100, 250, 300, "All"]]
		
    } );
});
</script>	
@endsection
