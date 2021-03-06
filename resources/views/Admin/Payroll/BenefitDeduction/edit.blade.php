@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Benefit/Deduction</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('benefitdeduction.index')}}">PayRoll</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Benefit/Deduction</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add Benefit/Deduction</header>
                        <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form action="{{route('benefitdeduction.update',$benefit->id)}}" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('PUT')
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Staff Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="name" required placeholder="Select Staff Name"
                                            class="form-control input-height" value="{{$benefit->name}}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Bank Account Number
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="number" name="bankno" required placeholder="Select Bank Account Number"
                                            class="form-control input-height " value="{{$benefit->bankno}}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Amount
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="number" name="amount" required
                                            placeholder="Enter Amount"
                                            class="form-control input-height " value="{{$benefit->amount}}" />
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Currency
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="number" name="currency" required
                                            placeholder="Enter Currency"
                                            class="form-control input-height " value="{{$benefit->currency}}" />
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Benefit/Deduction
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="number" name="benefit" required
                                            placeholder="Enter Amount"
                                            class="form-control input-height " value="{{$benefit->benefit}}" />
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Payment Method
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="number" name="payment" required
                                            placeholder="Enter Amount"
                                            class="form-control input-height " value="{{$benefit->payment}}" />
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Reason
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                    <textarea name="reason" id="reason" cols="30" rows="10" value="{{$benefit->reason}}"
                                    class="form-control"></textarea>
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                            <a class="btn btn-default" href="{{route('benefitdeduction.index')}}">Cancel</a>
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
