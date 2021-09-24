@extends('layouts.master')
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
                                                <li><a href="#" class="text-mg">Payroll</a></li>
                                                <li class="active text-dg">Payroll List</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <h5 class="text-right no-margin text-italic text-normal font-12">E.T.M.S</h5>
                                            <h1 class="text-right no-margin"><i class="fa fa-users" aria-hidden="true"></i> Payroll List</h1>
                                        </div>
                                    </div>
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
																			<th class="col-md-2"><span class="pull-right">Action</span></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @php $allowances = \App\user::select('users.id','users.name')->where('users.id' ,'=', 3)->paginate(20); @endphp
                                                                @foreach($allowances as $row)
																<tr>
																			<td>{{$row->name}}</td>
																		<td>
																			<div class="pull-right">
																			<a href="MakePayroll/{{$row->id}}" class="btn btn-default text-mg btn-xs margin-b-xs" title="Make Payment"><i class="fa fa-pencil fa-lg"></i></a>
																			</div>
																		</td>
                                                                        <td></td>
																	</tr>
																@endforeach
                                                                </tbody> 
															</table>
														</div>
														<div class="row">
															<div class="col-md-12">
																<div class="btn-group pull-right">
                                                                {{ $allowances->links() }}
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
