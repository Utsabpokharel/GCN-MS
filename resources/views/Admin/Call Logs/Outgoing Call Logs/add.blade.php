@extends('admin.layouts.default')
@section('page_title','Add Outgoing Call Logs')
@section('content')


<div class="card-body card">
    <form class="form" method="post" action="#" >
     @csrf
      <div class="row">

         <div class="col-md-6">
         <div class="form-group">
        <label for="outgoing_time">Outgoing Time</label>

        <input type="time" class="form-control form-control-solid @error('outgoing_time') is-invalid @enderror"  name="outgoing_time"/>

         @error('outgoing_time');
          <span class="invalid-feedback" role="alert"></span>
        @enderror
            </div>
             </div>


<div class="col-sm-6">
     <div class="form-group">
      <label for="outgoing_date">Outgoing Date</label>

      <input type="date" name="outgoing_date" class="form-control form-control-solid @error('outgoing_date') is-invalid @enderror" placeholder="Enter Outgoing Date"/>
      @error('incoming_date')
          <span class="invalid-feedback" role="alert"></span>
          @enderror
     </div>
   </div>

   <div class="col-sm-6">
     <div class="form-group">
      <label for="called_by">Called By</label>
      <select name="called_by" id="called_by" class="form-control form-control-solid @error('called_by') is-invalid @enderror">
            <option selected disabled value="">Select the person who is calling</option>
      </select>

     </div>
   </div>
   <div class="col-sm-6">
     <div class="form-group">
      <label for="received_by">Received By</label>

      <input type="text" name="received_by" class="form-control form-control-solid @error('received_by') is-invalid @enderror" placeholder="Received By"/>
      @error('received_by')
          <span class="invalid-feedback" role="alert"></span>
          @enderror
     </div>
   </div>
   <div class="col-md-6">
      <div class="form-group">
      <label for="remarks">Remarks</label>
      <textarea class="form-control form-control-solid" rows="5" name="remarks" placeholder="Remarks"> </textarea>
     </div>
   </div>
   <div class="col-sm-6">
     <div class="form-group">
      <label for="purpose">Purpose</label>

      <input type="text" name="purpose" class="form-control form-control-solid @error('purpose') is-invalid @enderror" placeholder="Purpose" />
      @error('purpose')
          <span class="invalid-feedback" role="alert"></span>
          @enderror
     </div>
   </div>




<div class="col-md-12">

    <div class="card-footer">
          <input type="submit" value="Submit" class="btn btn-success">
          <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </div>
 </div>
   </form>
</div>
@endsection
