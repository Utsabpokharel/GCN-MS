<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PayCalendar;

class paycalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paycalendar = PayCalendar::all();
        return view('Admin.Payroll.PayCalendar.view',compact('paycalendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paycalendar = PayCalendar::all();
        return view('Admin.Payroll.PayCalendar.add',compact('paycalendar'));
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
        PayCalendar::create($data);
        return redirect()->route('paycalendar.index')->with('success', 'PayCalendar Created Successfully');
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
        $paycalendar = PayCalendar::findorfail($id);
        return view('Admin.PayCalendar.edit', compact('paycalendar'));
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
        $paycalendar = PayCalendar::findorfail($id);
        $paycalendar->update($data);
        return redirect()->route('paycalendar.index')->with('success', 'Pay Calendar Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paycalendar = PayCalendar::findorfail($id);
        $paycalendar->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Pay Calendar Deleted Successfully");
    }
}