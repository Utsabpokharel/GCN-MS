<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Incoming;

class incomingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incoming = Incoming::all();
        return view('Admin.Call Logs.Incoming Call Logs.view',compact('incoming'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $incoming = Incoming::all();
        return view('Admin.Call Logs.Incoming Call Logs.add',compact('incoming'));
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
        Incoming::create($data);
        return redirect()->route('incoming.index')->with('success', 'Incoming Created Successfully');
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
        $incoming = Incoming::findorfail($id);
        return view('Admin.Call Logs.Incoming Call Logs.edit', compact('incoming'));
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
        $incoming = Incoming::findorfail($id);
        $incoming->update($data);
        return redirect()->route('incoming.index')->with('success', 'Incoming Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incoming = Incoming::findorfail($id);
        $incoming->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Incoming Deleted Successfully");
    }
}