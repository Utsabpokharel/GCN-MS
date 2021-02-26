@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View All Roles</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('role.index')}}">Roles</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Roles</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Roles</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('role.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Super Admin</th>
                                    <th>Admin</th>
                                    <th>Staff</th>
                                    <th>Customer</th>
                                    <th>Vendor</th>
                                    <th>Teacher</th>
                                    <th>Student</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                         
                        <tr>
                            <td>Id</td>
                            <td>Super Admin</td>
                            <td>Admin</td>
                            <td>Staff</td>
                            <td>Customer</td>
                            <td>Vendor</td>
                            <td>Teacher</td>
                            <td>Student</td>
                            <td class="">
                                    <i class="fa fa-eye text-primary"></i>
                            </td>
                        </tr>
                    
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Super Admin</th>
                                    <th>Admin</th>
                                    <th>Staff</th>
                                    <th>Customer</th>
                                    <th>Vendor</th>
                                    <th>Teacher</th>
                                    <th>Student</th>
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
