@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Exam </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('exam.index')}}">Exam</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Exam</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add Exam</header>
                        <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form action="{{ route('exam.store') }}" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Exam Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="name" required placeholder="Exam Name"
                                            class="form-control input-height" value="" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Select Course
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                    <select name="course" id="course"
										class="form-control input-height @error('course') is-invalid @enderror" value="{{old('course','')}}" />
										<option selected disabled="">Select Course </option>
										<option value="abc">abc</option>
									</select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Date of Exam
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="date" name="examdate" required
                                            placeholder="Enter Amount"
                                            class="form-control input-height " value="" />
                                    </div>

                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                            <a class="btn btn-default" href="{{route('exam.index')}}">Cancel</a>
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
