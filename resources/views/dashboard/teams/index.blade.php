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
        <div id="wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
        @include('inc.sidebar')
           
            <!-- ============================================================== -->
            <!-- Page Content -->
            <!-- ============================================================== -->
            <div id="page-wrapper">
                    <div class="row bg-title container">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">Development</h4>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/home">Dashboard -</a>
                                </li>  
                                <li>
                                    <a href="/teams"> - Teams </a>
                                </li>
                            </ol>
                        </div>
                        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                            @can('isAdmin')
                                <div class="container">
                                    <a href="{{ route('teams.create') }}" style="color:#666; margin-top:8px; border-radius: 4px; font-size: 12px; padding:5px 7px; background:#ddd;" class="  pull-right">Create Team</a>
                                </div>
                            @endcan
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                       
                            <div class=" middle-box"><br>
                                <h2 class="box-title text-center" style="font-size:24px !important;">Teams</h2>
                                <br>
                                    <div class="row extra-margin middle-box">
                                         <div class="col-md-6 ">
                                            <div class="row extra-margin white-box">
                                                <div class="col-md-6">
                                                    <h2 class="" style="font-size:20px !important;">Team 1</h2>
                                                </div>
                                            </div>   
                                            <br>
                                        </div>

                                         <div class="col-md-6 ">
                                            <div class="row extra-margin  white-box">
                                                    <div class="col-md-6">
                                                        <h2 class="" style="font-size:20px !important;">Team 2</h2>
                                                    
                                                    </div>
                                                </div>
                                         </div>
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