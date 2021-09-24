<?php

namespace App\Http\Controllers;
use App\notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use App\User;
use DB;
use App\Mail\SendNotification;
use Illuminate\Support\Facades\Mail;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     $notification = notification::paginate(20);
     return View('pages.Notification.NotificationDetails',compact('notification'));

    }
    
    public function createview()
    {
        $employee = DB::table('users')
        ->orderBy('id')
        ->get(); 
        return View('pages.Notification.NotificationCreate',compact('employee'));
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
        'title'=>'required|min:10|max:30',
        'empname'=>'required',
        'description'=>'required|min:10|max:100'
    ]);

    for ($i=0; $i < sizeof($request->empname); $i++) {

        $emp = User::findOrFail($request->empname[$i]);
        $notification = new notification;
        $notification->Employee_id = $request->empname[$i];            
        $notification->Employee_Name = $emp->name;
        $notification->Title_2 = $request->input('title');
        $notification->Description = $request->input('description'); 
        $notification->Status = 1; 

        $notification->save();

        $when = now()->addSeconds(8);

        Mail::to($emp->email)->later($when,new SendNotification($emp));
    }

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
