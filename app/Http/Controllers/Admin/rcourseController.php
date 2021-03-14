<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RCourse;
use Illuminate\Http\Request;

class rcourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rcourse = RCourse::all();
        return view('Admin.EmployeeManagement.Subject.view', compact('rcourse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rcourse = Rcourse::all();
        return view('Admin.EmployeeManagement.Subject.add', compact('rcourse'));
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
        RCourse::create($data);
        return redirect()->route('rcourse.index')->with('success', 'Subject is created');
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
        $rcourse = RCourse::findOrFail($id);
        return view('Admin.EmployeeManagement.Subject.edit', compact('rcourse'));
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
        $rcourse = RCourse::findorFail($id);
        $rcourse->update($data);
        return redirect()->route('rcourse.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rcourse = RCourse::findorFail($id);
        $rcourse->delete();
        return back()->with('flash_error', 'Deleted Successfully');
    }
}