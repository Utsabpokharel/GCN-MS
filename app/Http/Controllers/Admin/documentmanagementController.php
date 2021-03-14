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
        $imagepath = 'images/Document/';

        $data['pandocument'] = save_image($request->pandocument, 150, 150, $imagepath);
        $data['pfdocument'] = save_image($request->pfdocument, 150, 150, $imagepath);
        $data['citdocument'] = save_image($request->citdocument, 150, 150, $imagepath);
        $data['appointmentdocument'] = save_image($request->appointmentdocument, 150, 150, $imagepath);
        $data['contractdocument'] = save_image($request->offer_letter, 150, 150, $imagepath);

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
        $data = $request->except('pandocument', 'pfdocument', 'citdocument', 'appointmentdocument', 'contractdocument');
        if ($request->hasFile('pandocument')) {
            $data['pandocument'] = save_image($request->image, 150, 150, $this->imagePath());
            delete_image($documentmanagement->image, $this->imagePath());
        } else {
            $data['pandocument'] = $request->current_pandocument;
        }

        if ($request->hasFile('pfdocument')) {
            $data['pfdocument'] = save_image($request->pfdocument, 150, 150, $this->imagePath());
            delete_image($documentmanagement->frontcitizenshipimage, $this->imagePath());
        } else {

            $data['pfdocument'] = $request->current_pfdocument;
        }
        if ($request->hasFile('citdocument')) {
            $data['citdocument'] = save_image($request->citdocument, 150, 150, $this->imagePath());
            delete_image($documentmanagement->citdocument, $this->imagePath());
        } else {

            $data['citdocument'] = $request->current_citdocument;
        }
        if ($request->hasFile('appointmentdocument')) {
            $data['appointmentdocument'] = save_image($request->appointmentdocument, 150, 150, $this->imagePath());
            delete_image($documentmanagement->resume, $this->imagePath());
        } else {

            $data['appointmentdocument'] = $request->current_appointmentdocument;
        }
        if ($request->hasFile('contractdocument')) {
            $data['contractdocument'] = save_image($request->contractdocument, 150, 150, $this->imagePath());
            delete_image($documentmanagement->contractdocument, $this->imagePath());
        } else {

            $data['contractdocument'] = $request->current_contractdocument;
        }

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
    protected function imagePath()
    {
        return "images/Document/";
    }
}