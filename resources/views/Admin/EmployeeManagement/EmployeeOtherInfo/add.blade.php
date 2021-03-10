@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Employee Other Info</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>

                    <li><a class="parent-item" href="{{route('employeeotherinfo.index')}}">Employee Management</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Employee Other Info</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add Employee Other Info</header>
                        <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form action="{{ route('employeeotherinfo.store') }}" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Employee Code
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="staffcode" required placeholder="enter staffcode"
                                            class="form-control input-height" value="" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Title
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="title" required placeholder="title"
                                            class="form-control input-height " value="" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Organisation
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="organisation"required placeholder="organisation" required
                                            class="form-control input-height " value="" />
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Father's Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="fathername"
                                            class="form-control input-height" />
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Mother's Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="mothername" required
                                            class="form-control input-height" />
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Grand Father's Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="grandfathername" required
                                            class="form-control input-height" />
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Parent's Contact Number
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="parentcontactnumber" required
                                            class="form-control input-height" />
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Marital Status
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                    <input type="text" name="maritalstatus" placeholder="bloodgroup" required
                                            class="form-control input-height " value="" />
                                </div>
                            </div>
                            <div class="form-group row">
                                    <label class="control-label col-md-3">Spouse Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                    <input type="text" name="spousename" placeholder="Enter name of your Spouse" required
                                            class="form-control input-height " value="" />
                                </div>
                            </div>

                                <div class="form-group row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-5">
                                <b>Incase of Emergency </b>
                                </div>
                                </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Person to be Notified
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="emergencyperson" required
                                            class="form-control input-height" />
                                    </div>

                                </div>
                                 <div class="form-group row">
                                    <label class="control-label col-md-3">Contact Number
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                    <input type="text" name="emergencynumber" placeholder="emergencynumber" required
                                            class="form-control input-height " value="" />
                                </div>
                            </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                            <a class="btn btn-default" href="{{route('employeeotherinfo.index')}}">Cancel</a>
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
