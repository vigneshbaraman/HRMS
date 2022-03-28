<div class="navbar-default sidebar" role="navigation">
    <div class="navbar-header">
        <!-- Toggle icon for mobile view -->
        <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse"
            data-target=".navbar-collapse"><i class="ti-menu"></i></a>

        <div class="top-left-part">
            <!-- Logo -->
            <a class="logo hidden-xs text-center" href="../member/dashboard">
                <span class="visible-md"><img src="../img/worksuite-logo.png" alt="home" class=" admin-logo"/></span>
                <span class="visible-sm"><img src="../img/worksuite-logo.png" alt="home" class=" admin-logo"/></span>
            </a>

        </div>
        <!-- /Logo -->

        <!-- This is the message dropdown -->
        <ul class="nav navbar-top-links navbar-right pull-right visible-xs">



            <!-- .Task dropdown -->
            <li class="dropdown" id="top-notification-dropdown">
                <a class="dropdown-toggle waves-effect waves-light show-user-notifications" data-toggle="dropdown" href="#">
                    <i class="icon-bell"></i>
                                    </a>
                <ul class="dropdown-menu  dropdown-menu-right mailbox animated slideInDown">
                    <li>
                        <a href="javascript:;">...</a>
                    </li>

                </ul>
            </li>
            <!-- /.Task dropdown -->


            <li class="dropdown">
                <a href="../logout" title="Logout" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"
                ><i class="fa fa-power-off"></i>
                </a>
            </li>



        </ul>

    </div>
    <!-- /.navbar-header -->

    <div class="top-left-part">
        <a class="logo hidden-xs hidden-sm text-center" href="../member/dashboard">
            <img src="../img/worksuite-logo.png" alt="home" class=" admin-logo"/>
        </a>
    </div>
    <div class="sidebar-nav navbar-collapse slimscrollsidebar ">
        <!-- .User Profile -->
        <ul class="nav" id="side-menu">

            <li class="user-pro  hidden-sm hidden-md hidden-lg">
                                    <a href="#" class="waves-effect"><img src="../img/default-profile-3.png" alt="user-img" class="img-circle"> <span class="hide-menu">Employee
                            <span class="fa arrow"></span></span>
                    </a>
                                <ul class="nav nav-second-level">
                    <li><a href="../member/profile"><i class="ti-user"></i> Profile Settings</a></li>
                                            <li role="separator" class="divider"></li>
                    <li><a href="../logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                        ><i class="fa fa-power-off"></i> Logout</a>
                        <form id="logout-form" action="../logout" method="POST" style="display: none;">
                        </form>
                    </li>
                </ul>
            </li>

           <!--  Sidebar category start -->

            <li><a href="../dashboard" class="waves-effect"><i class="icon-speedometer fa-fw"></i> <span class="hide-menu">Dashboard </span></a> </li>

            <li><a href="../member/task" class="waves-effect"><i class="ti-layout-list-thumb fa-fw"></i> <span class="hide-menu"> Pre OnBoarding <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li><a href="../preOnboarding">Pre OnBoarding</a></li>
                    <li><a href="../member/task-label">Induction Schedule</a></li>
                    <li class="hidden-sm hidden-xs"><a href="../member/task/taskboard">Buddy Info</a></li>
                    <li><a href="../Buddy_feedback">Buddy Feedback</a></li>
                </ul>
            </li>

            <li><a href="../candidate_profile" class="waves-effect"><i class="ti-user fa-fw"></i> <span class="hide-menu">Profile </span></a> </li>

        </ul>


    </div>
    <div class="menu-footer">
        <div class="menu-user row">
            <div class="col-lg-6 m-b-5">
                <div class="btn-group dropup user-dropdown">
                        <img  aria-expanded="false" data-toggle="dropdown" src="../img/default-profile-3.png" alt="user-img" class="img-circle dropdown-toggle h-30 w-30">

                    <ul role="menu" class="dropdown-menu">
                        <li><a class="bg-inverse"><strong class="text-info">Employee</strong></a></li>
                        <li><a href="../member/profile"><i class="ti-user"></i> Profile Settings</a></li>
                        <li><a href="../logout"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 text-center m-b-5">
                <div class="btn-group dropup notification-dropdown">
                    <a class="dropdown-toggle show-user-notifications" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>
                                            </a>
                    <ul class="dropdown-menu mailbox ">
                        <li>
                            <a href="javascript:;">...</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="menu-copy-right">
            <a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="ti-angle-double-right ti-angle-double-left"></i> <span class="collapse-sidebar-text">Collapse Sidebar</span></a>
        </div>

    </div>
</div>
<!-- Left navbar-header end -->

