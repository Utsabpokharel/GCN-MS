<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmploymentStatusVerification;
use Illuminate\Http\Request;

class employmentstatusverificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employmentstatusverification = EmploymentStatusVerification::all();
        return view('Admin.EmployeeManagement.EmploymentStatusVerification.view', compact('employmentstatusverification'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employmentstatusverification = EmploymentStatusVerification::all();
        return view('Admin.EmployeeManagement.EmploymentStatusVerification.add', compact('employmentstatusverification'));
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
        EmploymentStatusVerification::create($data);
        return redirect()->route('employmentstatusverification.index')->with('success', 'Employment Staus Verification is created');
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
        $employmentstatusverification = EmploymentStatusVerification::findOrFail($id);
        return view('Admin.EmployeeManagement.EmploymentStatusVerification.edit', compact('employmentstatusverification'));
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
        $data=$request->all();
        $employmentstatusverification=EmploymentStatusVerification::findorFail($id);
        $employmentstatusverification->update($data);
        return redirect()->route('employmentstatusverification.index')->with('success','Employment Status Verification Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employmentstatusverification=EmploymentStatusVerification::findorFail($id);
        $employmentstatusverification->delete();
        return back()->with('flash_error','Deleted Successfully')->with('warning','Employment Status Verification Deleted Successfully');
    }
}