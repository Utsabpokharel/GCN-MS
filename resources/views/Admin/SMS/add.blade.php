@extends('admin.layouts.admin_design')

@section('title')  Add New SMS Template  - Institute Management System (IMS) @endsection

@section('content')

    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Add New SMS Template</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                                           href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add New SMS Template</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>New SMS Template Details</header>


                    </div>
                    <div class="card-body " id="bar-parent">
                        <form method="post" action="" enctype="multipart/form-data">
                            @csrf



                            <div class="row">

                            <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name">Template Name</label>
                                            <input type="text" class="form-control" id="name"
                                                   placeholder="Enter name" name="name" data-validation="length"
                                                   data-validation-length="3-400"
                                                   data-validation-error-msg="Template Name is required (3-50 chars)">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">SMS Template </label>
                                            <textarea name="message" onKeyPress="return taLimit(this)" onKeyUp="return taCount(this,'myCounter')" id="message" cols="30" rows="10" class="form-control"></textarea>

                                            You have <B><SPAN id=myCounter>255</SPAN></B> characters remaining

                                        </div>




                                </div>
                            </div>
                            </div>


                            <button  type="submit" class="btn btn-primary">Add New SMS Template</button>

                            <a href="" class="btn btn-danger">Go Back</a>

                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection




@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>
        $.validate({
            lang: 'en',
            modules: 'file',
        });

    </script>

    <script src="{{ asset('public/adminAssets/assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('public/adminAssets/assets/js/jquery.sweet-alert.custom.js') }}"></script>
    <script type="text/javascript">
        @if(session('flash_message'))
        swal("Success!", "{!! session('flash_message') !!}", "success")
        @endif

        @if(session('flash_error'))
        swal("Error", "{!! session('flash_error') !!}")
        @endif
    </script>



    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                'height' : 130
            });
        });
    </script>

<script language = "Javascript">
/**
 * DHTML textbox character counter script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */

maxL=255;
var bName = navigator.appName;
function taLimit(taObj) {
	if (taObj.value.length==maxL) return false;
	return true;
}

function taCount(taObj,Cnt) {
	objCnt=createObject(Cnt);
	objVal=taObj.value;
	if (objVal.length>maxL) objVal=objVal.substring(0,maxL);
	if (objCnt) {
		if(bName == "Netscape"){
			objCnt.textContent=maxL-objVal.length;}
		else{objCnt.innerText=maxL-objVal.length;}
	}
	return true;
}
function createObject(objId) {
	if (document.getElementById) return document.getElementById(objId);
	else if (document.layers) return eval("document." + objId);
	else if (document.all) return eval("document.all." + objId);
	else return eval("document." + objId);
}
</script>
@endsection
