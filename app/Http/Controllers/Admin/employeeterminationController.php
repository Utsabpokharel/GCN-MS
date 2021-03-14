<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeeTermination;
use Illuminate\Http\Request;

class employeeterminationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeetermination = EmployeeTermination::all();
        return view('Admin.Recruitment.EmployeeTermination.view', compact('employeetermination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $employeetermination = EmployeeTermination::all();
        return view('Admin.Recruitment.EmployeeTermination.add', compact('employeetermination'));
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
        $imagepath = 'images/EmployeeTermination/';

        $data['terminationdocument'] = save_image($request->terminationdocument, 150, 150, $imagepath);
        EmployeeTermination::create($data);
        return redirect()->route('employeetermination.index')->with('success', 'Employee Termination created successfully');
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
        $employeetermination = EmployeeTermination::findorfail($id);
        return view('Admin.EmployeeManagement.EmployeeTermination.edit', compact('employeetermination'));
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
        $employeetermination = EmployeeTermination::findorfail($id);
        $employeetermination->update($data);
        return redirect()->route('employeetermination.index')->with('success', 'Employee Termination Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employeetermination = EmployeeTermination::findorfail($id);
        $employeetermination->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Employee Termination Deleted Successfully");
    }
}