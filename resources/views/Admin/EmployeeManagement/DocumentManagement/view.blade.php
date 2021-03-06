@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Document Management</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('documentmanagement.index')}}">Employee Management</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Document Management</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Document Management</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('documentmanagement.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Staff Name</th>
                                    <th>Bank Account Number</th>
                                    <th>PAN Document</th>
                                    <th>PF Document</th>
                                    <th>CIT Document</th>
                                    <th>Appointment Document</th>
                                    <th>Contract Document</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                           @foreach($documentmanagement as $value)
                                                        <tr>
                                                            <td>{{$loop->index+1}}</td>
                                                            <td>{{$value->staffname}}</td>
                                                            <td>{{$value->bankaccountnumber}}</td>
                                                            <td><img src="{{ asset('public/images/PAN Document/'.$value->pandocument) }}" height="75" width="75" alt="" /></td>
                                                            <td><img src="{{ asset('public/images/PF Document/'.$value->pfdocument) }}" height="75" width="75" alt="" /> </td>
                                                            <td><img src="{{ asset('public/images/CIT Document/'.$value->citdocument) }}" height="75" width="75" alt="" /> </td>
                                                            <td><img src="{{ asset('public/images/Appointment Document/'.$value->appointmentdocument) }}" height="75" width="75" alt="" /> </td>
                                                            <td><img src="{{ asset('public/images/Contract Document/'.$value->contractdocument) }}" height="75" width="75" alt="" /></td>


                                                            <td>
                                                                <a href="{{route('documentmanagement.edit',$value->id) }}"
                                                                   class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                               <form method="POST" action="{{ route('documentmanagement.destroy', $value->id) }}" id="deleteForm">
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
                                    <th>Staff Name</th>
                                    <th>Bank Account Number</th>
                                    <th>PAN Document</th>
                                    <th>PF Document</th>
                                    <th>CIT Document</th>
                                    <th>Appointment Document</th>
                                    <th>Contract Document</th>
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
