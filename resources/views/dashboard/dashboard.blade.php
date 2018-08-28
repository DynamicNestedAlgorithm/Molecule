@extends('layouts.app')
@section('stylesheet')

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/dashboard.css')}}" rel="stylesheet">

    <!-- Chart -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/bower_components/morrisjs/morris.css')}}" />

    <!-- color CSS -->
    <link href="{{ asset('css/colors/default.css')}}" id="theme" rel="stylesheet')}}">

@endsection

@section('content')

    <div class="fix-header">
        <nav class=" m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is light logo icon-->
                            <img src="{{ asset('plugins/molecule-images/molecule-na.png')}}" alt="home" class="light-logo toggle-logo" />
                        </b>
                    </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li>
                        <a href="javascript:void(0)" class="open-close waves-effect waves-light">
                            <i class="fas fa-align-left"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="mdi mdi-gmail"></i>
                            <div class="notify">
                                <span class="heartbit"></span>
                                <span class="point"></span>
                            </div>
                        </a>
                        <ul class="dropdown-menu mailbox animated slideInUp">
                            <li>
                                <div class="drop-title">You have 1 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img">
                                            <img src="plugins/molecule-images/profile.jpg" alt="user" class="img-circle">
                                            <span class="profile-status online pull-right"></span>
                                        </div>
                                        <div class="mail-contnet">
                                            <h5>{{ Auth::user()->name }}</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);">
                                    <strong>See all notifications</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- .Task dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="mdi mdi-check-circle"></i>
                            <div class="notify">
                                <span class="heartbit"></span>
                                <span class="point"></span>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>You have 1 Notification</strong>
                                            <span class="pull-right text-muted">2hrs ago</span>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        {{-- <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </form> --}}
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Preloader -->
        <!-- ============================================================== -->
        <!-- <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div> -->
        <!-- ============================================================== -->
        <!-- Wrapper -->
        <!-- ============================================================== -->
        <div id="wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav slimscrollsidebar">
                   
                    <div class="user-profile">
                        <div class="dropdown user-pro-body">
                            <div>
                                <img src="img/boy.png" alt="user-img" class="img-circle">
                            </div>
                            <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu animated slideInUp">
                                <li>
                                    <a href="#">
                                        <i class="ti-user"></i> My Profile</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-email"></i> Inbox</a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="ti-settings"></i> Account Setting</a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                <br>
                                    <a href="{{ route('logout') }}">
                                        <i class="fa fa-power-off"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="nav" id="side-menu">
                        <!-- <li>
                            <a href="index.html" class="waves-effect">
                                <i class="mdi mdi-av-timer fa-fw mr-10"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li> -->
                        <li>
                            <a href="index.html" class="waves-effect">
                                <i class="mdi mdi-clipboard-text mr-10"></i>
                                <span class="hide-menu">Project</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect">
                                <i class="mdi mdi-chart-bar mr-10"></i>
                                <span class="hide-menu">Development</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect">
                                <i class=" mdi mdi-checkbox-multiple-marked-outline fa-fw "></i>
                                <span class="hide-menu">Test</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect">
                                <i class="mdi mdi-account mr-10"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect">
                                <i class="mdi mdi-account-multiple mr-10"></i>
                                <span class="hide-menu">Team - Members</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Left Sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page Content -->
            <!-- ============================================================== -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Dashboard</h4>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="#">Dashboard</a>
                                </li>
                                <li class="active"></li>
                            </ol>
                        </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="white-box">
                                <div class="row row-in">
                                    <div class="col-lg-3 col-sm-6 row-in-br">
                                        <ul class="col-in">
                                            <li>
                                                <span class="circle circle-md bg-info">
                                                    <i class="mdi mdi-clipboard-text"></i>
                                                </span>
                                            </li>
                                            <li class="col-last">
                                                <h3 class="counter text-right m-t-15">23</h3>
                                            </li>
                                            <li class="col-middle">
                                                <h4>Total projects</h4>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                        <span class="sr-only">40% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                                        <ul class="col-in">
                                            <li>
                                                <span class="circle circle-md bg-success">
                                                    <i class="mdi mdi-clipboard-text"></i>
                                                </span>
                                            </li>
                                            <li class="col-last">
                                                <h3 class="counter text-right m-t-15">76</h3>
                                            </li>
                                            <li class="col-middle">
                                                <h4>Completed Projects</h4>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 40%">
                                                        <span class="sr-only">40% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 row-in-br">
                                        <ul class="col-in">
                                            <li>
                                                <span class="circle circle-md bg-danger">
                                                    <i class=" mdi mdi-clipboard-text"></i>
                                                </span>
                                            </li>
                                            <li class="col-last">
                                                <h3 class="counter text-right m-t-15">93</h3>
                                            </li>
                                            <li class="col-middle">
                                                <h4>Outstanding Projects</h4>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 40%">
                                                        <span class="sr-only">40% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-sm-6  b-0">
                                        <ul class="col-in">
                                            <li>
                                                <span class="circle circle-md bg-warning">
                                                    <i class="mdi mdi-clipboard-text"></i>
                                                </span>
                                            </li>
                                            <li class="col-last">
                                                <h3 class="counter text-right m-t-15">83</h3>
                                            </li>
                                            <li class="col-middle">
                                                <h4>Total Team Mates</h4>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 40%">
                                                        <span class="sr-only">40% Complete (success)</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="white-box">
                                <h3 class="box-title m-b-0">Team Mates </h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Members</th>
                                                <th>Name</th>
                                                <th>Progress</th>
                                                <th>Others</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0)">Developer</a>
                                                </td>
                                                <td>Adeniran Opeyemi</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 75%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Other Contents</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:void(0)">Developer</a>
                                                </td>
                                                <td>Adeniran Opeyemi</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                            style="width: 75%">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Other Contents</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="white-box">
                                <h3 class="box-title">Notifications</h3>
                                <ul class="feeds">
                                    <li>
                                        <div class="bg-info">
                                            <i class="fa fa-bell-o text-white"></i>
                                        </div> You have 4 pending tasks.
                                        <span class="text-muted">Just Now</span>
                                    </li>
                                    <li>
                                        <div class="bg-success">
                                            <i class="ti-server text-white"></i>
                                        </div> Server #1 overloaded.
                                        <span class="text-muted">2 Hours ago</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="white-box">
                                <h3 class="box-title">Project Insights</h3>
                                <ul class="list-inline text-right">
                                    <li>
                                        <h5>
                                            <i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>data 1</h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <i class="fa fa-circle m-r-5" style="color: #fdc006;"></i>data 2</h5>
                                    </li>
                                    <li>
                                        <h5>
                                            <i class="fa fa-circle m-r-5" style="color: #9675ce;"></i>data 3</h5>
                                    </li>
                                </ul>
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                <footer class="footer text-center"> 2018 &copy; Molecule </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
        </div>
</div>
  <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}/script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/custom.min.js')}}"></script>

    <!-- Chart -->
    <script src="{{ asset('plugins/bower_components/raphael/raphael-min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('plugins/bower_components/morrisjs/morris.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/morris-data.js')}}" type="text/javascript"></script>
@endsection