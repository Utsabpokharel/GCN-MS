@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Reporting Line up</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>

                    <li><a class="parent-item" href="{{route('reporting.index')}}">Recruitment</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Reporting Line Up</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Reporting Line Up</header>
                        <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form action="" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Staff Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="staffname" required placeholder="enter staffname"
                                            class="form-control input-height" value="" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Staff Code
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="staffcode" required placeholder="enter staffcode"
                                            class="form-control input-height " value="" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Designation
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="designation" required
                                            placeholder="Designation"
                                            class="form-control input-height " value="" />
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Department
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="department" required
                                            placeholder="Department"
                                            class="form-control input-height" />
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Phone number
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="phonenumber" required
                                            placeholder="Enter your phone Number"
                                            class="form-control input-height" />
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Email Address
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="email" name="emailaddress" required
                                            placeholder="Enter your email address"
                                            class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Reporting Manager
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="reportingmanager" required placeholder="Reporting Manager"
                                            class="form-control input-height" value="" />
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Submit</button>
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
