@extends('admin.layouts.master')
@section('page_title','Add enquiry')

@section('script')
    <script>

        $('#is_customer').change(function () {
            var is_checked = $('#is_customer').prop('checked');
            if (is_checked) {
                $('#notcustomer').addClass('d-none');
                $('#customer').removeClass('d-none');
                $('.notcustomer').each(function () {
                    $(this).val('');
                });
            } else {
                $('#customer').addClass('d-none');
                $('#notcustomer').removeClass('d-none');
                $('.customer').each(function () {
                    $(this).val('--select any one--');
                });
            }
        });
    </script>
@endsection

@section('index')
    <div class="card-body card">
        <form action="#" class="form" method="post">
            @csrf
            <div class="form-group">
                <label>Is Customer:</label>
                <input type="checkbox" name="is_customer" id="is_customer" value="yes"
                />
            </div>
            <div class="form-group d-none" id="customer">
                <label>Enquiry Name :</label>
                <select name="customer_id" class="form-control form-control-solid customer">
                    <option disabled selected>--select any one--</option>
                </select>
            </div>
            <div id="notcustomer">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="name" class="form-control form-control-solid notcustomer" placeholder="Enter full name"
                           name="name"
                    />
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control form-control-solid notcustomer" placeholder="Enter email"
                           name="email"
                    />
                </div>
                <div class="form-group">
                    <label>Contact Number:</label>
                    <input type="number" class="form-control form-control-solid notcustomer"
                           placeholder="Enter contact number" name="phone"
                    />
                </div>
            </div>
            <div class="form-group">
                <label>Enquiry Category:</label>
                <select name="category_id" id="" class="form-control form-control-solid" required>
                    <option selected disabled>--Select any one--</option>
                </select>
                @error('category_id')
                <div class="text-danger">The enquiry category field is required</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Enquiry Source:</label>
                <select name="source_id" id="" class="form-control form-control-solid" required>
                    <option selected disabled>--Select any one--</option>
                </select>
                @error('source_id')
                <div class="text-danger">The enquiry source field is required</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Date:</label>
                <input type="date" class="form-control form-control-solid" placeholder="Enter full name" name="date"
                />
                @error('date')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>time:</label>
                <input type="time" class="form-control form-control-solid" placeholder="Enter full name" name="time"
                />
                @error('time')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Remarks:</label>
                <textarea class="form-control form-control-solid" name="remarks" cols="30"
                          rows="10"></textarea>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
    </div>
@endsection
