<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocumentManagement;
use Illuminate\Http\Request;

class documentmanagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentmanagement = DocumentManagement::all();
        return view('Admin.EmployeeManagement.DocumentManagement.view', compact('documentmanagement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documentmanagement = DocumentManagement::all();
        return view('Admin.EmployeeManagement.DocumentManagement.add', compact('documentmanagement'));
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
        DocumentManagement::create($data);
        return redirect()->route('documentmanagement.index')->with('success', 'Employee Documents created Successfully');
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
        $documentmanagement = DocumentManagement::findorfail($id);
        return view('Admin.EmployeeManagement.DocumentManagement.edit', compact('documentmanagement'));
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
        $documentmanagement = DocumentManagement::findorfail($id);
        $documentmanagement->update($data);
        return redirect()->route('documentmanagement.index')->with('success', 'Employee Document Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documentmanagement = DocumentManagement::findorfail($id);
        $documentmanagement->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Employee Document Deleted Successfully");
    }
}