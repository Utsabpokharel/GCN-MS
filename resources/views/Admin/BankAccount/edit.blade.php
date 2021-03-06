@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Edit Bank Account</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('bankaccount.index')}}">Bank Account</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Bank Account</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add Bank Account</header>
                        <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form action="{{ route('bankaccount.update',$bank->id) }}" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('PUT')
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Select User Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="name" name="user_id" required placeholder="Select User name"
                                            class="form-control input-height" value="{{$bank->user_id}}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Account Holder Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="name" name="accountholder_name" required placeholder="Enter Account Holder Name"
                                            class="form-control input-height " value="{{$bank->accountholder_name}}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Bank Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="name" name="bank_name" required
                                            placeholder="Enter Bank Name"
                                            class="form-control input-height " value="{{$bank->bank_name}}" />
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Branch Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="name" name="branch_name" required
                                            placeholder="Enter Branch Name"
                                            class="form-control input-height"  value="{{$bank->branch_name}}" />
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Account Number
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="name" name="account_number" required
                                            placeholder="Enter Account Numebr"
                                            class="form-control input-height"  value="{{$bank->account_number}}"/>
                                    </div>

                                </div>



                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                            <a class="btn btn-default" href="{{route('bankaccount.index')}}">Cancel</a>
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
