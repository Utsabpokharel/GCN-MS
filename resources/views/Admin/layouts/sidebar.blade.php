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
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i
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
    <!-- end page content -->
    <!-- start chat sidebar -->
    <div class="chat-sidebar-container" data-close-on-body-click="false">
        <div class="chat-sidebar">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab"> <i
                            class="material-icons">chat</i>Chat
                        <span class="badge badge-danger">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> <i
                            class="material-icons">settings</i>
                        Settings
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- Start Doctor Chat -->
                <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel" id="quick_sidebar_tab_1">
                    <div class="chat-sidebar-list">
                        <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
                            data-wrapper-class="chat-sidebar-list">
                            <div class="chat-header">
                                <h5 class="list-heading">Online</h5>
                            </div>
                            <ul class="media-list list-items">
                                <li class="media"><img class="media-object" src="../assets/img/prof/prof3.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">John Deo</h5>
                                        <div class="media-heading-sub">Spine Surgeon</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">5</span>
                                    </div> <img class="media-object" src="../assets/img/prof/prof1.jpg" width="35"
                                        height="35" alt="...">
                                    <i class="busy dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Rajesh</h5>
                                        <div class="media-heading-sub">Director</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="../assets/img/prof/prof5.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="away dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jacob Ryan</h5>
                                        <div class="media-heading-sub">Ortho Surgeon</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-danger">8</span>
                                    </div> <img class="media-object" src="../assets/img/prof/prof4.jpg" width="35"
                                        height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Kehn Anderson</h5>
                                        <div class="media-heading-sub">CEO</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="../assets/img/prof/prof2.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="busy dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Sarah Smith</h5>
                                        <div class="media-heading-sub">Anaesthetics</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="../assets/img/prof/prof7.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="online dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Vlad Cardella</h5>
                                        <div class="media-heading-sub">Cardiologist</div>
                                    </div>
                                </li>
                            </ul>
                            <div class="chat-header">
                                <h5 class="list-heading">Offline</h5>
                            </div>
                            <ul class="media-list list-items">
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-warning">4</span>
                                    </div> <img class="media-object" src="../assets/img/prof/prof6.jpg" width="35"
                                        height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jennifer Maklen</h5>
                                        <div class="media-heading-sub">Nurse</div>
                                        <div class="media-heading-small">Last seen 01:20 AM</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="../assets/img/prof/prof8.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Lina Smith</h5>
                                        <div class="media-heading-sub">Ortho Surgeon</div>
                                        <div class="media-heading-small">Last seen 11:14 PM</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-status">
                                        <span class="badge badge-success">9</span>
                                    </div> <img class="media-object" src="../assets/img/prof/prof9.jpg" width="35"
                                        height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Jeff Adam</h5>
                                        <div class="media-heading-sub">Compounder</div>
                                        <div class="media-heading-small">Last seen 3:31 PM</div>
                                    </div>
                                </li>
                                <li class="media"><img class="media-object" src="../assets/img/prof/prof10.jpg"
                                        width="35" height="35" alt="...">
                                    <i class="offline dot"></i>
                                    <div class="media-body">
                                        <h5 class="media-heading">Anjelina Cardella</h5>
                                        <div class="media-heading-sub">Physiotherapist</div>
                                        <div class="media-heading-small">Last seen 7:45 PM</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Doctor Chat -->
                <!-- Start Setting Panel -->
                <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
                    <div class="chat-sidebar-settings-list slimscroll-style">
                        <div class="chat-header">
                            <h5 class="list-heading">Layout Settings</h5>
                        </div>
                        <div class="chatpane inner-content ">
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Sidebar Position</div>
                                    <div class="setting-set">
                                        <select
                                            class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                            <option value="left" selected="selected">Left</option>
                                            <option value="right">Right</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Header</div>
                                    <div class="setting-set">
                                        <select
                                            class="page-header-option form-control input-inline input-sm input-small ">
                                            <option value="fixed" selected="selected">Fixed</option>
                                            <option value="default">Default</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Footer</div>
                                    <div class="setting-set">
                                        <select
                                            class="page-footer-option form-control input-inline input-sm input-small ">
                                            <option value="fixed">Fixed</option>
                                            <option value="default" selected="selected">Default</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-header">
                                <h5 class="list-heading">Account Settings</h5>
                            </div>
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Notifications</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
                                                <input type="checkbox" id="switch-1" class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Show Online</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-7">
                                                <input type="checkbox" id="switch-7" class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Status</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2">
                                                <input type="checkbox" id="switch-2" class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">2 Steps Verification</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3">
                                                <input type="checkbox" id="switch-3" class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-header">
                                <h5 class="list-heading">General Settings</h5>
                            </div>
                            <div class="settings-list">
                                <div class="setting-item">
                                    <div class="setting-text">Location</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-4">
                                                <input type="checkbox" id="switch-4" class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Save Histry</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-5">
                                                <input type="checkbox" id="switch-5" class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="setting-item">
                                    <div class="setting-text">Auto Updates</div>
                                    <div class="setting-set">
                                        <div class="switch">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-6">
                                                <input type="checkbox" id="switch-6" class="mdl-switch__input" checked>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end chat sidebar -->
</div>
<!-- end page container -->
@endsection
