@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Editing Reporting Line up</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>

                    <li><a class="parent-item" href="{{route('reporting.index')}}">Employee Management</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Editing Reporting Line Up</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header> Editing Reporting Line Up</header>
                        <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form action="{{ route('reporting.update',$reporting->id) }}" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('PUT')
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Staff Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="staffname" id="staffname" required placeholder="enter staffname"
                                            class="form-control input-height" value="{{ old('staffname',$reporting->staffname) }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Staff Code
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="staffcode" id="staffcode" required placeholder="enter staffcode"
                                            class="form-control input-height " value="{{ old('staffcode',$reporting->staffcode) }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Designation
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="designation" id="designation" required
                                            placeholder="Designation"
                                            class="form-control input-height " value="{{ old('designation',$reporting->designation) }}" />
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Department
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="department" id="department" required
                                            placeholder="Department"
                                            class="form-control input-height" value="{{ old('department',$reporting->department) }}" />
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Phone number
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="phonenumber" id="phonenumber" required
                                            placeholder="Enter your phone Number"
                                            class="form-control input-height" value="{{ old('phonenumber',$reporting->phonenumber) }}" />
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Email Address
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="email" name="emailaddress" id="emailaddress" required
                                            placeholder="Enter your email address"
                                            class="form-control input-height" value="{{ old('emailaddress',$reporting->emailaddress) }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Reporting Manager
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="reportingmanager" id="reportingmanager" required placeholder="Reporting Manager"
                                            class="form-control input-height" value="{{ old('reportingmanager',$reporting->reportingmanager) }}" />
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Update</button>
                                            <a class="btn btn-default" href="{{route('reporting.index')}}">Cancel</a>
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
