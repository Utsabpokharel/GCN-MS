@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Documents</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>

                    <li><a class="parent-item" href="{{route('documentmanagement.index')}}">Recruitment</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Documents</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add Important Documents</header>
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
                                        <input type="text" name="staffname" required placeholder="Select Staff"
                                            class="form-control input-height"/>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Bank Account Number
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="bankaccountnumber" required placeholder="Bank Account Number"
                                            class="form-control input-height"/>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">PAN Number
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="pannumber" required placeholder="PAN Number"
                                            class="form-control input-height"/>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Provident Fund Document
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="file" name="pfdocument"
                                            class="form-control input-height"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">CIT Document
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="file" name="citdocument"
                                            class="form-control input-height " value="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Appointment Document
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="file" name="appointmentdocument"
                                            class="form-control input-height " value="" />
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label class="control-label col-md-3">Contract Document
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="file" name="contractdocument"
                                            class="form-control input-height " value="" />
                                    </div>
                                </div>





                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                            <a class="btn btn-default" href="{{route('documentmanagement.index')}}">Cancel</a>
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
