<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
class EmployeeNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $notification = DB::table('notifications')
        ->orderBy('created_at')
        ->get(); 
        return view('Employee.Notification.Employee-Notification',compact('notification'));
    }

    public function getcreateview()
    {
        return view('Employee.Notification.Create-Notification');
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
            'title' => 'required|max:50|min:10',
            'description'=> 'required|max:100|min:10'
        ]);

        $notification = new notification;
        $notification->Title_2 = $request->input('title');
        $notification->Description = $request->input('description');
        $notification->Employee_Name = $request->input('employeename');
        $notification->Employee_id = $request->input('employeeid');
        $notification->Status = 2;
        $notification->empreadonly = 0;
        $notification->save();

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
