<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiries;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class InquiriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $Inquirie = DB::table('Inquiries')
        ->orderBy('created_at')
        ->paginate(10);   
        return View('pages.Inquiries.Inquiries', compact('Inquirie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return View('pages.Inquiries.CreateInquiries');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'Name' => 'required',
            'Address' => 'required',
            'Email' => 'required',
            'Title' => 'required',
            'Phone-Number' => 'required',
            'Description' => 'required',

        ]);

        $inquirie = new Inquiries();
        $inquirie->name = $request->input('Name');
        $inquirie->address = $request->input('Address');
        $inquirie->email = $request->input('Email');
        $inquirie->title = $request->input('Title');
        $inquirie->phoneno = $request->input('Phone-Number');
        $inquirie->description = $request->input('Description');
        
        if($inquirie->save())
        {
           return Redirect()->back()->withSuccess('Record Inserted Successfully');
        }
        else
        {
           return Redirect()->back()->withSuccess('Problem Occured');
        }
        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inquirie = Inquiries::find($id);
        return view('pages.Inquiries.sendmail')->with(
            'inquirie',$inquirie,
        );;
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
