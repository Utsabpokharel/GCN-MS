@extends('admin.layouts.master')

@section('title')  Add New Course  - Institute Management System (IMS) @endsection

@section('content')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add New Course</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add New Course</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>New Course Details</header>


                    </div>
                    <div class="card-body " id="bar-parent">
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Course Name</label>
                                            <input type="text" class="form-control" id="name"
                                                   placeholder="Enter name" name="name" data-validation="length"
                                                   data-validation-length="3-400"  pattern="[a-zA-Z\s]*"
                                                   data-validation-error-msg="Course Name is required (3-50 chars)">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="duration">Duration (in Weeks) </label>
                                            <input type="text" class="form-control" id="duration"
                                                   placeholder="Enter Duration" name="duration" data-validation="length"  required
                                                   data-validation-error-msg="Duration in digit is required" data-validation-length="0-9" >
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fees">Fees </label>
                                            <input type="number" class="form-control" id="fees"
                                                   placeholder="Enter Fees" name="fees" data-validation="required"
                                                   data-validation-error-msg="Fee is required">
                                        </div>
                                    </div>



                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="hidden" name="current_image">
                                            <input type="file" class="form-control" id="image"
                                                   name="image" data-validation="mime size"
                                                   data-validation-allowing="jpg, png"
                                                   data-validation-max-size="1024kb"
                                                   data-validation-error-msg-required="Please Upload User Image">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">Course Description </label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="checkbox" name="status" id="status" value="1" checked>
                                            <label for="status">Active</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <button  type="submit" class="btn btn-primary">Add New Course</button>

                            <a href="#" class="btn btn-danger">Go Back</a>

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



    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                'height' : 130
            });
        });
    </script>
@endsection
