<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staffatt;

class staffattController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffatt = Staffatt::all();
        return view('Admin.Attendance.Staff.view',compact('staffatt'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staffatt = Staffatt::all();
        return view('Admin.Attendance.Staff.add',compact('staffatt'));
        
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
        Staffatt::create($data);
        return redirect()->route('staffatt.index')->with('success', 'Staff Attendance Created Successfully');
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
        $staffatt = Staffatt::findorfail($id);
        return view('Admin.Attendance.Staff.edit', compact('staffatt'));
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
        $staffatt = Staffatt::findorfail($id);
        $staffatt->update($data);
        return redirect()->route('staffatt.index')->with('success', 'Staff Attendance Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staffatt = Staffatt::findorfail($id);
        $staffatt->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Staff Attendance Deleted Successfully");
    }
}
