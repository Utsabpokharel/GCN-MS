@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add New Student</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="{{route('student.index')}}">Students</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Student</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header>New Student Details</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>									
								</div>
								<div class="card-body" id="bar-parent">
									<form action="{{route('student.store')}}" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"  enctype="multipart/form-data">
										{{csrf_field()}}
										<div class="form-body">
											<div class="form-group row">
											<label class="control-label col-md-3">First Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="fname" required placeholder="Enter First fname" 
													class="form-control input-height @error('fname') is-invalid @enderror" value="{{old('fname','')}}" />
													@error('fname')
														<span class="invalid-feedback" role="alert">
															<strong>{{$message}}</strong>
														</span>
													@enderror
												</div>
											</div>

											<div class="form-group row">
												<label class="control-label col-md-3">Last Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="lname" required placeholder="Enter Last lname" 
													class="form-control input-height @error('lname') is-invalid @enderror" value="{{old('lname','')}}" />
													@error('lname')
														<span class="invalid-feedback" role="alert">
															<strong>{{$message}}</strong>
														</span>
													@enderror
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Date of Birth
                    								<span class="required">*</span>
												</label>
												<div class="col-md-5">
                    								<input type="date" name="dob"class="form-control input-height @error('dob') is-invalid @enderror" value="{{old('dob','')}}" />
                    								@error('dob')
                    									<span class="invalid-feedback" role="alert">
															<strong>{{$message}}</strong>
														</span>
                    								@enderror
												</div>
											</div>

											<div class="form-group row">
												<label class="control-label col-md-3">Email
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">													
													<input type="email" name="email" required placeholder="Enter Email" 
													class="form-control input-height @error('email') is-invalid @enderror" value="{{old('email','')}}" />
													@error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{$message}}</strong>
														</span>
													@enderror												
												</div>
											</div>
											<div class="form-group row">
											<label class="control-label col-md-3">Student Category
												<span class="required"> * </span>
											</label>
											<div class="col-md-5">
          										<select name="stdcat"  class="form-control form-control-solid @error('stdcat') is-invalid @enderror" value="{{ old('stdcat') }}">
          										<option value="">Select Student Category</option>
												  <option value="abc">abc</option>
          										</select>
         					 					@error('stdcat')
          										<span class="invalid-feedback" role="alert">
												  <strong>{{$message}}</strong>
												  </span>
          										@enderror
											</div>
											</div>
											<div class="form-group row">
											<label class="control-label col-md-3">Batch
												<span class="required"> * </span>
											</label>
											<div class="col-md-5">
          										<select name="batch"  class="form-control form-control-solid @error('batch') is-invalid @enderror" value="{{ old('batch') }}">
          										<option value="">Select Batch</option>
												<option value="abc">abc</option> 
          										</select>
         					 					@error('batch')
          										<span class="invalid-feedback" role="alert">
												  <strong>{{$message}}</strong>
												  </span>
          										@enderror
											</div>
											</div>
											<div class="form-group row">
											<label class="control-label col-md-3">Section
												<span class="required"> * </span>
											</label>
											<div class="col-md-5">
          										<select name="section"  class="form-control form-control-solid @error('section') is-invalid @enderror" value="{{ old('section') }}">
          										<option value="">Select Section</option>
												<option value="abc">abc</option>
          										</select>
         					 					@error('section')
          										<span class="invalid-feedback" role="alert">
												  <strong>{{$message}}</strong>
												  </span>
          										@enderror
											</div>
											</div>
											<div class="form-group row">
											<label class="control-label col-md-3">Course
												<span class="required"> * </span>
											</label>
											<div class="col-md-5">
          										<select name="course"  class="form-control form-control-solid @error('course') is-invalid @enderror" value="{{ old('course') }}">
          										<option value="">Select Course</option>
												<option value="abc">abc</option>  
          										</select>
         					 					@error('course')
          										<span class="invalid-feedback" role="alert">
												  <strong>{{$message}}</strong>
												  </span>
          										@enderror
											</div>
											</div>
                                        	<div class="form-group row">
												<label class="control-label col-md-3">Address
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
                    								<input type="text" name='address' list='address' placeholder="Please Select..." 
													class="form-control input-height @error('address') is-invalid @enderror" value="{{old('address','')}}">
                    								@error('address')
                    								<span class="invalid-feedback" role="alert"> 
														<strong>{{$message}}</strong>
													</span>
                    								@enderror
												</div>
                							</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Phone Number
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
                    								<input type="number" name="phone" required placeholder="Enter Phone Number"  
													class="form-control input-height @error('phone') is-invalid @enderror" value="{{old('phone','')}}"/>
                                                   	@error('phone')
                    								<span class="invalid-feedback" role="alert">
														<strong>{{$message}}</strong>
													</span>
                   									@enderror
												</div>
                							</div>
											<div class="form-group row">
                                        		<label class="control-label col-md-3">Image
                                           		 	<span class="required"> * </span>
                                       			</label>
                                       			<div class="col-md-5">
													<div class="input-icon right">
														<input type="file" class="form-control bg-light @error('image') is-invalid @enderror" name="image" value="{{old('image','')}}"/>
														@error('image')
															<span class="invalid-feedback" role="alert">
																<strong>{{$message}}</strong>
															</span>
														@enderror
													</div>
                                        		</div>
                                    		</div>
											
											<div class="form-group row">
                                        		<label class="control-label col-md-3">Gender
                                            		<span class="required"> * </span>
                                        		</label>
                                       		<div class="col-md-5">
											<div class="row">
                                            	<div class="card-body" id="bar-parent3">                                               
                                                    <div class="radio">
                                                        <input id="radiobg1" name="gender" type="radio" checked="checked" value="Male" {{'Male'== old('gender','') ? 'checked' : ''}}>
                                                        <label for="radiobg1">Male</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="radiobg2" name="gender" type="radio" value="Female" {{'Female'== old('gender','') ? 'checked' : ''}}>
                                                        <label for="radiobg2">Female</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="radiobg3" name="gender" type="radio" value="Other" {{'Other'== old('gender','') ? 'checked' : ''}}>
														<label for="radiobg3">Others</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   	</div>                                               
										<div class="form-actions">
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<button type="submit" class="btn btn-info m-r-20">Submit</button>
													 <a class="btn btn-default" href="{{route('student.index')}}">Cancel</a>
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