<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
        ->where('role', 1)
        ->orderBy('id')
        ->paginate(20);
        return View('Pages.Users.UserDetails',compact('users'));
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
             
            'name' => 'required|max:15',
            'email'=> 'required|email|unique:users',
            'password' =>'required|min:8|max:15',
            'address'=> 'required|min:10|max:30',
            'cnic'=> 'required|min:14|max:16',
            'phonenumber'=> 'required|digits:12',
            'dob'=> 'required',
            'city'=> 'required'

        ]);

        $users = new User();

        $empname =  $users->name =  $request->input('name');
        $users->email = $request->input('email');
        $users->password = bcrypt($request->input('password'));
        $users->address = $request->input('address');
        $users->cnic = $request->input('cnic');
        $users->phonenumber = $request->input('phonenumber');
        $users->dob = $request->input('dob');
        $users->city = $request->input('city');
        $users->status = 1;
        $users->role = 1;
        $users->Title = 'Admin';
      
       
         if($users->save())
         {
            return Redirect()->back()->withSuccess('Record Inserted Successfully');
         }
         else
         {
            return Redirect()->back()->withSuccess('Problem Occured');
         }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return View('Pages.Users.CreateUser');    
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
