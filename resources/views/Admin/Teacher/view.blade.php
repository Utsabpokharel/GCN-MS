@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Teacher</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('teacher.index')}}">Teacher</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Teacher</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Teacher</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('teacher.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                    <th>Category</th>
                                    <th>Time</th>
                                    <th>Email</th>
                                    <th>Adress</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                    
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                    <th>Category</th>
                                    <th>Time</th>
                                    <th>Email</th>
                                    <th>Adress</th>
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