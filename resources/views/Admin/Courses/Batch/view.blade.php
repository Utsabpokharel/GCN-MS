@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Batch</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('batch.index')}}">Batch</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Batch</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Batch</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('batch.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Batch Name</th>
                                    <th>Year</th>
                                    <th>Month</th>
                                    <th>Courses</th>
                                    <th>Shift</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($batch as $value)
                            <tr>
                                <td>{{$value->step+1}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->year}}</td>
								<td>{{$value->month}}</td>
								<td>{{$value->course}}</td>
								<td>{{$value->shift}}</td>
								<td>
                                <a href="{{route('batch.edit',$value->id) }}"
                                class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i></a>
                                <form method="POST" action="{{ route('batch.destroy', $value->id) }}" id="deleteForm">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-xs">
                    			<i class="fa fa-trash-o "></i>
                                </button>
								</td>
                            </tr>
                            @endforeach 

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>S.N.</th>
                                    <th>BatchName</th>
                                    <th>Year</th>
                                    <th>Month</th>
                                    <th>Courses</th>
                                    <th>Section</th>
                                    <th>Shift</th>
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
