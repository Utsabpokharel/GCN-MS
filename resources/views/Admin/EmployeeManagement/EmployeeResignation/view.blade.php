@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Employee Resignation</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('employeeresignation.index')}}">Recruitment</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Employee Resignation</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>View Employee Resignation</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('employeeresignation.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Employee Name</th>
                                    <th>Employee Code</th>
                                    <th>Notice Date</th>
                                    <th>Forward To</th>
                                    <th>Desired Resign Date</th>
                                    <th>Resignation Document</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                 @foreach($employeeresignation as $value)
                                                        <tr>
                                                            <td>{{$loop->index+1}}</td>
                                                            <td>{{$value->staffname}}</td>
                                                            <td>{{$value->staffcode}}</td>
                                                            <td>{{ $value->noticedate }}</td>
                                                            <td>{{ $value->forwardto }}</td>
                                                            <td>{{$value->desireresigndate}}</td>
                                                            
                                                            <td><img src="{{asset('public/images/EmployeeResignation/'.$value->resignationdocument)}}"height="75" width="75" alt="" /></td>

                                                            <td>
                                                                <a href="{{route('employeeresignation.edit',$value->id) }}"
                                                                   class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <form method="POST" action="{{ route('employeeresignation.destroy', $value->id) }}" id="deleteForm">
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
                                    <th>Employee Name</th>
                                    <th>Employee Code</th>
                                    <th>Notice Date</th>
                                    <th>Forward To</th>
                                    <th>Desired Resign Date</th>
                                    <th>Resignation Document</th>
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
