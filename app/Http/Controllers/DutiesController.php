<?php https://daftsex.com/video/Riley%20Reid

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\duties;
use App\Clients;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendDuties;
use DB;
use App\User;
use App\inquiries;

class DutiesController extends Controller
{


    public function DutiesCreate()
    {
            $employee = user::all()
            ->where('services', 1)
            ->where('status', 1)
            ->where('role', 2);
            $inquiries = inquiries::all()
            ->where('status',1);
            return View('pages.Duties.DutiesCreate',[
                'employee' => $employee,
                'inquiries' => $inquiries
            ]);
    }
    
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
        return View('Pages.Duties.DutiesDetails',compact('duties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $daterange = explode('-',$request->daterange);
        $startdate = $daterange[0];
        $enddate = $daterange[1];
        //dd($startdate);
        $this->validate($request,
        [   
            'employeename' => 'required',
            'cname'=> 'required|max:50',
            'caddress' =>'required|50',
            'cphone'=> 'required|max:14|min:12',
            'daterange' => 'required',
            'task'=> 'required|max:25',
            'status'=> 'required'        
        ]);
        
        for ($i=0; $i < sizeof($request->employeename); $i++) {

            $emp = User::findOrFail($request->employeename[$i]);
            $duties = new duties;

            $duties->Employee_id = $request->employeename[$i];            
            $duties->Employee_Name = $emp->name;
            $duties->Employee_PhoneNo = $emp->phonenumber;
            $duties->Client_Name = $request->input('cname');
            $duties->Client_Address = $request->input('caddress');
            $duties->Client_PhoneNo = $request->input('cphone');
            $duties->From = date('Y-m-d',strtotime($startdate));
            $duties->Till = date('Y-m-d',strtotime($enddate));
            $duties->Task = $request->input('task');
            $duties->status = $request->input('status');
            $duties->progress = "0%";

            $duties->save();

            $when = now()->addSeconds(4);

            Mail::to($emp->email)->later($when,new SendDuties($emp));

        }

        return Redirect()->back()->withSuccess('Record Inserted Successfully');
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

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
            $duties = duties::find($id);
            return view('pages.Duties.DutiesEdit')->with(
                'duties',$duties,
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
        $duties = duties::find($id);
        $duties->Employee_id = $request->input('eid');
        $duties->Employee_Name = $request->input('ename');
        $duties->Employee_PhoneNo = $request->input('ecell');
        $duties->Task = $request->input('task');
        $duties->From = $request->input('daterange');

        if($duties->save())
         {
            return redirect()->route('UpdateDuties');
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
        $duties = Duties::find($id);
        $duties->delete();
        return redirect()->back()->withSuccess('Record Deleted Successfully');
   
    }
}
