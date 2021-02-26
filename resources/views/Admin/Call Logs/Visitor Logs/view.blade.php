@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Visitor Logs</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('visited.index')}}">Users</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Visitor Logs</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Visitor Logs</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('visited.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Incoming Time</th>
                                    <th>Incoming Date</th>
                                    <th>Visitor Name</th>
                                    <th>Handled By</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                   <th>#</th>
                                    <th>Incoming Time</th>
                                    <th>Incoming Date</th>
                                    <th>Visitor Name</th>
                                    <th>Handled By</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
