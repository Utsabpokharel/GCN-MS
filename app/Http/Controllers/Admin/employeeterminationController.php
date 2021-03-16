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
        return view('Admin.EmployeeManagement.EmployeeTermination.view', compact('employeetermination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $employeetermination = EmployeeTermination::all();
        return view('Admin.EmployeeManagement.EmployeeTermination.add', compact('employeetermination'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('terminationdocument')) {
            $image = $request->file('terminationdocument');
            $term = "TERMINATION-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move('public/images/EmployeeTermination/', $term);
            // $prsnl->ctzn_f = $name;
        }
        $employeetermination = new EmployeeTermination([
            'staffname' => $request->staffname,
            'staffcode' => $request->staffcode,
            'changestatus' => $request->changestatus,
            'serviceenddate' => $request->serviceenddate,
            'desireresigndate' => $request->noticedate,
            'forwardto' => $request->forwardto,
            'reason' => $request->reason,
            'details' => $request->details 
        ]);
        $employeetermination->terminationdocument=$term;
        $employeetermination->save();
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