@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title"> Attendance Details</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="{{route('studentatt.index')}}">Attendance</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active"> Attendance Details</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header> Student Attendance Details</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>									
								</div>
								<div>
								<div class="col-md-12 col-sm-12">
								<h3>Date Today:</h3>
								</div>
								<div class="card-body" id="bar-parent">
									<form action="{{route('studentatt.update',$studentatt->id)}}" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"  enctype="multipart/form-data">
										{{csrf_field()}}
										@method('PUT')
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">Student Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
												<select name="name" id="name"
													class="form-control input-height @error('name') is-invalid @enderror" value="{{$studentatt->name}}" >
													<option selected disabled="">Select Student Name </option>
													<option value="abc">abc</option>

													</select>
		   
													@error('name')
														<span class="invalid-feedback" role="alert">
															<strong>{{$message}}</strong>
														</span>
													@enderror
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Attendance
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
												<select name="attendance" id="attendance"
													class="form-control input-height @error('attendance') is-invalid @enderror" value="{{$studentatt->attendance}}">
													<option selected disabled="">Select Attendance</option>
													<option value="abc">abc</option>

													</select>
		   
													@error('attendance')
														<span class="invalid-feedback" role="alert">
															<strong>{{$message}}</strong>
														</span>
													@enderror
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Remarks </label>
												<div class="col-md-5">
												<textarea class="form-control form-control-solid" rows="5" name="remarks" 
												required placeholder="Enter Remarks" value="{{$studentatt->remarks}}"> </textarea>
     										</div>
										</div>                                      
                                   	</div>                                               
										<div class="form-actions">
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<button type="submit" class="btn btn-info m-r-20">Submit</button>
													 <a class="btn btn-default" href="{{route('studentatt.index')}}">Cancel</a>
												</div>
											</div>
										</div>									
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
</div>
@endsection			