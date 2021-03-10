@extends('Admin.layouts.master')

@section('content')

    <div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Password Settings</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('password.index')}}">Settings</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Password Settings</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Change Your Password Here</header>


                    </div>
                    <div class="card-body " id="bar-parent">
                        <form method="post" action="">
                            {{csrf_field()}}


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Current Password</label>
                                        <input type="password" class="form-control" id="current_password"
                                               placeholder="Enter Current Password" name="current_password" data-validation="length"
                                               data-validation-length="min1"
                                               data-validation-error-msg="Please enter Current Password">

                                        <p id="correct_password">
                                        </p>
                                    </div>
                                </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pass_confirmation">New Password</label>
                                    <input type="password" class="form-control" id="pass_confirmation"
                                           placeholder="Enter New Password" name="pass_confirmation" data-validation="strength" data-validation-strength="2">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pass">Confirm Password</label>
                                    <input type="password" class="form-control" id="pass"
                                           placeholder="Confirm Password" name="pass_confirmation" data-validation="confirmation" data-validation-confirm="pass_confirmation">
                                </div>
                            </div>




                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>

@endsection





