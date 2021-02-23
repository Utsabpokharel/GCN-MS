@section('sidebar')
<!-- start page container -->
<div class="page-container">
    <!-- start sidebar menu -->
    <div class="sidebar-container">
        <div class="sidemenu-container navbar-collapse collapse fixed-menu">
            <div id="remove-scroll" class="left-sidemenu">
                <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
                    data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                            <span></span>
                        </div>
                    </li>
                    <li class="sidebar-user-panel">
                        <div class="user-panel">
                            <div class="pull-left image">
                                <img src="{{asset('assets/img/dp.jpg')}}" class="img-circle user-img-circle" alt="User Image" />
                            </div>
                            <div class="pull-left info">
                                <p> Kiran Patel</p>
                                <a href="index.html#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
                                        Online</span></a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item start active open">
                        <a href="index.html#" class="nav-link nav-toggle">
                            <i class="material-icons">dashboard</i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>
                            <span class="arrow open"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item active">
                                <a href="index.html" class="nav-link ">
                                    <span class="title">Dashboard 1</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="dashboard2.html" class="nav-link ">
                                    <span class="title">Dashboard 2</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard3.html" class="nav-link ">
                                    <span class="title">Dashboard 3</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end sidebar menu -->
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- start widget -->
            <div class="state-overview">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-b-green">
                            <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Students</span>
                                <span class="info-box-number">450</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 45%"></div>
                                </div>
                                <span class="progress-description">
                                    45% Increase in 28 Days
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-b-yellow">
                            <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">New Students</span>
                                <span class="info-box-number">155</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 40%"></div>
                                </div>
                                <span class="progress-description">
                                    40% Increase in 28 Days
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-b-blue">
                            <span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Total Course</span>
                                <span class="info-box-number">52</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 85%"></div>
                                </div>
                                <span class="progress-description">
                                    85% Increase in 28 Days
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="info-box bg-b-pink">
                            <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Fees Collection</span>
                                <span class="info-box-number">13,921</span><span>$</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 50%"></div>
                                </div>
                                <span class="progress-description">
                                    50% Increase in 28 Days
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- end widget -->
        </div>
    </div>

@endsection

