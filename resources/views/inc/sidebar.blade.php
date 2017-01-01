 
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav slimscrollsidebar">
                    <div class="user-profile box">
                        <div class="dropdown user-pro-body">
                            <div>
                                <img src="{{asset('img/boy.png')}}" alt="user-img" class="img-circle">
                            </div>
                            <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu box animated slideInUp">
                                <li>
                                    <a href="#">
                                        <i class="ti-user"></i> My Profile</a>
                                </li> <br>
                                <li>
                                    <a href="#">
                                        <i class="ti-email"></i> Inbox</a>
                                </li> <br>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="ti-settings"></i> Account</a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                        <br> <br>
                                    <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                  <i class="fa fa-power-off"></i>  {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <br>
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/home" class="waves-effect">
                                <i class="mdi mdi-av-timer fa-fw mr-10"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li> 
                        <li>
                            <a href="/projects" class="waves-effect">
                                <i class="mdi mdi-clipboard-text mr-10"></i>
                                <span class="hide-menu">Projects</span>
                            </a>
                        </li>
                        <li>
                            <a href="/development" class="waves-effect">
                                <i class="mdi mdi-chart-bar mr-10"></i>
                                <span class="hide-menu">Development</span>
                            </a>
                        </li>
                        @can('isMentee')
                         <li>
                                <a href="#" class="waves-effect">
                                    <i class=" mdi mdi-checkbox-multiple-marked-outline fa-fw "></i>
                                    <span class="hide-menu">Test</span>
                                </a>
                        </li>
                        @endcan

                        <li>
                            <a href="/teams" class="waves-effect">
                                <i class="mdi mdi-account-multiple mr-10"></i>
                                <span class="hide-menu">Teams</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Left Sidebar -->
            <!-- ============================================================== -->
            