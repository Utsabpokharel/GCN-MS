<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmploymentStatus;
use Illuminate\Http\Request;

class employmentstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employmentstatus = EmploymentStatus::all();
        return view('Admin.EmployeeManagement.EmploymentStatus.view', compact('employmentstatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employmentstatus = EmploymentStatus::all();
        return view('Admin.Recruitment.EmploymentStatus.add');
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
        EmploymentStatus::create($data);
        return redirect()->route('employmentstatus.index')->with('success', 'Employment Status created successfully');
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
        $employmentstatus = EmploymentStatus::findorfail($id);
        return view('Admin.EmployeeManagement.EmployeeTermination.edit', compact('employmentstatus'));
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
        $employmentstatus = EmploymentStatus::findorfail($id);
        $employmentstatus->update($data);
        return redirect()->route('employmentstatus.index')->with('success', 'Employment Status Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employmentstatus = EmploymentStatus::findorfail($id);
        $employmentstatus->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Employment Status Deleted Successfully");
    }
}