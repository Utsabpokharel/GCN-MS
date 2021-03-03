@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Teacher</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="{{route('teacher.index')}}">Teachers</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Teacher</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Add Teacher</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>									
								</div>
								<div class="card-body" id="bar-parent">
									<form action="{{route('teacher.store')}}" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"  enctype="multipart/form-data">
										{{csrf_field()}}
										<div class="form-body">
											<div class="form-group row">
											<label class="control-label col-md-3">First Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="name" required placeholder="Enter First Name" 
													class="form-control input-height @error('name') is-invalid @enderror" value="{{old('name','')}}" />
													@error('name')
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
													<input type="text" name="name" required placeholder="Enter Last Name" 
													class="form-control input-height @error('name') is-invalid @enderror" value="{{old('name','')}}" />
													@error('name')
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
											<label class="control-label col-md-3">Teacher Category
												<span class="required"> * </span>
											</label>
											<div class="col-md-5">
          										<select name="teacher"  class="form-control form-control-solid @error('teacher') is-invalid @enderror" value="{{ old('student') }}">
          										<option value="">Select Teacher Category</option>
          										</select>
         					 					@error('teacher')
          										<span class="invalid-feedback" role="alert">
												  <strong>{{$message}}</strong>
												  </span>
          										@enderror
											</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Time
                                           			<span class="required"> * </span>
                                    			</label>
                                    			<div class="col-md-5">
                                        			<input type="time" name="time" required
                                            		placeholder="Enter Time"
                                            		class="form-control input-height" />
                                    			</div>
											</div>
											<div class="form-group row">
											<label class="control-label col-md-3">Batch
												<span class="required"> * </span>
											</label>
											<div class="col-md-5">
          										<select name="batch"  class="form-control form-control-solid @error('batch') is-invalid @enderror" value="{{ old('batch') }}">
          										<option value="">Select Batch</option>
          										</select>
         					 					@error('batch')
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
                    								<input type="number" name="phoneno" required placeholder="Enter Phone Number"  
													class="form-control input-height @error('phoneno') is-invalid @enderror" value="{{old('phoneno','')}}"/>
                                                   	@error('phoneno')
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
							
                                        </div>
                                   	</div>                                               
										<div class="form-actions">
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<button type="submit" class="btn btn-info m-r-20">Submit</button>
													 <a class="btn btn-default" href="{{route('teacher.index')}}">Cancel</a>
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