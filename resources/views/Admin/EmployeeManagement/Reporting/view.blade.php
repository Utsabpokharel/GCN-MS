@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Reporting</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('reporting.index')}}">Recruitment</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Reporting</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>View Reporting</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('reporting.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Employee Name</th>
                                    <th>Employee Code</th>
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Phone Number</th>
                                    <th>Email Address</th>
                                    <th>Reporting Manager</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($reporting as $value)
                                                        <tr>
                                                            <td>{{$loop->index+1}}</td>
                                                            <td>{{$value->staffname}}</td>
                                                            <td>{{$value->staffcode}}</td>
                                                            <td>{{$value->designation}}</td>
                                                            <td>{{ $value->department}}</td>
                                                            <td>{{ $value->phonenumber}}</td>
                                                            <td>{{ $value->emailaddress }}</td>
                                                             <td>{{ $value->reportingmanager }}</td>
                                                             <td>
                                                                <a href="{{route('reporting.edit',$value->id) }}"
                                                                   class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <form method="POST" action="{{ route('reporting.destroy', $value->id) }}" id="deleteForm">
                                                                @csrf
                                                          @method('DELETE')
                                                  <button class="btn btn-danger btn-xs">
                                                     <i class="fa fa-trash-o "></i>
                                                  </button>
                                                </form>

                                                            </td>
                                                        </tr>
                                    @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Staff Name</th>
                                    <th>Staff Code</th>
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Phone Number</th>
                                    <th>Email Address</th>
                                    <th>Reporting Manager</th>
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
