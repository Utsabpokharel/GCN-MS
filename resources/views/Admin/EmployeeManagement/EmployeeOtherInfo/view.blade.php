@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Employee Other Info</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('employeeotherinfo.index')}}">Recruitment</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">View Employee Other Info</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>View Employee Other Info</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('employeeotherinfo.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Employee Code</th>
                                    <th>Title</th>
                                    <th>Organisation</th>
                                    <th>Father's Name</th>
                                    <th>Mother's Name</th>
                                    <th>Grandfather's Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                 @foreach($employeeotherinfo as $value)
                                                        <tr>
                                                            <td>{{$loop->index+1}}</td>
                                                            <td>{{$value->staffcode}}</td>
                                                            <td>{{$value->title}}</td>
                                                            <td>{{$value->organisation}}</td>
                                                            <td>{{ $value->fathername}}</td>
                                                            <td>{{ $value->mothername}}</td>
                                                            <td>{{ $value->grandfathername }}</td>


                                                            <td>
                                                                <a href="{{route('employeeotherinfo.edit',$value->id) }}"
                                                                   class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="{{ route('employeeotherinfo.destroy',$value->id) }}"
                                                                    class="btn btn-danger btn-xs">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>

                                                            </td>
                                                        </tr>
                                                    @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Employee Code</th>
                                    <th>Title</th>
                                    <th>Organisation</th>
                                    <th>Father's Name</th>
                                    <th>Mother's Name</th>
                                    <th>Grand Father's Name</th>
                                    <th>Action</th>

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
