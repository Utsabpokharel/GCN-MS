@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Enquiry Response</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('enquiryresponse.index')}}">Enquiry </a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Enquiry Responses</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Enquiry Responses</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('enquiryresponse.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Enquiry By</th>
                                    <th>Responded By</th>
                                    <th>Responded Through</th>
                                    <th>Message</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($enquiry as $value)
                            <tr>
                                <td>{{$value->step+1}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->description}}</td>
                                <td>
                                <a href="{{route('enquiryresponse.edit',$value->id) }}"
                                class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i></a>
                                <form method="POST" action="{{ route('enquiryresponse.destroy', $value->id) }}" id="deleteForm">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-xs">
                    			<i class="fa fa-trash-o "></i>
                                </button>
								</td>
                            </tr>
                            @endforeach
                            <tfoot>
                                <tr>
                                    <th>S.N.</th>
                                    <th>Enquiry By</th>
                                    <th>Responded By</th>
                                    <th>Responded Through</th>
                                    <th>Message</th>
                                    <th>Remarks</th>
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
