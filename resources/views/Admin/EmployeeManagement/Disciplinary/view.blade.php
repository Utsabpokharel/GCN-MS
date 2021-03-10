@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Disciplinary Cases</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('disciplinary.index')}}">Recruitment</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Disciplinary Cases</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Disciplinary Cases</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('disciplinary.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Staff Name</th>
                                    <th>Case Name</th>
                                    <th>Status</th>
                                    <th>Forward To</th>
                                    <th>Disciplinary Action</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($disciplinary as $value)
                                                        <tr>
                                                            <td>{{$loop->index+1}}</td>
                                                            <td>{{$value->staffname}}</td>
                                                            <td>{{$value->casename}}</td>
                                                            <td>{{$value->status }}</td>
                                                            <td>{{ $value->forwardto }}</td>
                                                            <td>{{ $value->disciplinaryaction }}</td>
                                                            

                                                            <td>
                                                                <a href="{{route('disciplinary.edit',$value->id) }}"
                                                                   class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="{{ route('disciplinary.destroy',$value->id) }}"
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
                                    <th>Staff Name</th>
                                    <th>Case Name</th>
                                    <th>Status</th>
                                    <th>Forward To</th>
                                    <th>Disciplinary Action</th>
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
