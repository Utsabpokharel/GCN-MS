@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Employee Contract</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('employeecontract.index')}}">Recruitment</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">View Employee Contract</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>View Employee Contract</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('employeecontract.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Employee Name</th>
                                    <th>Employee Code</th>
                                    <th>Employment Status</th>
                                    <th>Began On</th>
                                    <th>Ended On</th>
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
                                    <th>Employee Name</th>
                                    <th>Employee Code</th>
                                    <th>Employment Status</th>
                                    <th>Began On</th>
                                    <th>Ended On</th>
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
