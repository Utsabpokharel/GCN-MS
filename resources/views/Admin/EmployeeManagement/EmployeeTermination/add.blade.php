@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Employee Termination</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>

                    <li><a class="parent-item" href="{{route('employeetermination.index')}}">Employee Management</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Employee Termination</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add Employee Termination</header>
                        <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form action="{{ route('employeetermination.store') }}" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Employee Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="staffname" id="staffname" required placeholder="Enter Employee Name"
                                            class="form-control input-height" value="" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Employee Code
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="staffcode" id="staffcode" required placeholder="Enter Employee Code"
                                            class="form-control input-height " value="" />
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="control-label col-md-3">Change Status
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                    <input type="text" name="changestatus" id="changestatus" required placeholder="Change Status"
                                            class="form-control input-height " value="" />
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="control-label col-md-3">Notice Date
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                    <input type="date" name="noticedate" id="noticedate"
                                            class="form-control input-height " value="" />
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="control-label col-md-3">Service End Date
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                    <input type="date" name="serviceenddate" id="serviceenddate"
                                            class="form-control input-height " value="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Forward To
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                    <input type="text" name="forwardto" id="forwardto" required placeholder="Forward To"
                                            class="form-control input-height " value="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Termination Document
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                    <input type="file" name="terminationdocument" id="terminationdocument"
                                            class="form-control input-height " value="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Reason
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                    <textarea name="reason" id="reason" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Details
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                    <textarea name="details" id="details" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                            <a class="btn btn-default" href="{{route('employeetermination.index')}}">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
