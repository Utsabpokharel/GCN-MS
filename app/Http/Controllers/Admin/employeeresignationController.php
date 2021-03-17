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
        return view('Admin.EmployeeManagement.EmployeeResignation.view', compact('employeeresignation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employeeresignation = EmployeeResignation::all();
        return view('Admin.EmployeeManagement.EmployeeResignation.add', compact('employeeresignation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('resignationdocument')) {
            $image = $request->file('resignationdocument');
            $res = "RESIGNATION-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move('public/images/EmployeeResignation/', $res);
        }
        $employeeresignation = new EmployeeResignation([
            'staffname' => $request->staffname,
            'staffcode' => $request->staffcode,
            'noticedate' => $request->noticedate,
            'forwardto' => $request->forwardto,
            'desireresigndate' => $request->desireresigndate,
            'reason' => $request->reason,
            'details' => $request->details
        ]);
        $employeeresignation->resignationdocument = $res;
        $employeeresignation->save();
        return redirect()->route('employeeresignation.index')->with('success', 'Employee Resignation created successfully');
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
        return view('Admin.EmployeeManagement.EmployeeResignation.edit', compact('employeeresignation'));
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

        $employeeresignation = EmployeeResignation::findorfail($id);
        if ($request->hasFile('resignationdocument')) {
            $image = $request->file('resignationdocument');
            $res = "RESIGNATION-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move('public/images/EmployeeResignation/', $res);
            $employeeresignation->resignationdocument = $res;
        }
        $employeeresignation->staffname = $request->input('staffname');
        $employeeresignation->staffcode = $request->input('staffcode');
        $employeeresignation->forwardto = $request->input('forwardto');
        $employeeresignation->noticedate = $request->input('noticedate');
        $employeeresignation->desireresigndate = $request->input('desireresigndate');
        $employeeresignation->reason = $request->input('reason');
        $employeeresignation->details = $request->input('details');

        $employeeresignation->save();
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
