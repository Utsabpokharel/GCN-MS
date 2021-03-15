@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Employment Status Verification</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('employmentstatusverification.index')}}">Recruitment</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Employment Status Verification</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>View Employment Status Verification</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('employmentstatusverification.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Employee Name</th>
                                    <th>Employee Code</th>
                                    <th>Employment Status</th>
                                    <th>Period</th>
                                    <th>Approved On</th>
                                    <th>Approved By</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                 @foreach($employmentstatusverification as $value)
                                                        <tr>
                                                            <td>{{$loop->index+1}}</td>
                                                            <td>{{$value->staffname}}</td>
                                                            <td>{{$value->staffcode}}</td>
                                                            <td>{{$value->employmentstatus}}</td>
                                                            <td>{{ $value->period }}</td>
                                                            <td>{{ $value->approvedon }}</td>
                                                            <td>{{ $value->approvedby }}</td>



                                                            <td>
                                                                <a href="{{route('employmentstatusverification.edit',$value->id) }}"
                                                                   class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <form method="POST" action="{{ route('employmentstatusverification.destroy', $value->id) }}" id="deleteForm">
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
                                    <th>Employee Name</th>
                                    <th>Employee Code</th>
                                    <th>Employment Status</th>
                                    <th>Period</th>
                                    <th>Approved On</th>
                                    <th>Approved By</th>
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
