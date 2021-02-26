@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Students</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('student.index')}}">Students</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Students</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Students</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('student.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Image</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Gender</th>
                                    <th>Date of Birth</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Category</th>
                                    <th>Course</th>
                                    <th>Batch</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                    
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Image</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Gender</th>
                                    <th>Date of Birth</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Category</th>
                                    <th>Course</th>
                                    <th>Batch</th>
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
