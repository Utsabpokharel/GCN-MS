@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Subject</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('rcourse.index')}}">Employee Management</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Subject</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Subjects</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('rcourse.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Department</th>
                                    <th>Coordinator</th>
                                    <th>Version</th>
                                    <th>Currency</th>
                                    <th>Cost</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                   @foreach($rcourse as $value)
                                                        <tr>
                                                            <td>{{$loop->index+1}}</td>
                                                            <td>{{$value->title}}</td>
                                                            <td>{{$value->department}}</td>
                                                            <td>{{$value->coordinator}}</td>
                                                            <td>{{ $value->version }}</td>
                                                            <td>{{ $value->currency }}</td>
                                                            <td>{{ $value->cost }}</td>
                                                                <a href="{{route('rcourse.edit',$value->id) }}"
                                                                   class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="{{ route('rcourse.destroy',$value->id) }}"
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
                                    <th>Title</th>
                                    <th>Department</th>
                                    <th>Coordinator</th>
                                    <th>Version</th>
                                    <th>Currency</th>
                                    <th>Cost</th>
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
