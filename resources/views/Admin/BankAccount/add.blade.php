@extends('admin.layouts.master')
@section('title') Add Bank Account @endsection
@section('index')


<div class="card-body card">
    <form class="form" method="post" action="#" >
     @csrf
      <div class="row">

                                 <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_id">Select User Name</label>

                                    <select name="user_id"  class="form-control form-control-solid @error('user_id') is-invalid @enderror"
                                            >
                                        <option selected disabled="">Select  User Name</option>


                                    </select>
                                     @error('user_id')
          <span class="invalid-feedback" role="alert"></span>
          @enderror
                                   </div>
                                  </div>


<div class="col-sm-6">
     <div class="form-group">
      <label>Account Holder Name:</label>

      <input type="text" name="accountholder_name" class="form-control form-control-solid @error('accountholder_name') is-invalid @enderror" placeholder="Enter Account Holder Name"/>
      @error('accountholder_name')
          <span class="invalid-feedback" role="alert"></span>
          @enderror
     </div>
   </div>







     <div class="col-md-6">
      <div class="form-group">
      <label>Bank Name:</label>
      <input type="text" name="bank_name" class="form-control form-control-solid @error('bank_name') is-invalid @enderror" placeholder="Enter Bank Name"/>

      @error('dob')
          <span class="invalid-feedback" role="alert"></span>
          @enderror
     </div>
   </div>
<div class="col-md-6">
     <div class="form-group">
      <label>Branch Name:</label>

      <input type="text" name="branch_name" class="form-control form-control-solid @error('branch_name') is-invalid @enderror" placeholder="Enter Branch Name"/>
      @error('branch_name')
          <span class="invalid-feedback" role="alert"></span>
          @enderror
     </div>
</div>

<div class="col-md-6">
     <div class="form-group">
      <label>Account Number:</label>

      <input type="text" name="account_number" class="form-control form-control-solid @error('account_number') is-invalid @enderror" placeholder="Enter your Account Number"/>
      @error('account_number')
          <span class="invalid-feedback" role="alert"></span>
          @enderror
     </div>
</div>

<div class="col-md-12">

    <div class="card-footer">
          <input type="submit" value="submit" class="btn btn-success">
          <input type="reset" value="reset" class="btn btn-danger">
        </div>
    </div>
   </form>
</div>
@endsection
