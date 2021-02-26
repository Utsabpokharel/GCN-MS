@extends('Admin.Layouts.master')
@section('main_content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">View Users</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="#">Users</a>&nbsp;
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">All Users</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>All Users</header>
                        <a class="parent-item pull-right btn btn-primary" href="{{ route('user.create') }}">Add +</a>
                    </div>
                    <div class="card-body " id="bar-parent">
                        <table id="exportTable" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td><a href="{{route('user.show',[$user->id])}}">{{$user->name}}</a></td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->roles['name']}}</td>
                                    @if($user->image)
                                    <td>
                                        <img src="{{asset('Uploads/UserImage/'.$user->image)}}" alt="User image"
                                            width="85" height="75">
                                    </td>
                                    @else
                                    <td>No image available</td>
                                    @endif
                                    <td class="text-left">

                                        <form action="{{ route('user.edit', $user->id)}}" method="GET"
                                            style="display: inline-block">
                                            {{csrf_field()}}
                                            {{method_field('PUT')}}
                                            <button class="btn btn-primary btn-sm" type="submit"><span
                                                    class="fa fa-pencil"></span></button>
                                        </form>

                                        <form action="{{ route('user.destroy', $user->id)}}" method="post"
                                            style="display: inline-block">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button class="btn btn-danger btn-sm" type="submit"><span
                                                    class="fa fa-trash-o"></span></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Image</th>
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
