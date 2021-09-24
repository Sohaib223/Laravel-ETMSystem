<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use App\Clients;
use App\Employee;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendDuties;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $clients = clients::all()->toArray();
        return View('pages.Client.ClientDetails',compact('clients'));
    }
    public function AssignEmployee()
    {   
        $employee = User::all(['id','name','phonenumber']);
        $clients = Clients::all();
        return View('pages.Client.AssignEmployee',[
            'employee' => $employee,
            'clients' => $clients
        ]);
    }
    public function ClientCreate()
    {
        return View('pages.Client.CreateClient');  
    }

    public function ClientDetails()
    {
            return View('pages.Client.ClientDetails');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,
        [   
            'cname' => 'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'address'=> 'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'pnumber' =>'required|numeric|digits_between:1,12',
            'coname'=> 'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            'status'=> 'required'

        ]);
        
       $clients = new clients();

       $clients->Name = $request->input('cname');
       $clients->Address = $request->input('address');
       $clients->Phonenumber = $request->input('pnumber');
       $clients->CompanyName = $request->input('coname');            
       $clients->Status = $request->input('status');
            
       if($clients->save())
       {
        return Redirect()->back()->withSuccess('Record Inserted Successfully');
       }

       else
       {
        return Redirect::back()->withErrors(['msg', 'Problem Occured']);
       }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $daterange = explode('-',$request->daterange);
    //     $startdate = $daterange[0];
    //     $enddate = $daterange[1];
    //     //dd($startdate);
    //     $this->validate($request,
    //     [   
    //         'employeename' => 'required',
    //         'cname'=> 'required',
    //         'caddress' =>'required',
    //         'cphone'=> 'required',
    //         'daterange' => 'required',
    //         'task'=> 'required',
    //         'status'=> 'required'        
    //     ]);
        
    //     for ($i=0; $i < sizeof($request->employeename); $i++) {

    //         $emp = User::findOrFail($request->employeename[$i]);
    //         $duties = new duties;

    //         $duties->Employee_id = $request->employeename[$i];            
    //         $duties->Employee_Name = $emp->name;
    //         $duties->Employee_PhoneNo = $emp->phonenumber;
    //         $duties->Client_Name = $request->input('cname');
    //         $duties->Client_Address = $request->input('caddress');
    //         $duties->Client_PhoneNo = $request->input('cphone');
    //         $duties->From = date('Y-m-d',strtotime($startdate));
    //         $duties->Till = date('Y-m-d',strtotime($enddate));
    //         $duties->Task = $request->input('task');
    //         $duties->status = $request->input('status');
    //         $duties->progress = "0%";

    //         $duties->save();

    //         $when = now()->addSeconds(4);

    //         Mail::to($emp->email)->later($when,new SendDuties($emp));
    // }

    // }
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
        $clients = clients::find($id);
        return view('pages.Client.ClientEdit')->with(
            'clients',$clients,
        );    
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
        $clients = clients::find($id);
        $clients->Name = $request->input('name');
        $clients->Address = $request->input('address');
        $clients->Phonenumber = $request->input('pcell');
        $clients->CompanyName = $request->input('cname');
        
        if($clients->save())
         {
            return redirect()->route('UpdateClient');


         }
        
         else
         {
            return redirect('pages.Employee.EmployeeDetails');
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
        $clients = clients::find($id);
        $clients->delete();
        return redirect()->back()->withSuccess('Record Deleted Successfully');
   
    }
}
