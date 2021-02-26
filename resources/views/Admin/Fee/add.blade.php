@extends('admin.layouts.master')

@section('title')  Add Fees @endsection

@section('content')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add FEE</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add New Fee</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>New Fee Details</header>


                    </div>
                    <div class="card-body " id="bar-parent">
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Student</label>
                                    <select id="student_id" class="form-control " name="student_id"  data-validation="required"
                                                    data-validation-error-msg="At Least a student is required">
                                                    <option selected hidden>Please Select student</option>
                                            </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Title </label>
                                          <input type="text" class="form-control" id="title"
                                                   placeholder="Title" name="title">
                                        </div>
                                    </div>

                             <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="amount">Amount</label>
                                            <input type="number" class="form-control" id="amount"
                                                   placeholder="Enter Amount" name="amount" data-validation="required"
                                                   data-validation-error-msg="Amount is required">
                                        </div>
                                    </div>


                            <button  type="submit" class="btn btn-primary">Add New Fee</button>

                            <a href="#" class="btn btn-danger">Go Back</a>

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


<script type="text/javascript">

        document.getElementById("mode_of_payment").onchange = function() {
            var mode=document.getElementById("mode_of_payment").value;

           if(mode=="cash")
            document.getElementById("selectpayment").style.display = "none";
          else{
             document.getElementById("selectpayment").style.display = "block";

        }

        }


</script>

<script type="text/javascript">

        $("#coursefee").change(function () {
             var fees=$(this).find(':selected').data("fees");
             $("#fees").val(fees);

        });


</script>


    <script src="{{asset('public/adminAssets/assets/plugins/select2/js/select2.js')}}"></script>
    <script src="{{asset('public/adminAssets/assets/js/pages/select2/select2-init.js')}}"></script>

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
