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
                                <a href="{{route('staff.create')}}" class="nav-link "> <span class="title">Add Staff</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('staff.index')}}" class="nav-link "> <span class="title">View All Staffs</span>
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
                                <a href="{{route('customer.create')}}" class="nav-link "> <span class="title">Add Customer</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('customer.index')}}" class="nav-link "> <span class="title">View All
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
                                <a href="{{route('vendor.create')}}" class="nav-link "> <span class="title">Add Vendor</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('vendor.index')}}" class="nav-link "> <span class="title">View All Vendor</span>
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
                                <a href="{{route('student.create')}}" class="nav-link "> <span class="title">Add Student
                                        Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('student.index')}}" class="nav-link "> <span class="title">View Student
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
                                <a href="{{route('teacher.create')}}" class="nav-link "> <span class="title">Add Teacher
                                        Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('teacher.index')}}" class="nav-link "> <span class="title">View Teacher
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
                                <a href="{{route('role.index')}}" class="nav-link "> <span class="title">View All Roles</span>
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
                                <a href="{{route('award.create')}}" class="nav-link ">
                                    <span class="title">Add Award</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('award.index')}}" class="nav-link ">
                                    <span class="title">View Award</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link nav-toggle"> <i class="material-icons">gavel</i>
                            <span class="title">Recruitment</span> <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="{{route('documentmanagement.index')}}" class="nav-link "> <span class="title">
                                        Document Management</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('rcourse.index')}}" class="nav-link "> <span class="title">Course </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('customfield.index')}}" class="nav-link "> <span class="title">Custom Field</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('education.index')}}" class="nav-link "> <span class="title">Education</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('language.index')}}" class="nav-link "> <span class="title">Language</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('skill.index')}}" class="nav-link "> <span class="title">Skill</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('license.index')}}" class="nav-link "> <span class="title">License</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('disciplinary.index')}}" class="nav-link "> <span class="title">Disciplinary</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('reporting.index')}}" class="nav-link "> <span class="title">Reporting</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('employeecontract.index')}}" class="nav-link "> <span class="title">Employee Contract</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('employeeotherinfo.index')}}" class="nav-link "> <span class="title">Employee Other Info</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('employeequalification.index')}}" class="nav-link "> <span class="title">Employee Qualifiaction</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('employeeresignation.index')}}" class="nav-link "> <span class="title">Employee Resignation</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('employmentstatus.index')}}" class="nav-link "> <span class="title">Employment Status</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('employmentstatusverification.index')}}" class="nav-link "> <span class="title">Employment Status Verification</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('employeetermination.index')}}" class="nav-link "> <span class="title">Employee Termination</span>
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
                                <a href="{{route('studentatt.index')}}" class="nav-link ">
                                    <span class="title">Student Attendance</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('teacheratt.index')}}" class="nav-link ">
                                    <span class="title">Teacher Attendance </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('staffatt.index')}}" class="nav-link ">
                                    <span class="title">Staff Attendance</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link nav-toggle">
                            <i class="material-icons">dvr</i>
                            <span class="title">Payroll</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="{{route('salary.index')}}" class="nav-link ">
                                    <span class="title">Salary</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('paycalendar.index')}}" class="nav-link ">
                                    <span class="title">Pay Calendar</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('advanced.index')}}" class="nav-link ">
                                    <span class="">Advanced</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('benefitdeduction.index')}}" class="nav-link ">
                                    <span class="title">Benefit/Deduction</span>
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
                                <a href="{{route('department.create')}}" class="nav-link ">
                                    <span class="title">Add Department</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('department.index')}}" class="nav-link ">
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
                                <a href="{{route('course.index')}}" class="nav-link ">
                                    <span class="title">Course</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('section.index')}}" class="nav-link ">
                                    <span class="title">Section</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('batch.index')}}" class="nav-link ">
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
                                <a href="{{route('exam.create')}}" class="nav-link ">
                                    <span class="title">Add Exam</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('exam.index')}}" class="nav-link ">
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
                                <a href="{{route('incoming.index')}}" class="nav-link ">
                                    <span class="title">Incoming Calls</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('outgoing.index')}}" class="nav-link ">
                                    <span class="title">Outgoing Calls</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('visited.index')}}" class="nav-link ">
                                    <span class="title">Visited Calls</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                     <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="material-icons">call</i>
                            <span class="title">Enquiry Management</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="{{route('enquiry.index')}}" class="nav-link ">
                                    <span class="title">Enquiry</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('enquirycategory.index')}}" class="nav-link ">
                                    <span class="title">Enquiry Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('enquiryresponse.index')}}" class="nav-link ">
                                    <span class="title">Enquiry Response</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('enquirysource.index')}}" class="nav-link ">
                                    <span class="title">Enquiry Source</span>
                                </a>
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
                                <a href="{{route('title.index')}}" class="nav-link ">
                                    <span class="title">Title</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('level.index')}}" class="nav-link ">
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
                                <a href="{{route('services.create')}}" class="nav-link ">
                                    <span class="title">Add Services</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('services.index')}}" class="nav-link ">
                                    <span class="title">View All Services</span>
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
                                <a href="{{ route('sms.create') }}" class="nav-link ">
                                    <span class="title">Add SMS Template</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sms.index') }}" class="nav-link ">
                                    <span class="title">View SMS Template</span>
                                </a>
                            </li>
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
                                <a href="{{ route('email.create') }}" class="nav-link ">
                                    <span class="title">Add Email Template</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('email.index') }}" class="nav-link ">
                                    <span class="title">View Email Template</span>
                                </a>
                            </li>
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
                                <a href="{{route('incomecategory.index')}}" class="nav-link ">
                                    <span class="title">Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('income.index')}}" class="nav-link ">
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
                                <a href="{{route('expensecategory.index')}}" class="nav-link ">
                                    <span class="title">Category</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('expense.index')}}" class="nav-link ">
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
                                <a href="invoice.index" class="nav-link ">
                                    <span class="title">Check In</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="invoice.index" class="nav-link ">
                                    <span class="title">Check out</span>
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
                                <a href="{{route('fee.create')}}"  class="nav-link ">
                                    <span class="title">Add Fee</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('fee.index')}}"  class="nav-link ">
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
                                <a href="{{route('bankaccount.create')}}"  class="nav-link ">
                                    <span class="title">Add Bank Account</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('bankaccount.index')}}"  class="nav-link ">
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
                                <a href="{{ route('generalsettings.create') }}" class="nav-link ">
                                    <span class="title">General Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('emailsettings.create') }}" class="nav-link ">
                                    <span class="title">Email Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('password.create') }}" class="nav-link ">
                                    <span class="title">Password Settings</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('payment.create') }}" class="nav-link ">
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
