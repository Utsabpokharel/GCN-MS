@section('footer')
<!-- start footer -->
<div class="page-footer">
    <div class="page-footer-inner"> {{date('Y')}} &copy; All Management System
        <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">GCN</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- end footer -->
</div>
<!-- start js include path -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/popper/popper.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-blockui/jquery.blockui.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<script src="{{asset('assets/plugins/sparkline/jquery.sparkline.js')}}"></script>
<script src="http://radixtouch.in/templates/admin/smart/source/assets/js/pages/sparkline/sparkline-data.js"></script>
<!-- Common js-->
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/layout.js')}}"></script>
<script src="{{asset('assets/js/theme-color.js')}}"></script>
<!-- material -->
<script src="{{asset('assets/plugins/material/material.min.js')}}"></script>
<!-- chart js -->
<script src="http://radixtouch.in/templates/admin/smart/source/assets/plugins/chart-js/Chart.bundle.js"></script>
<script src="{{asset('assets/plugins/chart-js/utils.js')}}"></script>
<script src="{{asset('assets/js/pages/chart/chartjs/home-data.js')}}"></script>
<!-- summernote -->
<script src="http://radixtouch.in/templates/admin/smart/source/assets/plugins/summernote/summernote.js"></script>
<script src="{{asset('assets/js/pages/summernote/summernote-data.js')}}"></script>
<!-- end js include path -->
@include('sweetalert::alert')
</body>

</html>
@endsection
