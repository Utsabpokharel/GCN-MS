@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Level</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('level.index')}}">Levels</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Level</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Level</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('level.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                <th>S.N.</th>
                                    <th>Level</th>
                                    <th>Description</th>                                  
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($level as $value)
                            <tr>
                                <td>{{$value->step+1}}</td>
                                <td>{{$value->level}}</td>
                                <td>{{$value->description}}</td>
                                <td>
                                <a href="{{route('level.edit',$value->id) }}"
                                class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i></a>
                                <a href="{{route('level.destroy',$value->id)}}"
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
                                    <th>Level</th>
                                    <th>Description</th>                                 
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
