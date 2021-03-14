<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeeQualification;
use Illuminate\Http\Request;

class employeequalificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeequalification = EmployeeQualification::all();
        return view('Admin.EmployeeManagement.EmployeeQualification.view', compact('employeequalification'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employeequalification = EmployeeQualification::all();
        return view('Admin.EmployeeManagement.EmployeeQualification.add', compact('employeequalification'));
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
        EmployeeQualification::create($data);
        return redirect()->route('employeequalification.index')->with('success', 'Employee Qualification created Successfully');
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
        $employeequalification = EmployeeQualification::findorfail($id);
        return view('Admin.EmployeeManagement.EmployeeQualification.edit', compact('employeequalification'));
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
        $employeequalification = EmployeeQualification::findorfail($id);
        $employeequalification->update($data);
        return redirect()->route('employeequalification.index')->with('success', 'Employee Qualification Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employeequalification = EmployeeQualification::findorfail($id);
        $employeequalification->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Employee Qualification Deleted Successfully");

    }
}