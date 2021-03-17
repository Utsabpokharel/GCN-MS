<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacheratt;

class teacherattController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacheratt = Teacheratt::all();
        return view('Admin.Attendance.Teacher.view',compact('teacheratt'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacheratt = Teacheratt::all();
        return view('Admin.Attendance.Teacher.add',compact('teacheratt'));
        
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
        Teacheratt::create($data);
        return redirect()->route('teacheratt.index')->with('success', 'Teacher Attendance Created Successfully');
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
        $teacheratt = Teacheratt::findorfail($id);
        return view('Admin.Attendance.Teacher.edit', compact('teacheratt'));
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
        $teacheratt = Teacheratt::findorfail($id);
        $teacheratt->update($data);
        return redirect()->route('teacheratt.index')->with('success', 'Teacher Attendance Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacheratt = Teacheratt::findorfail($id);
        $teacheratt->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Teacher Attendance Deleted Successfully");
    }
}
