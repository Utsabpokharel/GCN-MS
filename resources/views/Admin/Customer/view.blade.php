@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View All Customer</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('customer.index')}}">Customers</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Customer</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Customer</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('customer.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($customer as $value)
                            <tr>
                                <td>{{$value->step+1}}</td>
                                <td>{{$value->image}}</td>
								<td>{{$value->fname}}{{$value->lname}}</td>
								<td>{{$value->gender}}</td>
								<td>{{$value->email}}</td>
								<td>
                                <a href="{{route('customer.edit',$value->id) }}"
                                class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i></a>
                                <a href="{{route('customer.destroy',$value->id)}}"
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
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Email</th>
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
