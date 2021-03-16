<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expensecategory;

class expensecategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expensecategory = Expensecategory::all();
        return view('Admin.Expensecategory.view',compact('expensecategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expensecategory = Expensecategory::all();
        return view('Admin.Expensecategory.add',compact('expensecategory'));
        
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
        Expensecategory::create($data);
        return redirect()->route('expensecategory.index')->with('success', 'Expense Category Created Successfully');
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
        $expensecategory = Expensecategory::findorfail($id);
        return view('Admin.Expensecategory.edit', compact('expensecategory'));
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
        $expensecategory = Expensecategory::findorfail($id);
        $expensecategory->update($data);
        return redirect()->route('expensecategory.index')->with('success', 'Expense Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expensecategory = Expensecategory::findorfail($id);
        $expensecategory->delete();
        return back()->with('flash_error', 'Deleted Successfully')->with('warning', "Expense Category Deleted Successfully");
    }
}
