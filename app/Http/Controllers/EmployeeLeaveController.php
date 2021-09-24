<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeLeave;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
class EmployeeLeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $employeeleave = DB::table('employeeleave')
        ->get();
        return view('pages.Employee.employeeleave');
    }


    public function getmyview()
    {
        return view('Employee.Leave.Total-Employee-Leaves');
    }

    public function createleave()
    {
        return view('Employee.Leave.Create-Leavel');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $daterange = explode('-',$request->daterange);
        $startdate = $daterange[0];
        $enddate = $daterange[1];
       // dd($startdate);
        $this->validate($request,
        [   
            'reason' => 'required',
            'description'=> 'required',
            'daterange' => 'required'
        ]);

        $leave = new employeeleave;
        $leave->empname = $request->input('employeename');
        $leave->reason = $request->input('reason');
        $leave->description = $request->input('description');
        $leave->empid = $request->input('employeeid');
        $leave->leave_from = date('Y-m-d',strtotime($startdate));
        $leave->leave_to = date('Y-m-d',strtotime($enddate));
        $leave->status = "Pending";
        $leave->save();

        return Redirect()->back()->withSuccess('Record Inserted Successfully');  
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
