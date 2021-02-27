@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Income</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('income.index')}}">Incomes</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Income</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add Income</header>
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
									<label class="control-label col-md-3">Date
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
                    					<input type="date" class="form-control input-height @error('date') is-invalid @enderror" data-date-format="yyyy-mm-dd" value="{{old('date','')}}" />
										@error('date')
										<span class="invalid-feedback" role="alert">
										    <strong>{{$message}}</strong>
										</span>
										@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
									<label class="control-label col-md-3">Amount
										<span class="required"> * </span>
									</label>
									<div class="col-md-5">
                    					<input type="number" class="form-control input-height @error('amount') is-invalid @enderror" data-date-format="yyyy-mm-dd" value="{{old('amount','')}}" />
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
                                    <select name="paid" class="form-control input-height @error('paid') is-invalid @enderror"  value="" >
                                        <option selected disabled="">Paid By</option>
                                        
                                    </select>
										@error('paid')
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
                                    <select name="cat_id" class="form-control input-height @error('cat_id') is-invalid @enderror"  value="" >
                                        <option selected disabled="">Select Category ID</option>
                                        
                                    </select>
										@error('cat_id')
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
                                    <select name="mode_of_payment" class="form-control input-height @error('mode_of_payment') is-invalid @enderror"  value="">
                                        <option selected disabled="">Select Payment Method</option>
                                        <option value="bank">Bank</option>
                                        <option value="esewa">Esewa</option>
                                        <option value="khalti">Khalti</option>
                                    </select>
                                    @error('mode_of_payment')
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
                                    <select name="received" class="form-control input-height @error('received') is-invalid @enderror"  value="" >
                                        <option selected disabled="">Select Received By</option>
                                        
                                    </select>
										@error('received')
										<span class="invalid-feedback" role="alert">
										    <strong>{{$message}}</strong>
										</span>
										@enderror
                                    </div>
                                </div>
                            </div>
                            
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                            <a class="btn btn-default" href="{{route('income.index')}}">Cancel</a>
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
