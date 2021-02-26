@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Award</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="{{route('award.index')}}">Awards</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Award</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Add Award</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>									
								</div>
								<div class="card-body" id="bar-parent">
									<form action="" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"  enctype="multipart/form-data">
										{{csrf_field()}}
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">Staff Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
												<select name="staff" id="staff"
													class="form-control input-height @error('staff') is-invalid @enderror" value="{{old('name','')}}" />
													<option selected disabled="">Select Staff Name </option>
													</select>
		   
													@error('staff')
														<span class="invalid-feedback" role="alert">
															<strong>{{$message}}</strong>
														</span>
													@enderror
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Award Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
												<input type="text" name="award" required placeholder="Enter Award Name" 
													class="form-control input-height @error('award') is-invalid @enderror" value="{{old('award','')}}" />
													@error('award')
														<span class="invalid-feedback" role="alert">
															<strong>{{$message}}</strong>
														</span>
													@enderror
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Gift </label>
												<div class="col-md-5">
      												<input type="text" class="form-control input-height @error('gift') is-invalid @enderror" name="gift" placeholder="Enter Gift" value="{{old('gift','')}}">
     											</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Award Date
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
                    								<input type="date" class="form-control input-height @error('date') is-invalid @enderror" data-date-format="yyyy-mm-dd" value="{{old('date','')}}" />
													@error('date')
													<span class="invalid-feedback" role="alert">
														<strong>{{$message}}</strong>
													</span>
													@enderror
                                        		</div>
                                        	</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Thankyou Point </label>
												<div class="col-md-5">
												<textarea class="form-control form-control-solid" rows="5" name="thankyou" required placeholder="Describe yourself here..." > </textarea>
     											</div>
											</div>                                      
                                   	</div>                                               
										<div class="form-actions">
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<button type="submit" class="btn btn-info m-r-20">Submit</button>
													 <a class="btn btn-default" href="{{route('award.index')}}">Cancel</a>
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