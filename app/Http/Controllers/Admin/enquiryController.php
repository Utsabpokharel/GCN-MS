<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;

class enquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquiry = Enquiry::all();
        return view('Admin.Enquiry.Enquiry.view',compact('enquiry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enquiry = Enquiry::all();
        return view('Admin.Enquiry.Enquiry.add',compact('enquiry'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Enquiry::create($data);
        return redirect()->route('enquiry.index')->with('success', 'Enquiry Created Successfully');
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
        $enquiry = Enquiry::findorfail($id);
        return view('Admin.Enquiry.edit', compact('enquiry'));
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
        $data = $request->all();
        $enquiry = Enquiry::findorfail($id);
        $enquiry->update($data);
        return redirect()->route('enquiry.index')->with('success', 'Enquiry Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enquiry = Enquiry::findorfail($id);
        $enquiry->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Enquiry Deleted Successfully");
    }
}