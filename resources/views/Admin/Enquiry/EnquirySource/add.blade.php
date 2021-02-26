@extends('admin.layouts.default')
@section('title') Add Enquiry Source @endsection
@section('content')
    <div class="card-body card">
        <form action="" class="form" method="post">
            @csrf
            <div class="form-group">
                <label>Source Name <span class="text-danger" style="font-size:20px;">*</span>:</label>
                <input type="name" class="form-control form-control-solid" placeholder="Enter full name" name="name"
                />
                @error('name')
                <div class="text-danger"></div>
                @enderror
            </div>
            <div class="form-group">
                <label>Description:</label>
                <textarea class="form-control form-control-solid" name="description" cols="30" rows="10"></textarea>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
@endsection
