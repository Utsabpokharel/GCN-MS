<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reporting;
use Illuminate\Http\Request;

class reportingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reporting = Reporting::all();
        return view('Admin.EmployeeManagement.Reporting.view', compact('reporting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reporting = Reporting::all();
        return view('Admin.EmployeeManagement.Reporting.add', compact('reporting'));
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
        Reporting::create($data);
        return redirect()->route('reporting.index')->with('success', 'Reporting Line Up is created');
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
        $reporting = Reporting::findOrFail($id);
        return view('Admin.EmployeeManagement.Reporting.edit', compact('reporting'));
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
        $reporting = Reporting::findorFail($id);
        $reporting->update($data);
        return redirect()->route('reporting.index')->with('success', 'Reporting Line Up Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reporting = Reporting::findorFail($id);
        $reporting->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', 'Reporting Deleted Successfully');
    }
}