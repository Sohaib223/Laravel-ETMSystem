<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Allowances;
use Validator;
use Illuminate\Support\Facades\Input;


class MakePayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //id="add_a_d"
        $employee = User::paginate(20);
        //dd($employee);
        return View('pages.Payroll.payrolldetials',['employee' => $employee]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //dd($request->all());
        $this->validate($request,
        [   
            'selectmonth' => 'required',
            'selectyear'=> 'required',
            'total_allowances' =>'required',
            'total_dections'=> 'required',
            'total_salary' => 'required',
            'get_allowances'=> 'required',
            'eid' => 'required',
            'deduction'=> 'required'        
        ]);
        
        $allowances = new Allowances;

        $allowances->allowance = $request->get_allowances[0];
        $allowances->deductions = $request->deduction[0];
        $allowances->month = $request->selectmonth;
        $allowances->year = $request->selectyear;
        $allowances->salary = $request->total_salary;
        $allowances->aprice = $request->total_allowances;
        $allowances->dprice = $request->total_dections;
        $allowances->eid =  $request->eid;
        
        $allowances->save();
        Redirect()->back()->withSuccess('Record Inserted Successfully');

        // if(Allowances::select()->where('month' ,'!=', Carbon::now()->month)
        // {
            
        // }        
        // else
        // {
            
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = user::find($id);
        return view('pages.Payroll.createpayroll')->with(
            'employee',$employee,
        );        }

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
