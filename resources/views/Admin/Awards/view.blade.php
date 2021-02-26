@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Award</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('award.index')}}">Award</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Award</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Award</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('award.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                <th>S.N.</th>
						<th>Staff Name</th>
						<th>Award Name</th>
						<th>Gift</th>
						<th>Award Date</th>
						<th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                <th>S.N.</th>
						<th>Staff Name</th>
						<th>Award Name</th>
						<th>Gift</th>
						<th>Award Date</th>
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
