@extends('Admin.layouts.master')

@section('content')

   <div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add General Settings</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('emailsettings.index')}}">General Settings</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add General Settings</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Update Your Site Information</header>


                    </div>
                    <div class="card-body " id="bar-parent">
                        <form method="post" action="" enctype="multipart/form-data">

                            {{csrf_field()}}


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="website_logo">Website Logo</label>
                                                <input type="file" class="form-control" name="website_logo" id="website_logo"
                                                       name="website_logo">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="short_name">Website Name</label>
                                                <input type="text" class="form-control" name="website_name" id="website_name"
                                                       placeholder="Enter Name of Website" name="website_name"  >
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="tagline">Website Link</label>
                                                <input type="text" class="form-control" name="websitelink" id="websitelink"
                                                       placeholder="Enter Name " name="tagline" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="tagline">Email Address</label>
                                                <input type="email" class="form-control" name="emailaddress" id="emailaddress"
                                                       placeholder="Enter Name " name="tagline" >
                                            </div>
                                        </div>












                                    </div>

                                </div>






                            <button type="submit" class="btn btn-primary">Update Site Settings</button>
                        </form>
                    </div>
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

@endsection
