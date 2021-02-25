@extends('admin.layouts.index')
@section('page_title','Add User')
@section('content')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" />
@endpush
<div class="card-body card">
  <form class="form" method="post" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label>Email address</label>
              {{-- <input type="email" name="email" class="form-control form-control-solid @error('email') is-invalid @enderror" placeholder="Enter Email" /> --}}
              <select name="email" id="email" class="form-control form-control-solid @error('email') is-invalid @enderror">
                <option selected disabled>Select Email</option>
                @foreach($staffs as $name)
                <option value="{{$name->email}}" class="form-control">{{$name->email}}</option>
                @endforeach

                @foreach($vendors as $name)
                <option value="{{$name->email}}" class="form-control">{{$name->email}}</option>
                @endforeach

                @foreach($customers as $name)
                <option value="{{$name->email}}" class="form-control">{{$name->email}}</option>
                @endforeach
              </select>
              @error('email')
              <span class="invalid-feedback" role="alert"> {{$message}} </span>
              @enderror
            </div>
          </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Name</label>
          {{--<input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" name="name"> --}}
          <select name="name" id="name" class="form-control form-control-solid @error('name') is-invalid @enderror">
            <option selected disabled value="">Select Name</option>
            @foreach($staffs as $name)
            <option value="{{$name->fname}} {{$name->lname}}" class="form-control">{{$name->fname}} {{$name->lname}}</option>
            @endforeach

            @foreach($vendors as $name)
            <option value="{{$name->fname}} {{$name->lname}}" class="form-control">{{$name->fname}} {{$name->lname}}</option>
            @endforeach

            @foreach($customers as $name)
            <option value="{{$name->fname}} {{$name->lname}}" class="form-control">{{$name->fname}} {{$name->lname}}</option>
            @endforeach
          </select>
          @error('name')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Roles</label>
          <select name="roleid" id="role" class="form-control form-control-solid @error('roleid') is-invalid @enderror">
            <option selected disabled>Select a Role</option>
            @foreach($roles as $roleid)
            <option value="{{$roleid->id}}" class="form-control">{{$roleid->name}}</option>
            @endforeach
          </select>
          @error('roleid')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Department</label>
          <select name="department" id="department" class="form-control form-control-solid @error('department') is-invalid @enderror" data-validation="required">
            <option selected disabled value="">Please Select...</option>
            @foreach($departments as $department)
            <option value="{{$department->id}}" class="form-control">{{$department->dep_name}}</option>
            @endforeach
          </select>
          @error('department')
          <span class="invalid-feedback" role="alert"> {{$message}}</span>
          @enderror
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control form-control-solid @error('password') is-invalid @enderror" placeholder="Enter Password" />
          @error('password')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" name="confirm_password" class="form-control form-control-solid @error('confirm_password') is-invalid @enderror" placeholder="Enter Confirm Password" />
          @error('confirm_password')
          <span class="invalid-feedback" role="alert"> {{$message}} </span>
          @enderror
        </div>
      </div>
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary mr-2" value="submit">Add</button>
      <button type="reset" class="btn btn-secondary" value="reset">Reset</button>
      <a href="{{route('user.view')}}" class="btn btn-danger mr-2">Cancel</a>
    </div>
  </form>
</div>
@endsection

