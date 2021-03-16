@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add User</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('user.index')}}">Users</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add User</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Add User</header>
                        <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                            data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </button>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form action="{{ route('user.update',$user->id) }}" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"
                            enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('PUT')
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Email
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="email" name="email" required placeholder="Enter User Email"
                                            class="form-control input-height " value="{{$user->email}}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Password
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="password" name="password" required
                                            placeholder="Enter Password (Min: 4 - Max: 15)"
                                            class="form-control input-height " value="{{$user->password}}" />
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">Confirm Password
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <input type="password" name="password_confirmation" required
                                            placeholder="Re-enter and Confirm Your password "
                                            class="form-control input-height" />
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="control-label col-md-3">User Role
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <select class="form-control input-height" name="role" value="{{$user->role}}" >
                                            <option value="" disabled selected>Select Role</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" class="btn btn-info m-r-20">Submit</button>
                                            <a class="btn btn-default" href="{{route('user.index')}}">Cancel</a>
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
</div>
@endsection
