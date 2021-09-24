<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Duties;
use DB;

class FinishDutiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $duties = DB::table('Duties')
        ->orderBy('id')
        ->paginate(20);        
        return view('Employee.Duties.EmployeeDutiesDetails',compact('duties'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $duties = duties::find($id);
        return view('Employee.Duties.Update-Dueties-Status')->with(
            'duties',$duties,
        );    
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
        $duties = duties::find($id);
        $duties->Employee_Name = $request->input('employee-name');
        $duties->task = $request->input('task');
        $duties->progress = $request->input('progress');
        $duties->status = $request->input('status');

        if($duties->save())
         {
            return redirect()->route('UpdateDuties');
         }
         else
         {
            return redirect('Employee.Duties.Employee-Duties-Details');
         }
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
