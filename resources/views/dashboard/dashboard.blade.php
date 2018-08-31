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
@include('inc.topnav')
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
        <div id="wrapper" >
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
        @include('inc.sidebar')
           
            <!-- ============================================================== -->
            <!-- Page Content -->
            <!-- ============================================================== -->
            <div id="page-wrapper">
                    <div class="row bg-title container">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 ">
                            <h4 class="page-title ">Dashboard</h4>
                            <ol class="breadcrumb" >
                                <li>
                                    <a href="#">Dashboard</a>
                                </li>
                                <li class="active"></li>
                            </ol>
                        </div>
                        {{-- <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                        </div> --}}
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="white-box container">
                                <div class="row row-in ">
                                    <div class="col-lg-3 col-sm-6 row-in-br">
                                        <ul class="col-in">
                                            <li>
                                                <span class="circle circle-md bg-info">
                                                    <i class="mdi mdi-clipboard-text"></i>
                                                </span>
                                            </li>
                                            <li class="col-last">
                                                <h3 class="counter text-right m-t-15">{{count($projects_count)}}</h3>
                                            </li>
                                            <li class="col-middle">
                                                <h4>Total projects</h4>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{count($projects_count)}}" aria-valuemin="0" aria-valuemax="100" style="width: {{count($projects_count)}}%">
                                                        <span class="sr-only">{{count($projects_count)}}% Complete (success)</span>
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
                
                    </div>
                </div>
                <!-- /.container-fluid -->
                <footer class="footer text-center"> 2018 &copy; Molecule </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
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