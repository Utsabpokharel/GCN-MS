@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Bank Account</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('bankaccount.index')}}">Users</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Bank Account</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Bank Account</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('bankaccount.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>User Name</th>
                                    <th>Account Holder Name</th>
                                    <th>Bank Name</th>
                                    <th>Branch Name</th>
                                    <th>Account Number</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($bank as $value)
                            <tr>
                                <td>{{$value->step+1}}</td>
                                <td>{{$value->user_id}}</td>
                                <td>{{$value->accountholder_name}}</td>
								<td>{{$value->bank_name}}</td>
								<td>{{$value->branch_name}}</td>
								<td>{{$value->account_number}}</td>
								<td>
                                <a href="{{route('bankaccount.edit',$value->id) }}"
                                class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i></a>
                                <a href="{{route('bankaccount.destroy',$value->id)}}"
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
                                    <th>User Name</th>
                                    <th>Account Holder Name</th>
                                    <th>Bank Name</th>
                                    <th>Branch Name</th>
                                    <th>Account Number</th>
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
