<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\User;

class EmployeeController extends Controller
{
    public function Index()
    {
        $employee = DB::table('users')
        ->orderBy('id')
        ->paginate(20);
        return View('Pages.Employee.EmployeeDetails',compact('employee'));
    }


    public function EmployeeDetails()
    {
        return View('pages.Employee.EmployeeDetails');
    }

    public function edit($id)
    {
        $employee = User::find($id);
        return view('pages.Employee.EmployeeEdit')->with(
            'employee',$employee,
        );
    }


    public function Update(Request $request, $id)
    {
        $employee = User::find($id);
        $employee->name =  $request->input('name');
        $employee->email = $request->input('email');
        $employee->address = $request->input('address');
        $employee->phonenumber = $request->input('phone');
        
        if($employee->save())
         {
            return redirect()->route('updateEmployee');
         }
         else
         {
            return redirect('pages.Employee.EmployeeDetails');
         }
    }

    public function EmployeeCreate()
    {

        return View('pages.Employee.EmployeeCreate');
    }

    public function AddEmployee(Request $request)
    {
        $this->validate($request,
        [   
            'name' => 'required|min:15|max:20',
            'email'=> 'required|email',
            'password' =>'required|min:6|max:20',
            'address'=> 'required|min:20|max:50',
            'cnic'=> 'required|integer | regex:/(0)[0-9]{9}/',
            'phonenumber'=> 'required|min:12|max:15|integer | regex:/(0)[0-9]{9}/',
            'dob'=> 'required',
            'city'=> 'required',
            'service' => 'required'
        ]);

        $employee = new User();

        $empname =  $employee->name =  $request->input('name');
        $employee->email = $request->input('email');
        $employee->password = bcrypt($request->input('password'));
        $employee->address = $request->input('address');
        $employee->cnic = $request->input('cnic');
        $employee->phonenumber = $request->input('phonenumber');
        $employee->dob = $request->input('dob');
        $employee->city = $request->input('city');
        $employee->status = 1;
        $employee->role = 2;
        $employee->Title = 'Employee';
      
       
         if($employee->save())
         {
            return Redirect()->back()->withSuccess('Record Inserted Successfully');
         }
         else
         {
            return Redirect()->back()->withSuccess('Problem Occured');
         }
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->back()->withSuccess('Record Deleted Successfully');
    }

}
