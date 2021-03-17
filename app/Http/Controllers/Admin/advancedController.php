<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advanced;
use Illuminate\Http\Request;

class advancedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advanced = Advanced::all();
        return view('Admin.Payroll.Advanced.view',compact('advanced'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advanced = Advanced::all();
        return view('Admin.Payroll.Advanced.add',compact('advanced'));
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
        Advanced::create($data);
        return redirect()->route('advanced.index')->with('success', 'Advanced Created Successfully');
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
        $advanced = Advanced::findorfail($id);
        return view('Admin.Payroll.Advanced.edit', compact('advanced'));
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
        $advanced = Advanced::findorfail($id);
        $advanced->update($data);
        return redirect()->route('advanced.index')->with('success', 'Advanced Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advanced = Advanced::findorfail($id);
        $advanced->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Advanced Deleted Successfully");
    }
}