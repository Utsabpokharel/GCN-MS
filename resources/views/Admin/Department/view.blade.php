@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Department</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('department.index')}}">Users</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Department</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Department</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('department.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Department Name</th>
                                    <th>Short Name</th>
                                    <th>Code</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($department as $value)
                            <tr>
                                <td>{{$value->step+1}}</td>
                                <td>{{$value->departmentname}}</td>
                                <td>{{$value->shortname}}</td>
								<td>{{$value->code}}</td>
								<td>
                                <a href="{{route('department.edit',$value->id) }}"
                                class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i></a>
                                <a href="{{route('department.destroy',$value->id)}}"
                                class="btn btn-danger btn-xs">
                    			<i class="fa fa-trash-o "></i>
                                </button>
								</td>
                            </tr>
                            @endforeach 
                            </tbody>
                            <tfoot>
                                <tr>
                                   <th>S.N.</th>
                                    <th>Department Name</th>
                                    <th>Short Name</th>
                                    <th>Code</th>
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
