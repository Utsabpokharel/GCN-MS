@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View License</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('license.index')}}">Recruitment</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">License</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All License List</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('license.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($license as $value)
                                                        <tr>
                                                            <td>{{$loop->index+1}}</td>
                                                            <td>{{$value->code}}</td>
                                                            <td>{{$value->name}}</td>
                                                            <td>{{$value->description}}</td>
                                                             <td>
                                                                <a href="{{route('license.edit',$value->id) }}"
                                                                   class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <form method="POST" action="{{ route('license.destroy', $value->id) }}" id="deleteForm">
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
                                    <th>Code</th>
                                    <th>Name</th>
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
