@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Salary</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>

                    <li><a class="parent-item" href="{{route('salary.index')}}">Payroll</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Salary</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add Salary</header>
                        <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form action="{{route('salary.update',$salary->id)}}" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('PUT')
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Staff Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="name" required placeholder="enter staff name"
                                            class="form-control input-height" value="{{$salary->name}}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Designation
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="designation" required placeholder="enter designation"
                                            class="form-control input-height " value="{{$salary->designation}}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">PAN Number
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type=text name="pan" required
                                            placeholder="Enter Enquiry Source"
                                            class="form-control input-height " value="{{$salary->pan}}" />
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Amount
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="number" name="amount" required
                                            placeholder="Enter Amount" value="{{$salary->amount}}"
                                            class="form-control input-height" />
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Currency
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="currency" required
                                            placeholder="Enter Currency Type" value="{{$salary->currency}}"
                                            class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Bank Account Number
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                            <input type="text" name="bankno" required
                                            placeholder="Enter Bank Account Number" value="{{$salary->bankno}}"
                                            class="form-control input-height" />
                                    </div>

                                </div>
                                 <div class="form-group row">
                                    <label class="control-label col-md-3">Payment Method
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                            <input type="text" name="payment" required
                                            placeholder="Enter Bank Account Number" value="{{$salary->payment}}"
                                            class="form-control input-height" />
                                    </div>

                                </div>
                                 <div class="form-group row">
                                    <label class="control-label col-md-3">Joined Date
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                            <input type="date" name="joindate" value="{{$salary->joindate}}"
                                            class="form-control input-height" />
                                    </div>

                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                            <a class="btn btn-default" href="{{route('salary.index')}}">Cancel</a>
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
