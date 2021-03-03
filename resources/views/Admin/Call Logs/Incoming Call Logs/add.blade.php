@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Incoming Call Logs</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('incoming.index')}}">Call Logs</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Incoming Call Logs</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add Incoming Call Logs</header>
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
                                    <label class="control-label col-md-3">Incoming Time
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="time" name="incomingtime" required placeholder="Incoming Time"
                                            class="form-control input-height" value="" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Incoming Date
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="date" name="incomingdate" required placeholder="Incoming Date"
                                            class="form-control input-height " value="" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Called By
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="calledby" required
                                            placeholder="Called By"
                                            class="form-control input-height " value="" />
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Received By
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="receivedby" required
                                            placeholder="Received By"
                                            class="form-control input-height" />
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Remarks
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <textarea class="form-control form-control-solid" rows="5" name="remarks" placeholder="Remarks"> </textarea>
                                    </div>

                                </div>
                                 <div class="form-group row">
                                    <label class="control-label col-md-3">Purpose
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="purpose" required
                                            placeholder="Purpose"
                                            class="form-control input-height" />
                                    </div>

                                </div>



                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                            <a class="btn btn-default" href="{{route('incoming.index')}}">Cancel</a>
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
