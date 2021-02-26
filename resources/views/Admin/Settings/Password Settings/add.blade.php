@extends('admin.layouts.master')

@section('title')  Change Password - All Management System (All MS) @endsection

@section('index')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Change Password - {{ auth()->user()->name }}</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Change Password </li>
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
                        <form method="post" action="{{ route('updatePassword', auth()->user()->id) }}">
                            @csrf


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

@endsection




@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>
        $.validate({
            lang: 'en',
            modules: 'file',
        });

    </script>

    <script>
        $.validate({
            modules : 'security',
            onModulesLoaded : function() {
                var optionalConfig = {
                    fontSize: '12pt',
                    padding: '4px',
                    bad : 'Very bad',
                    weak : 'Weak',
                    good : 'Good',
                    strong : 'Strong'
                };

                $('input[name="pass"]').displayPasswordStrength(optionalConfig);
            }
        });
    </script>

    <script src="{{ asset('public/adminAssets/assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('public/adminAssets/assets/js/jquery.sweet-alert.custom.js') }}"></script>
    <script type="text/javascript">
        @if(session('flash_message'))
        swal("Success!", "{!! session('flash_message') !!}", "success")
        @endif

        @if(session('flash_error'))
        swal("Error", "{!! session('flash_error') !!}")
        @endif
    </script>

    <script>
        $("#current_password").keyup( function () {
           var current_password = $("#current_password").val();

           $.ajax({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               type: 'post',
               url: 'check-password',
               data: {
                   current_password:current_password},
               success: function (resp) {
                   if(resp =="true"){
                       $("#correct_password").text("Current Password Matches").css("color", "green");
                   } else if (resp =="false"){
                       $("#correct_password").text("Password Does Not Match").css("color", "red");
                   }
               }, error: function (resp) {
                   alert("Error");
               }

           });
        });
    </script>

@endsection
