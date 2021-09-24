<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expences;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use DB;

class ExpencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.Expen.createexpences');
    }
    public function detail()
    { 
        $expences = DB::table('expences')
        ->orderBy('create_date')
        ->get(); 
        return view('pages.Expen.expenceslist', compact('expences'));
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
        $this->validate($request,
        [
            'title' => 'required|min:10',
            'description' => 'required|min:50|max:100',
            'amount' => 'required|digits:10'
        ]);
        $exp = new  Expences;
        $exp->title = $request->input('title');
        $exp->decs = $request->input('description');
        $exp->amount = $request->input('amount');
        
        if  ($exp->save())
        {
        return Redirect()->back()->withSuccess('Record Inserted Successfully');
        }
        else
        {
            return view('pages.Expen.createexpences');
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
        $expences = Expences::find($id);
        return view('pages.Expen.Editedexpences')->with(
            'expences',$expences,
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
        $exp = Expences::find($id);
        $exp->title = $request->input('title');
        $exp->decs = $request->input('description');
        $exp->amount = $request->input('amount');
        
        if  ($exp->save())
        {
        return Redirect()->back()->withSuccess('Record Inserted Successfully');
        }
        else
        {
            return view('pages.Expen.createexpences');
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
