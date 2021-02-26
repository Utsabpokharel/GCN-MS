@extends('admin.layouts.master')
@section('title') Add Enquiry Response @endsection
@section('content')
    <div class="card-body card">
        <form action="" class="form" method="post">
            @csrf
            <div class="form-group">
                <input type="hidden" name="enquiry_by" />
                <br>
                <input type="hidden" name="responded_by"
                />
            </div>
            <div class="form-group">
                <label>Responded Through:</label>
                <select name="responded_through" id="" class="form-control form-control-solid" required>
                    <option selected disabled>--Select any one--</option>
                </select>
                @error('responded_through')
                <div class="text-danger">The responded through field is required</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Message:</label>
                <textarea class="form-control form-control-solid" name="message" cols="30"
                          rows="10"></textarea>
                @error('message')
                <div class="text-danger">The message field is required</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Remarks:</label>
                <textarea class="form-control form-control-solid" name="remarks" cols="30"
                          rows="10"></textarea>
                @error('remarks')
                <div class="text-danger">The remarks field is required</div>
                @enderror
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
@endsection
