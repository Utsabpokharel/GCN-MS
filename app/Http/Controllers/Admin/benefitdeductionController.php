<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BenefitDeduction;

class benefitdeductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $benefit = BenefitDeduction::all();
        return view('Admin.Payroll.BenefitDeduction.view',compact('benefit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $benefit = BenefitDeduction::all();
        return view('Admin.Payroll.BenefitDeduction.add',compact('benefit'));
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
        BenefitDeduction::create($data);
        return redirect()->route('benefitdeduction.index')->with('success', 'BenefitDeduction Created successfully');
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
        $benefit = BenefitDeduction::findorfail($id);
        return view('Admin.BenefitDeduction.edit', compact('benefit'));
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
        $benefit = BenefitDeduction::findorfail($id);
        $benefit->update($data);
        return redirect()->route('benefit.index')->with('success', 'Benefit/Deduction Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $benefit = BenefitDeduction::findorfail($id);
        $benefit->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Benefit/Deduction Deleted Successfully");
    }
}