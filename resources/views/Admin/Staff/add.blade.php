@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Staff</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="{{route('staff.index')}}">Staff</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Staff</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Add Staff</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>									
								</div>
								<div class="card-body" id="bar-parent">
									<form action="{{route('staff.store')}}" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"  enctype="multipart/form-data">
										{{csrf_field()}}
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">First Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="fname" required placeholder="Enter First Name" 
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
													<input type="text" name="lname" required placeholder="Enter Last Name" 
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
                    								<input type="date" class="form-control input-height @error('dob') is-invalid @enderror" value="{{old('dob','')}}" />
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
												<label class="control-label col-md-3">Mobile Number
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
                    								<input type="number" name="mobileno" required placeholder="Enter Mobile Number"  
													class="form-control input-height @error('mobileno') is-invalid @enderror" value="{{old('mobileno','')}}"/>
                                                   	@error('mobileno')
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
											<label class="control-label col-md-3">PAN Number
													<span class="required"> * </span>
											</label>
											<div class="col-md-5">
												<input type="number" name="panno" required placeholder="Enter PAN Number"
												class="form-control input-height @error('panno') is-invalid @enderror" value="{{old('panno','')}}"/>
												@error('panno')
                    							<span class="invalid-feedback" role="alert">
														<strong>{{$message}}</strong>
												</span>
                   								@enderror
											</div>
                							</div>
											<div class="form-group row">
												<label class="control-label col-md-3">City
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
                    								<input type="text" name='city' list='cityname' placeholder="Please Select..." 
													class="form-control input-height @error('city') is-invalid @enderror" value="{{old('city','')}}">
													@error('city')
                    								<span class="invalid-feedback" role="alert"> 
														<strong>{{$message}}</strong>
													</span>
                    								@enderror
												</div>
                							</div>
											<div class="form-group row">
												<label class="control-label col-md-3">District
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
                    								<input type="text" name='district' list='districtname' placeholder="Please Select..." 
													class="form-control input-height @error('district') is-invalid @enderror" value="{{old('district','')}}">
                    								@error('district')
                    								<span class="invalid-feedback" role="alert"> 
														<strong>{{$message}}</strong>
													</span>
                    								@enderror
												</div>
                							</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Permanent Address
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
                    								<input type="text" name='permanent_address' list='permanent_address' placeholder="Please Select..." 
													class="form-control input-height @error('permanent_address') is-invalid @enderror" value="{{old('permanent_address','')}}">
                    								@error('permanent_address')
                    								<span class="invalid-feedback" role="alert"> 
														<strong>{{$message}}</strong>
													</span>
                    								@enderror
												</div>
                							</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Temporary Address
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
                    								<input type="text" name='temporary_address' list='temporary_address' placeholder="Please Select..." 
													class="form-control input-height @error('temporary_address') is-invalid @enderror" value="{{old('temporary_address','')}}">
                    								@error('temporary_address')
                    								<span class="invalid-feedback" role="alert"> 
														<strong>{{$message}}</strong>
													</span>
                    								@enderror
												</div>
                							</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Designation Title
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
                    								<input type="text" name='title_id' list='title_id' placeholder="Please Select..." 
													class="form-control input-height @error('title_id') is-invalid @enderror" value="{{old('title_id','')}}">
													@error('title_id')
                    								<span class="invalid-feedback" role="alert"> 
														<strong>{{$message}}</strong>
													</span>
                    								@enderror
												</div>
                							</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Designation Level
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
                    								<input type="text" name='level_id' list='level_id' placeholder="Please Select..." 
													class="form-control input-height @error('level_id') is-invalid @enderror" value="{{old('level_id','')}}">
													@error('level_id')
                    								<span class="invalid-feedback" role="alert"> 
														<strong>{{$message}}</strong>
													</span>
                    								@enderror
												</div>
                							</div>
											<div class="form-group row">
												<label class="control-label col-md-3"> Department
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
                    								<input type="text" name='department_id' list='department_id' placeholder="Please Select..." 
													class="form-control input-height @error('department_id') is-invalid @enderror" value="{{old('department_id','')}}">
													@error('department_id')
                    								<span class="invalid-feedback" role="alert"> 
														<strong>{{$message}}</strong>
													</span>
                    								@enderror
												</div>
                							</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Joined Date
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
                    								<input type="date" class="form-control input-height @error('joined_date') is-invalid @enderror" data-date-format="yyyy-mm-dd" value="{{old('joined_date','')}}" />
													@error('joined_date')
													<span class="invalid-feedback" role="alert">
														<strong>{{$message}}</strong>
													</span>
													@enderror
                                        		</div>
                                        	</div>

                                        	
											<div class="form-group row">
                                        		<label class="control-label col-md-3">Photo
                                           		 	<span class="required"> * </span>
                                       			</label>
                                       			<div class="col-md-5">
													<div class="input-icon right">
														<input type="file" class="form-control bg-light @error('photo') is-invalid @enderror" name="photo" value="{{old('photo','')}}"/>
														@error('photo')
															<span class="invalid-feedback" role="alert">
																<strong>{{$message}}</strong>
															</span>
														@enderror
													</div>
                                        		</div>
                                    		</div>

											<div class="form-group row">
                                        		<label class="control-label col-md-3">Resume
                                           		 	<span class="required"> * </span>
                                       			</label>
                                       			<div class="col-md-5">
													<div class="input-icon right">
														<input type="file" class="form-control bg-light @error('resume') is-invalid @enderror" name="resume" value="{{old('resume','')}}"/>
														@error('resume')
															<span class="invalid-feedback" role="alert">
																<strong>{{$message}}</strong>
															</span>
														@enderror
													</div>
                                        		</div>
                                    		</div>
											<div class="form-group row">
													<label class="control-label col-md-3">Citizenship Proof (Frontside)
														<span class="required"> * </span>
                                       				</label>
													<div class="col-md-5">
                    									<input type="file" class="form-control bg-light @error('ctzn_front') is-invalid @enderror" name="ctzn_front" value="{{old('ctzn_front','')}}"/>
														@error('ctzn_front')
                    										<span class="invalid-feedback" role="alert"> 
																<strong>{{$message}}</strong>
															</span>
                    									@enderror
                                    				</div>
											</div>
											<div class="form-group row">
													<label class="control-label col-md-3">Citizenship Proof (Backside)
														<span class="required"> * </span>
                                       				</label>
													<div class="col-md-5">
                    									<input type="file" class="form-control bg-light @error('ctzn_back') is-invalid @enderror" name="ctzn_back" value="{{old('ctzn_back','')}}"/>
														@error('ctzn_back')
                    										<span class="invalid-feedback" role="alert"> 
																<strong>{{$message}}</strong>
															</span>
                    									@enderror
                                    				</div>
											</div>
											<div class="form-group row">
                                        		<label class="control-label col-md-3">Contract and Agreement
                                           		 	<span class="required"> * </span>
                                       			</label>
                                       			<div class="col-md-5">
													<div class="input-icon right">
														<input type="file" class="form-control bg-light @error('contract_agreement') is-invalid @enderror" name="contract_agreement" value="{{old('contract_agreement','')}}"/>
														@error('contract_agreement')
															<span class="invalid-feedback" role="alert">
																<strong>{{$message}}</strong>
															</span>
														@enderror
													</div>
                                        		</div>
                                    		</div>
											<div class="form-group row">
                                        		<label class="control-label col-md-3">Appointment Letter
                                           		 	<span class="required"> * </span>
                                       			</label>
                                       			<div class="col-md-5">
													<div class="input-icon right">
														<input type="file" class="form-control bg-light @error('appointment_letter') is-invalid @enderror" name="appointment_letter" value="{{old('appointment_letter','')}}"/>
														@error('appointment_letter')
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
													 <a class="btn btn-default" href="{{route('staff.index')}}">Cancel</a>
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