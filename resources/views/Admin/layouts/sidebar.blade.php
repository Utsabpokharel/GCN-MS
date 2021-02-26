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
                                <img src="../assets/img/dp.jpg" class="img-circle user-img-circle" alt="User Image" />
                            </div>
                            <div class="pull-left info">
                                <p> Kiran Patel</p>
                                <a href="#"><i class="fa fa-circle user-online"></i><span class="txtOnline">
                                        Online</span></a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item start active open">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="material-icons">dashboard</i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>
                            <span class="arrow open"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item active">
                                <a href="" class="nav-link ">
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

                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle"> <i class="material-icons">person</i>
                            <span class="title">User</span> <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="{{route('user.create')}}" class="nav-link "> <span class="title">Add
                                        User</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('user.index')}}" class="nav-link "> <span class="title">View All
                                        Users</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle"><i class="material-icons">group</i>
                            <span class="title">Staff</span><span class="arrow"></span></a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="all_students.html" class="nav-link "> <span class="title">Add Staff</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="add_student.html" class="nav-link "> <span class="title">View All Staffs</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle"> <i class="material-icons">school</i>
                            <span class="title">Customer</span> <span class="arrow"></span>
                            <span class="label label-rouded label-menu label-success">new</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="all_courses.html" class="nav-link "> <span class="title">Add Customer</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="add_course.html" class="nav-link "> <span class="title">View All
                                        Customers</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle"> <i class="material-icons">local_library</i>
                            <span class="title">Vendor</span> <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="all_assets.html" class="nav-link "> <span class="title">Add Vendor</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="add_library.html" class="nav-link "> <span class="title">View All Vendor</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle"> <i class="material-icons">business</i>
                            <span class="title">Student</span> <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="all_department.html" class="nav-link "> <span class="title">Add Student
                                        Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="add_department.html" class="nav-link "> <span class="title">View Student
                                        Category</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle"> <i class="material-icons">face</i>
                            <span class="title">Teacher</span> <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="all_staffs.html" class="nav-link "> <span class="title">Add Teacher
                                        Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="add_staff.html" class="nav-link "> <span class="title">View Teacher
                                        Category</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle"> <i
                                class="material-icons">airline_seat_individual_suite</i>
                            <span class="title">Roles</span> <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="all_holidays.html" class="nav-link "> <span class="title">View All Roles</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="material-icons">email</i>
                            <span class="title">Awards</span>
                            <span class="arrow"></span>
                            <span class="label label-rouded label-menu label-danger">new</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="email_inbox.html" class="nav-link ">
                                    <span class="title">Add Award</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="email_view.html" class="nav-link ">
                                    <span class="title">View Award</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle"> <i class="material-icons">gavel</i>
                            <span class="title">Recruitment</span> <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="" class="nav-link "> <span class="title">
                                        Add Recruitment</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="add_fees.html" class="nav-link "> <span class="title">View Recruitment </span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">timeline</i>
                            <span class="title">Attendance</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="charts_echarts.html" class="nav-link ">
                                    <span class="title">eCharts</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="charts_morris.html" class="nav-link ">
                                    <span class="title">Morris Charts</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="charts_chartjs.html" class="nav-link ">
                                    <span class="title">Chartjs</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="material-icons">dvr</i>
                            <span class="title">Payroll</span>
                            <span class="label label-rouded label-menu label-warning">new</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="ui_buttons.html" class="nav-link ">
                                    <span class="title">Buttons</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ui_tabs_accordions_navs.html" class="nav-link ">
                                    <span class="title">Tabs &amp; Accordions</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ui_typography.html" class="nav-link ">
                                    <span class="title">Typography</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="notification.html" class="nav-link ">
                                    <span class="title">Notification</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ui_icons.html" class="nav-link ">
                                    <span class="title">Icons</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ui_panels.html" class="nav-link ">
                                    <span class="title">Panels</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ui_grid.html" class="nav-link ">
                                    <span class="title">Grids</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="calendar.html" class="nav-link ">
                                    <span class="title">Calender</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ui_tree.html" class="nav-link ">
                                    <span class="title">Tree View</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ui_carousel.html" class="nav-link ">
                                    <span class="title">Carousel</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link nav-toggle">
                            <i class="material-icons">store</i>
                            <span class="title">Travel Ticket</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="material_button.html" class="nav-link ">
                                    <span class="title">Buttons</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="material_tab.html" class="nav-link ">
                                    <span class="title">Tabs</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="material_chips.html" class="nav-link ">
                                    <span class="title">Chips</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="material_grid.html" class="nav-link ">
                                    <span class="title">Grid</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="material_icons.html" class="nav-link ">
                                    <span class="title">Icon</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="material_form.html" class="nav-link ">
                                    <span class="title">Form</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="material_datepicker.html" class="nav-link ">
                                    <span class="title">DatePicker</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="material_select.html" class="nav-link ">
                                    <span class="title">Select Item</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="material_loading.html" class="nav-link ">
                                    <span class="title">Loading</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="material_menu.html" class="nav-link ">
                                    <span class="title">Menu</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="material_slider.html" class="nav-link ">
                                    <span class="title">Slider</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="material_tables.html" class="nav-link ">
                                    <span class="title">Tables</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="material_toggle.html" class="nav-link ">
                                    <span class="title">Toggle</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="material_badges.html" class="nav-link ">
                                    <span class="title">Badges</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">group</i>
                            <span class="title">Department </span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="layouts_form.html" class="nav-link ">
                                    <span class="title">Add Department</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="advance_form.html" class="nav-link ">
                                    <span class="title">View Department</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">school</i>
                            <span class="title">Courses</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="basic_table.html" class="nav-link ">
                                    <span class="title">Course</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="advanced_table.html" class="nav-link ">
                                    <span class="title">Section</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="export_table.html" class="nav-link ">
                                    <span class="title">Batch</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">school</i>
                            <span class="title">Exam</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="charts_echarts.html" class="nav-link ">
                                    <span class="title">Add Exam</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="charts_morris.html" class="nav-link ">
                                    <span class="title">View Exam</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="charts_chartjs.html" class="nav-link ">
                                    <span class="title">All Examinee List</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="charts_chartjs.html" class="nav-link ">
                                    <span class="title">Book Exam</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="charts_chartjs.html" class="nav-link ">
                                    <span class="title">Quiz</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="charts_chartjs.html" class="nav-link ">
                                    <span class="title">Result</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">call</i>
                            <span class="title">Call Logs</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Incoming Calls</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Outgoing Calls</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Visited Calls</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">face</i>
                            <span class="title">Enquiry Management</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-university"></i> Enquiry
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="javascript:;" class="nav-link nav-toggle">
                                            <i class="fa fa-bell-o"></i> Enquiry Category
                                            <span class="arrow "></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="nav-item">
                                                <a href="javascript:;" class="nav-link">
                                                    <i class="fa fa-calculator"></i> Enquiry Source</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link">
                                                    <i class="fa fa-clone"></i>Enquiry Response</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-file-pdf-o"></i> Sample Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-rss"></i> Sample Link 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-hdd-o"></i> Sample Link 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-gavel"></i> Arrow Toggle
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-paper-plane"></i> Sample Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-power-off"></i> Sample Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="fa fa-recycle"></i> Sample Link 1
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-volume-up"></i> Item 3 </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">map</i>
                            <span class="title">Designation</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Title</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Level</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">map</i>
                            <span class="title">Appointment</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Google Maps</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Vector Maps</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">map</i>
                            <span class="title">To Do</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Google Maps</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Vector Maps</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">map</i>
                            <span class="title">Services</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Add Services</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">View Services</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">map</i>
                            <span class="title">Coupon</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Google Maps</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Vector Maps</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">contact_mail</i>
                            <span class="title">Send SMS</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Student</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Teacher</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Staff</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">email</i>
                            <span class="title">Send Email</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Student</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Teacher</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Staff</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">map</i>
                            <span class="title">Chat</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Google Maps</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Vector Maps</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">map</i>
                            <span class="title">Social Media Login</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Google Maps</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Vector Maps</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">map</i>
                            <span class="title">Income</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Incomes</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">map</i>
                            <span class="title">Expense</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Expenses</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">map</i>
                            <span class="title">Invoice</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Google Maps</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Vector Maps</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">school</i>
                            <span class="title">Fee</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Add Fee</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">View Fee</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Fee Payment</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Fee Report</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">monetization_on</i>
                            <span class="title">Bank Account</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Add Bank Account</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">View Bank Account</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">map</i>
                            <span class="title">Payment</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">Google Maps</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Vector Maps</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">settings</i>
                            <span class="title">Settings</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="google_maps.html" class="nav-link ">
                                    <span class="title">General Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Email Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Password Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="vector_maps.html" class="nav-link ">
                                    <span class="title">Payment Settings</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end sidebar menu -->
</div>
<!-- end page container -->
@endsection
