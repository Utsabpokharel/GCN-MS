<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EnquiryCategory;

class enquirycategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquiry = EnquiryCategory::all();
        return view('Admin.Enquiry.EnquiryCategory.view',compact('enquiry'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enquiry = EnquiryCategory::all();
        return view('Admin.Enquiry.EnquiryCategory.add',compact('enquiry'));
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
        EnquiryCategory::create($data);
        return redirect()->route('enquirycategory.index')->with('success', 'Enquiry Category Created Successfully');
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
        $enquiry = EnquiryCategory::findorfail($id);
        return view('Admin.EnquiryCategory.edit', compact('enquiry'));
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
        $enquiry = EnquiryCategory::findorfail($id);
        $enquiry->update($data);
        return redirect()->route('enquirycategory.index')->with('success', 'Enquiry Category Updated Successfully');
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