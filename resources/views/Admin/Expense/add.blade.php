@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Expense</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('expense.index')}}">Expenses</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Expense</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add Expense</header>
                        <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form action="{{ route('expense.store') }}" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Date
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
                    					<input type="date" name="expdate" class="form-control input-height @error('expdate') is-invalid @enderror" data-date-format="yyyy-mm-dd" value="{{old('expdate','')}}" />
										@error('expdate')
										<span class="invalid-feedback" role="alert">
										    <strong>{{$message}}</strong>
										</span>
										@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Particular
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="particular" required placeholder="Enter Particular"
                                            class="form-control input-height " value="" />
                                    </div>
                                </div>
                                <div class="form-group row">
									<label class="control-label col-md-3">Amount
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
                    					<input type="number" name="amount" class="form-control input-height @error('amount') is-invalid @enderror" required placeholder="Enter Amount" value="{{old('amount','')}}" />
										@error('amount')
										<span class="invalid-feedback" role="alert">
										    <strong>{{$message}}</strong>
										</span>
										@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
									<label class="control-label col-md-3">Paid By
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
                                    <select name="paidby" name="paidby" class="form-control input-height @error('paidby') is-invalid @enderror"  value="" >
                                        <option selected disabled="">Paid By</option>
                                        <option value="abc">abc</option>
                                    </select>
										@error('paidby')
										<span class="invalid-feedback" role="alert">
										    <strong>{{$message}}</strong>
										</span>
										@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
									<label class="control-label col-md-3">Category ID
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
                                    <select name="catid" class="form-control input-height @error('catid') is-invalid @enderror"  value="" >
                                        <option selected disabled="">Select Category ID</option>
                                        <option value="abc">abc</option>
                                        
                                    </select>
										@error('catid')
										<span class="invalid-feedback" role="alert">
										    <strong>{{$message}}</strong>
										</span>
										@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
									<label class="control-label col-md-3">Payment Method
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
                                    <select name="payment" class="form-control input-height @error('payment') is-invalid @enderror"  value="">
                                        <option selected disabled="">Select Payment Method</option>
                                        <option value="bank">Bank</option>
                                        <option value="esewa">Esewa</option>
                                        <option value="khalti">Khalti</option>
                                    </select>
                                    @error('payment')
										<span class="invalid-feedback" role="alert">
										    <strong>{{$message}}</strong>
										</span>
									@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
									<label class="control-label col-md-3">Received By
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
                                    <select name="receivedby" class="form-control input-height @error('receivedby') is-invalid @enderror"  value="" >
                                        <option selected disabled="">Select Received By</option>
                                        <option value="abc">abc</option>
                                        
                                    </select>
										@error('receivedby')
										<span class="invalid-feedback" role="alert">
										    <strong>{{$message}}</strong>
										</span>
										@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Expenditure Status
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <select class="form-control input-height" name="status">
                                            <option value="" disabled selected>Select Status</option>
                                        <option value="Available">Available</option>
                                        <option value="Not Available">Unavailable</option>
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                            <a class="btn btn-default" href="{{route('expense.index')}}">Cancel</a>
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
