@extends('admin.layouts.master')

@section('title')  View All Department Details @endsection

@section('content')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">All Department Details List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="javascript:">Service</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">View All Department Details</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line">

                    <div class="tab-content">
                        <div class="tab-pane active fontawesome-demo" id="tab1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-box">
                                        <div class="card-head">
                                            <header>All Department Details List</header>

                                        </div>
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="btn-group">
                                                        <a href="#" id="addRow"
                                                           class="btn btn-info" style="margin-right: 10px;">
                                                            Add New  <i class="fa fa-plus"></i>
                                                        </a>


                                                    </div>
                                                </div>
                                                                                         </div>
                                            <div class="table-scrollable">
                                                <table
                                                        class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                        id="example4">
                                                    <thead>
                                                     <tr>
                                                        <th>#</th>
                                                        <th>Department ID </th>
                                                        <th>Department Name </th>
                                                        <th>Staff Count</th>
                                                        <th>Action</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <!-- data tables -->
    <link href="{{ asset('adminAssets/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <!-- data tables -->
    <script src="{{ asset('adminAssets/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminAssets/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminAssets/assets/js/pages/table/table_data.js') }}"></script>
@endsection
