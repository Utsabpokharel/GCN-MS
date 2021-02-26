@extends('admin.layouts.master')

@section('title')  Add New Batch  - Institute Management System (IMS) @endsection

@section('content')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add New Batch</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add New Batch</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>New Batch Details</header>


                    </div>
                    <div class="card-body " id="bar-parent">
                        <form method="post" action="#" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Batch Name</label>
                                            <input type="text" class="form-control" id="name"
                                                   placeholder="Enter name" name="name" data-validation="length"
                                                   data-validation-length="3-30"
                                                   data-validation-error-msg="Batch Name is required (3-30 chars)">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="year">Year  </label>

                                            <div class="wrapper-year">
                                                <select name="year" class="form-control "data-validation="required"
                                                        data-validation-error-msg="Year is required" onfocus='this.size=10;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                                                    <option selected disabled hidden> Please Select Year</option>

                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="month">Month  </label>
                                            <select name="month" class="form-control" id="month" data-validation="required"
                                                    data-validation-error-msg="Month is required">
                                                <option selected disabled hidden> Please Select Month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="shift">Please Select Course
                                        </label>
                                            <select id="shift" class="form-control select2-multiple" name="course_id[]" multiple data-validation="required"
                                                    data-validation-error-msg="At Least a course is required">
                                            </select>
                                        </div>
                                    </div>

                           <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="section">Please Select Section
                                        </label>
                                            <select id="section" class="form-control " name="section" data-validation="required"
                                                    data-validation-error-msg="At Least a section is required">
                                            </select>
                                        </div>
                                    </div>



                                     <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="shift">Please Select Shifts
                                        </label>
                                            <select id="shift" class="form-control select2-shift" name="shift_id[]" multiple data-validation="required"
                                                    data-validation-error-msg="At Least a shift is required">
                                            </select>
                                        </div>
                                    </div>



                                    <button  type="submit" class="btn btn-primary">Add New Batch</button>
                                    <a href="#" class="btn btn-danger">Go Back</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('css')

<link href="{{asset('public/adminAssets/assets/plugins/select2/css/select2.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('public/adminAssets/assets/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    @endsection




    @section('scripts')
<script src="{{asset('public/adminAssets/assets/plugins/select2/js/select2.js')}}"></script>
<script src="{{asset('public/adminAssets/assets/js/pages/select2/select2-init.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
 <script>
    $.validate({
        lang: 'en',
        modules: 'file',
    });

    $(document).ready(function() {
        $('.select2-multiple').select2({
            placeholder: 'Please Choose Course'
        });

        $('.select2-shift').select2({
            placeholder: 'Please Choose Shifts'
        });
    });

    </script>

      <script src="{{ asset('public/adminAssets/assets/js/sweetalert.min.js') }}"></script>

    <script src="{{ asset('public/adminAssets/assets/js/jquery.sweet-alert.custom.js') }}"></script>                                                                                                                                                           <script type="text/javascript">
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
