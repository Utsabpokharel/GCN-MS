<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EnquirySource;

class enquirysourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquiry = EnquirySource::all();
        return view('Admin.Enquiry.EnquirySource.view',compact('enquiry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enquiry = EnquirySource::all();
        return view('Admin.Enquiry.EnquirySource.add',compact('enquiry'));
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
        EnquirySource::create($data);
        return redirect()->route('enquirysource.index')->with('success', 'Enquiry Source Created Successfully');
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
        $enquiry = EnquirySource::findorfail($id);
        return view('Admin.Enquiry.EnquirySource.edit', compact('enquiry'));
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
        $enquiry = EnquirySource::findorfail($id);
        $enquiry->update($data);
        return redirect()->route('enquirysource.index')->with('success', 'Enquiry Source Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enquiry = EnquirySource::findorfail($id);
        $enquiry->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Enquiry Source Deleted Successfully");
    }
}