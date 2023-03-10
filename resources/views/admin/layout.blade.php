<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="{{ asset('') }}admin/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="{{ asset('') }}admin/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="{{ asset('') }}admin/css/style.css" rel="stylesheet">
    <link href="{{ asset('') }}admin/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('') }}admin/vendor/toastr/css/toastr.min.css">

    <!-- Bootstrap CSS -->

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('') }}admin/images/logo.png" alt="">
                <img class="logo-compact" src="{{ asset('') }}admin/images/logo-text.png" alt="">
                <img class="brand-title" src="{{ asset('') }}admin/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search"
                                            aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong>
                                                        Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as
                                                        unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong>
                                                        Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->



                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Roomtype</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('add_roomtype') }}">Add Roomtype</a></li>

                            <li><a href="{{ route('all_roomtype') }}">All Roomtype</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Room</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('add_room') }}">Add Room</a></li>
                            <li><a href="{{ route('all_room') }}">All Room</a></li>

                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Customer</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('add_customer') }}">Add Customer</a></li>
                            <li><a href="{{ route('all_customer') }}">All Customer</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Department</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('add_department') }}">Add department</a></li>
                            <li><a href="{{ route('all_department') }}">All department</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Staff Section</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('add_staff') }}">Add Staff</a></li>
                            <li><a href="{{ route('all_staff') }}">All staff</a></li>
                            <li><a href="{{ route('all_staff_payment') }}">All staff Payment</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Room Booking</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('search_room') }}">Add New Booking</a></li>
                            <li><a href="{{ route('all_booking') }}">All Booking</a></li>
                           
                        </ul>
                    </li>

                    <li class="nav-label">Components</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-world-2"></i><span class="nav-text">Bootstrap</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.html">Accordion</a></li>
                            <li><a href="./ui-alert.html">Alert</a></li>
                            <li><a href="./ui-badge.html">Badge</a></li>
                            <li><a href="./ui-button.html">Button</a></li>
                            <li><a href="./ui-modal.html">Modal</a></li>
                            <li><a href="./ui-button-group.html">Button Group</a></li>
                            <li><a href="./ui-list-group.html">List Group</a></li>
                            <li><a href="./ui-media-object mr-3.html">Media Object</a></li>
                            <li><a href="./ui-card.html">Cards</a></li>
                            <li><a href="./ui-carousel.html">Carousel</a></li>
                            <li><a href="./ui-dropdown.html">Dropdown</a></li>
                            <li><a href="./ui-popover.html">Popover</a></li>
                            <li><a href="./ui-progressbar.html">Progressbar</a></li>
                            <li><a href="./ui-tab.html">Tab</a></li>
                            <li><a href="./ui-typography.html">Typography</a></li>
                            <li><a href="./ui-pagination.html">Pagination</a></li>
                            <li><a href="./ui-grid.html">Grid</a></li>

                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-plug"></i><span class="nav-text">Plugins</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./uc-select2.html">Select 2</a></li>
                            <li><a href="./uc-nestable.html">Nestedable</a></li>
                            <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="./uc-toastr.html">Toastr</a></li>
                            <li><a href="./map-jqvmap.html">Jqv Map</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.html" aria-expanded="false"><i class="icon icon-globe-2"></i><span
                                class="nav-text">Widget</span></a></li>
                    <li class="nav-label">Forms</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-form"></i><span class="nav-text">Forms</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./form-element.html">Form Elements</a></li>
                            <li><a href="./form-wizard.html">Wizard</a></li>
                            <li><a href="./form-editor-summernote.html">Summernote</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="{{ route('logout') }}" aria-expanded="false"><i
                                class="icon icon-layout-25"></i><span>Logout</span></a>

                    </li>

                </ul>
            </div>
        </div>


        <div class="content-body">
            <div class="container-fluid">
                @include('sweetalert::alert')
                @yield('content')
            </div>
        </div>




    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('') }}admin/vendor/global/global.min.js"></script>
    <script src="{{ asset('') }}admin/js/quixnav-init.js"></script>
    <script src="{{ asset('') }}admin/js/custom.min.js"></script>

    <script src="{{ asset('') }}admin/vendor/chartist/js/chartist.min.js"></script>

    <script src="{{ asset('') }}admin/vendor/moment/moment.min.js"></script>
    <script src="{{ asset('') }}admin/vendor/pg-calendar/js/pignose.calendar.min.js"></script>

    <script src="{{ asset('') }}admin/js/dashboard/dashboard-2.js"></script>
    <script src="{{ asset('') }}admin/vendor/global/global.min.js"></script>
    <script src="{{ asset('') }}admin/js/quixnav-init.js"></script>
    <script src="{{ asset('') }}admin/js/custom.min.js"></script>

    <script src="{{ asset('') }}admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}admin/js/plugins-init/datatables.init.js"></script>
    <script src="{{ asset('') }}admin/vendor/toastr/js/toastr.min.js"></script>

    <!-- All init script -->
    <script src="{{ asset('') }}admin/js/plugins-init/toastr-init.js"></script>

    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    
    <!-- Circle progress -->

</body>

</html>







{{-- 


<link href="{{asset('')}}admin/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
<link href="{{asset('')}}admin/vendor/chartist/css/chartist.min.css" rel="stylesheet">
<link href="{{asset('')}}admin/css/style.css" rel="stylesheet">
<link href="{{asset('')}}admin/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">





<script src="{{asset('')}}admin/vendor/global/global.min.js"></script>
<script src="{{asset('')}}admin/js/quixnav-init.js"></script>
<script src="{{asset('')}}admin/js/custom.min.js"></script>

<script src="{{asset('')}}admin/vendor/chartist/js/chartist.min.js"></script>

<script src="{{asset('')}}admin/vendor/moment/moment.min.js"></script>
<script src="{{asset('')}}admin/vendor/pg-calendar/js/pignose.calendar.min.js"></script>

<script src="{{asset('')}}admin/js/dashboard/dashboard-2.js"></script>
<script src="{{asset('')}}admin/vendor/global/global.min.js"></script>
<script src="{{asset('')}}admin/js/quixnav-init.js"></script>
<script src="{{asset('')}}admin/js/custom.min.js"></script>

<script src="{{asset('')}}admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{asset('')}}admin/js/plugins-init/datatables.init.js"></script> --}}
