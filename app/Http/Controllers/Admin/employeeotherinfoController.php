<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeeOtherInfo;
use Illuminate\Http\Request;

class employeeotherinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeotherinfo=EmployeeOtherInfo::all();
        return view('Admin.EmployeeManagement.EmployeeOtherInfo.view',compact('employeeotherinfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employeeotherinfo=EmployeeOtherInfo::all();
        return view('Admin.EmployeeManagment.EmployeeOtherInfo.add',compact('employeeotherinfo'));
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
        EmployeeOtherInfo::create($data);
        return redirect()->route('employeeotherinfo.view')->with('success', 'Employee Other Information created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employeeotherinfo = EmployeeOtherInfo::findorfail($id);
        return view('Admin.EmployeeManagement.Skill.edit', compact('skill'));
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
        $employeeotherinfo = EmployeeOtherInfo::findorfail($id);
        $employeeotherinfo->update($data);
        return redirect()->route('employeeotherinfo.index')->with('success', 'Employee Other Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employeeotherinfo = EmployeeOtherInfo::findorfail($id);
        $employeeotherinfo->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Employee Other Information Deleted Successfully");
    
    }
}