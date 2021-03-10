<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Disciplinary;
use Illuminate\Http\Request;

class disciplinaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disciplinary = Disciplinary::all();

        return view('Admin.EmployeeManagement.Disciplinary.view', compact('disciplinary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disciplinary = Disciplinary::all();
        return view('Admin.EmployeeManagement.Disciplinary.add', compact('disciplinary'));
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
        Disciplinary::create($data);
        return redirect()->route('disciplinary.index')->with('success', 'Employee Disciplinary Case created Successfully');
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
        $disciplinary = Disciplinary::findorfail($id);
        return view('Admin.Disciplinary.edit', compact('disciplinary'));
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
        $disciplinary = Disciplinary::findorfail($id);
        $disciplinary->update($data);
        return redirect()->route('disciplinary.index')->with('success', 'Employee Disciplinary Case Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disciplinary = Disciplinary::findorfail($id);
        $disciplinary->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Employee Disciplinary Case Deleted Successfully");
    }
}