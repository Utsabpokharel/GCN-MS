@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Edit Subject</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>

                    <li><a class="parent-item" href="{{route('rcourse.index')}}">Subject</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Edit Subject</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Edit Subject</header>
                        <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                    </div>
                    <div class="card-body" id="bar-parent">
                         <form class="form" method="post" action="{{route('rcourse.update',$rcourse->id)}}">
                            {{csrf_field()}}
                            @method('PUT')
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Title
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="title" id="title" required placeholder="Enter title"
                                            class="form-control input-height" value="{{ old('title',$rcourse->title) }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Department
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="department" id="department" required placeholder="Enter Department"
                                            class="form-control input-height " value="{{ old('department',$rcourse->department) }}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Coordinator
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type=text name="coordinator" id="coordinator" required
                                            placeholder="Enter Name of Coordinator"
                                            class="form-control input-height " value="{{ old('coordinator',$rcourse->coordinator) }}" />
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Currency
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="currency" id="currency" required
                                            placeholder="Select Currency"
                                            class="form-control input-height" value="{{ old('currency',$rcourse->currency) }}" />
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Version
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="version" id="version" required
                                            placeholder="Enter version"
                                            class="form-control input-height" value="{{ old('version',$rcourse->version) }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Cost
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="number" name="cost" id="cost" required
                                            placeholder="Enter Cost"
                                            class="form-control input-height" value="{{ old('cost',$rcourse->cost) }}" />
                                    </div>
                                </div>
                               <div class="form-group row">
                                    <label class="control-label col-md-3">Description
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" value="{{ old('description',$rcourse->description) }}"></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Update</button>
                                            <a class="btn btn-default" href="{{route('rcourse.index')}}">Cancel</a>
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
