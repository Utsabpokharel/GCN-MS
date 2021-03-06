@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Level</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('user.index')}}">Levels</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Level</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add Level</header>
                        <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form action="{{route('level.update',$level->id)}}" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('PUT')
                            <div class="form-body">
                            <div class="form-group row">
                                    <label class="control-label col-md-3">Level
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="text" name="level" required placeholder="Enter Level"
                                            class="form-control input-height @error('level') is-invalid @enderror" value="{{$level->level}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Description
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <textarea name="description" cols="30" rows="10" class="form-control  @error('description') is-invalid @enderror"
                                        placeholder="Enter Description" value="{{$level->description}}"></textarea>
                                    </div>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
    
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                            <a class="btn btn-default" href="{{route('level.index')}}">Cancel</a>
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
