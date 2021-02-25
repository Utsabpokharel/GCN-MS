@extends('admin.layouts.master')

@section('title')   Add New Department @endsection

@section('index')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add New Department</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add New Department</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>New Department Details</header>


                    </div>
                    <div class="card-body " id="bar-parent">
                        <form method="post" action="#" enctype="multipart/form-data">
                            @csrf


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">Department ID</label>
                                    <input type="number" class="form-control" id='department_id'
                                           placeholder="Enter Department ID" name='department_id' data-validation="number" value="{{old('department_id')}}">
                                           <p id="idExists" style="color: red; display: none"> ID Already Exists In Our Database</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="departmentname">Department Name</label>
                                    <input type="text" class="form-control" id='departmentname'
                                           placeholder="Enter Department Name" name='departmentname' data-validation="length" value="{{old('departmentname')}}"
                                           data-validation-length="3-400"
                                           data-validation-error-msg="Department Name is required (3-50 chars)">
                                </div>
                            </div>








                            <button type="submit" class="btn btn-primary">Add New Department</button>

                            <a href="#" class="btn btn-info">View All</a>

                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('css')

    <link href="{{asset('adminAssets/assets/plugins/select2/css/select2.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('adminAssets/assets/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

@endsection




@section('scripts')

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker({
                maxDate: 0,

                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd'

            });
        } );
    </script>



    <script src="{{asset('adminAssets/assets/plugins/select2/js/select2.js')}}"></script>
    <script src="{{asset('adminAssets/assets/js/pages/select2/select2-init.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>
        $.validate({
            lang: 'en',
            modules: 'file',
        });

    </script>
    <script>
        /*function checkUserId() {
            var id = $("#department_id").val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '{{ route('checkUserId') }}',
                data: { id:id},
                success: function (resp) {
                    if( resp == "exists"){
                        $("#idexists").show();
                    }
                }, error: function () {
                    alert("Error");
                }
            });
        }*/



        $(document).ready(function() {
            $('.select2-multiple').select2({
                placeholder: 'Please Choose Service'
            });


        });
    </script>
@endsection
