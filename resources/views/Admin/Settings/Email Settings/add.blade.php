@extends('Admin.layouts.master')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add Email Settings</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="{{route('emailsettings.index')}}">Email Settings</a>&nbsp;<i
                            class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add Email Settings</li>
                </ol>
            </div>
        </div>
<div class="row">
	<div class="col-lg-12 col-md-12">
		<div class="card card-custom gutter-b example example-compact">
			<div class="card-header">
				<h3 class="card-title">Email Settings</h3>
				<div class="card-toolbar">
					<div class="example-tools justify-content-center">

					</div>
				</div>
			</div>
			<form action="" method="post">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<label>Mail Driver</label>
								<select class="form-control form-control-solid" name="maildriver">
									<option value="">Please Select One...</option>
									<option value="mail">mail</option>
									<option value="smtp">smtp</option>
								</select>
							</div>
							<div class="form-group">
									<label>Mail Host</label>
									<input type="text" name="mailhost" class="form-control form-control-solid" placeholder="Enter Mail Host">
							</div>
							<div class="form-group">
									<label>Mail Port</label>
									<input type="text" name="mailport" class="form-control form-control-solid" placeholder="Enter Mail Port">
							</div>

						</div>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
									<label>Mail Username</label>
									<input type="text" name="mailusername" class="form-control form-control-solid" placeholder="Enter Mail Username">
							</div>
							<div class="form-group">
									<label>Mail Password</label>
									<input type="text" name="mailpassword" class="form-control form-control-solid" placeholder="Enter Mail Password">
							</div>
							<div class="form-group">
									<label>Mail Encryption</label>
									<select class="form-control form-control-solid" name="mailencryption">
										<option value="">Please Select One...</option>
										<option value="tls">tls</option>
										<option value="ssl">ssl</option>
									</select>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary mr-2">Submit</button>
					<button type="reset" class="btn btn-secondary">Reset</button>
					<a href="#" class="btn btn-danger">Cancel</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection


