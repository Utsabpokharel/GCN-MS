@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Services</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="{{route('services.index')}}">Services</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add Service</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Add Service</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>									
								</div>
								<div class="card-body" id="bar-parent">
									<form action="{{route('services.store')}}" id="form_sample_1" class="form-horizontal" method="post" autocomplete="on"  enctype="multipart/form-data">
										{{csrf_field()}}
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3"> Service Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="name" required placeholder="Enter Service Name" 
													class="form-control input-height @error('name') is-invalid @enderror" value="{{old('name','')}}" />
													@error('name')
														<span class="invalid-feedback" role="alert">
															<strong>{{$message}}</strong>
														</span>
													@enderror
												</div>
											</div>

											<div class="form-group row">
												<label class="control-label col-md-3">Service Price
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">													
													<input type="number" name="price" required placeholder="Enter Service Price" 
													class="form-control input-height @error('price') is-invalid @enderror" value="{{old('price','')}}" />
													@error('price')
														<span class="invalid-feedback" role="alert">
															<strong>{{$message}}</strong>
														</span>
													@enderror												
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Description
												</label>
												<div class="col-md-5">	
												<textarea name="description" cols="20" rows="10" class="form-control @error('description') is-invalid @enderror"
                                        		placeholder="Enter Description" >{{old('description','')}}</textarea>
            										@error('description')
                										<span class="invalid-feedback" role="alert">
															<strong>{{$message}}</strong>
														</span>
            										@enderror
       							 				</div>
											</div>
											<div class="form-group row">
											<label class="control-label col-md-3">Status
												<span class="required"> * </span>
											</label>
											<div class="col-md-5">
          										<select name="status"  class="form-control form-control-solid @error('status') is-invalid @enderror" value="{{ old('status') }}">
          										<option value="">Select Status</option>
          								
          										</select>
         					 					@error('status')
          										<span class="invalid-feedback" role="alert">
												  <strong>{{$message}}</strong>
												  </span>
          										@enderror
											</div>
											</div>

                                   	</div>                                               
										<div class="form-actions">
											<div class="row">
												<div class="offset-md-3 col-md-9">
													<button type="submit" class="btn btn-info m-r-20">Submit</button>
													 <a class="btn btn-default" href="{{route('services.index')}}">Cancel</a>
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