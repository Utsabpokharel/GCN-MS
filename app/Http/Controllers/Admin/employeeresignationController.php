<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeeResignation;
use Illuminate\Http\Request;

class employeeresignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeresignation = EmployeeResignation::all();
        return view('Admin.Recruitment.EmployeeResignation.view', compact('employeeresignation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employeeresignation = EmployeeResignation::all();
        return view('Admin.Recruitment.EmployeeResignation.add', compact('employeeresignation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $imagepath = 'images/EmployeeResignation/';

        $data['resignationdocument'] = save_image($request->resignationdocument, 150, 150, $imagepath);
        EmployeeResignation::create($data);
        return redirect()->route('employeeresignation.index')->with('success','Employee Resignation created successfully');
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
        $employeeresignation = EmployeeResignation::findorfail($id);
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
        $employeeresignation = EmployeeResignation::findorfail($id);
        $employeeresignation->update($data);
        return redirect()->route('employeeresignation.index')->with('success', 'Employee Resignation Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employeeresignation = EmployeeResignation::findorfail($id);
        $employeeresignation->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Employee Resignation Deleted Successfully");

    }
}