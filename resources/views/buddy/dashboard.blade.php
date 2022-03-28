@extends('layouts.app')

@section('content')
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
        <!-- Left navbar-header -->
    <style>
    .slimScrollDiv{
        overflow: initial !important;
    }
</style>
@include('layouts.sidebar2')
    <!-- Page Content -->
    <div id="page-wrapper" class="row">
        <div class="container-fluid">



            <div class="
                        col-md-12
                        data-section">
                <button class="btn btn-default btn-xs btn-outline btn-circle m-t-5 filter-section-show hidden-sm hidden-md" style="display:none"><i class="fa fa-chevron-right"></i></button>
                                <div class="row">
<div class="col-md-12">
<span id="timer-section">
            <div class="nav navbar-top-links navbar-right pull-right m-t-10 m-b-0">
            <a class="btn btn-outline btn-inverse timer-modal" href="javascript:;">Start Timer <i class="fa fa-check-circle text-success"></i></a>
        </div>
    </span>
</div>
</div>

                    <div class="row bg-title">
        <!-- .page title -->
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 bg-title-left">
            <h4 class="page-title"><i class="icon-speedometer"></i> Dashboard</h4>
        </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 bg-title-right">
            <div class="col-md-3 pull-right hidden-xs hidden-sm">

                <select class="selectpicker language-switcher m-t-10  pull-right" data-width="fit">
                                       <option value="en"  selected  data-content='<span class="flag-icon flag-icon-us"></span>'>En</option>
                                                               <option value="es"
                                  data-content='<span class="flag-icon  flag-icon-es "></span>'>es</option>
                                            <option value="fr"
                                  data-content='<span class="flag-icon  flag-icon-fr "></span>'>fr</option>
                                            <option value="it"
                                  data-content='<span class="flag-icon  flag-icon-it "></span>'>it</option>
                                            <option value="ru"
                                  data-content='<span class="flag-icon  flag-icon-ru "></span>'>ru</option>
                                    </select>

            </div>

            <ol class="breadcrumb">
                <li><a href="../member/dashboard">Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>

                        <!-- .row -->

<div class="white-box">
    <div class="row dashboard-stats front-dashboard">
                <div class="col-md-3 col-sm-6">
            <a href="../member/projects">
                <div class="white-box">
                    <div class="row">
                        <div class="col-xs-3">
                            <div>
                                <span class="bg-info-gradient"><i class="icon-layers"></i></span>
                            </div>
                        </div>
                        <div class="col-xs-9 text-right">
                            <span class="widget-title"> Total Projects</span><br>
                            <span class="counter">0</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

                <div class="col-md-3 col-sm-6">
            <a href="../member/all-time-logs">
                <div class="white-box">
                    <div class="row">
                        <div class="col-xs-3">
                            <div>
                                <span class="bg-warning-gradient"><i class="icon-clock"></i></span>
                            </div>
                        </div>
                        <div class="col-xs-9 text-right">
                            <span class="widget-title"> Hours Logged</span><br>
                            <span class="counter">0 hrs </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

                <div class="col-md-3 col-sm-6">
            <a href="../member/task/all-tasks">
                <div class="white-box">
                    <div class="row">
                        <div class="col-xs-3">
                            <div>
                                <span class="bg-danger-gradient"><i class="ti-alert"></i></span>
                            </div>
                        </div>
                        <div class="col-xs-9 text-right">
                            <span class="widget-title"> Pending Tasks</span><br>
                            <span class="counter">0</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-3 col-sm-6">
            <a href="../member/task/all-tasks">
                <div class="white-box">
                    <div class="row">
                        <div class="col-xs-3">
                            <div>
                                <span class="bg-success-gradient"><i class="ti-check-box"></i></span>
                            </div>
                        </div>
                        <div class="col-xs-9 text-right">
                            <span class="widget-title"> Completed Tasks</span><br>
                            <span class="counter">0</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
    <!-- .row -->

    <div class="row">

                <div class="col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-heading">Attendance</div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">

                        <input type="hidden" id="current-latitude">
                        <input type="hidden" id="current-longitude">


                                                                                                <div class="col-xs-6">
                                        <h3>Clock In</h3>
                                    </div>
                                    <div class="col-xs-6">
                                        <h3>Clock In IP</h3>
                                    </div>
                                    <div class="col-xs-6">
                                                                                    12:51 PM
                                                                            </div>
                                    <div class="col-xs-6">
                                        127.0.0.1
                                    </div>


                                    <div class="col-xs-8 m-t-20 truncate">
                                        <label for="">Working From</label>
                                                                                    <input type="text" class="form-control" id="working_from" name="working_from">
                                                                            </div>

                                    <div class="col-xs-4 m-t-20">
                                        <label class="m-t-30">&nbsp;</label>
                                                                                    <button class="btn btn-success btn-sm" id="clock-in">Clock In</button>
                                                                                                                    </div>
                                                                                                        </div>
                </div>
            </div>
        </div>

                <div class="col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-heading">Overdue Tasks</div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <ul class="list-task list-group" data-role="tasklist">
                            <li class="list-group-item" data-role="task">
                                <strong>Title</strong> <span
                                        class="pull-right"><strong>Due Date</strong></span>
                            </li>
                                                            <li class="list-group-item" data-role="task">
                                    <div  class="text-center">
                                        <div class="empty-space" style="height: 200px;">
                                            <div class="empty-space-inner">
                                                <div class="icon" style="font-size:20px"><i
                                                            class="fa fa-tasks"></i>
                                                </div>
                                                <div class="title m-b-15">No open tasks.                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                                    </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row" >

                <div class="col-md-6" id="project-timeline">
            <div class="panel panel-inverse">
                <div class="panel-heading">Project Activity Timeline</div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="steamline">
                                                            <div class="text-center">
                                    <div class="empty-space" style="height: 200px;">
                                        <div class="empty-space-inner">
                                            <div class="icon" style="font-size:20px"><i
                                                        class="fa fa-history"></i>
                                            </div>
                                            <div class="title m-b-15">No project acitvity                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                        </div>
                    </div>
                </div>
            </div>
        </div>


                <div class="col-md-6">
            <div class="panel panel-inverse">
                <div class="panel-heading">User Activity Timeline</div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="steamline">
                                                            <div class="text-center">
                                    <div class="empty-space" style="height: 200px;">
                                        <div class="empty-space-inner">
                                            <div class="icon" style="font-size:20px"><i
                                                        class="fa fa-history"></i>
                                            </div>
                                            <div class="title m-b-15">No activity by the user.                                            </div>
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


<div class="modal fade bs-modal-lg in" id="projectTimerModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" id="modal-data-application">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <span class="caption-subject font-red-sunglo bold uppercase" id="modelHeading"></span>
            </div>
            <div class="modal-body">
                Loading...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                <button type="button" class="btn blue">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



<div class="modal fade bs-modal-md in"  id="subTaskModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" id="modal-data-application">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <span class="caption-subject font-red-sunglo bold uppercase" id="subTaskModelHeading">Sub Task e</span>
            </div>
            <div class="modal-body">
                Loading...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                <button type="button" class="btn blue">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->.
</div>


                <!-- .right-sidebar -->
<div class="right-sidebar">
    <div id="right-sidebar-content">

    </div>
</div>
<!-- /.right-sidebar -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->



<div class="modal fade bs-modal-md in" id="projectTimerModal" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" id="modal-data-application">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <span class="caption-subject font-red-sunglo bold uppercase" id="modelHeading"></span>
            </div>
            <div class="modal-body">
                Loading...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                <button type="button" class="btn blue">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



<div id="footer-sticky-notes" class="row hidden-xs hidden-sm">
    <div class="col-xs-12" id="sticky-note-header">
        <div class="col-xs-10" style="line-height: 30px">
        Sticky Notes <a href="javascript:;" onclick="showCreateNoteModal()" class="btn btn-success btn-outline btn-xs m-l-10"><i class="fa fa-plus"></i> Add Note</a>
            </div>
        <div class="col-xs-2">
            <a href="javascript:;" class="btn btn-default btn-circle pull-right" id="open-sticky-bar"><i class="fa fa-chevron-up"></i></a>
            <a style="display: none;" class="btn btn-default btn-circle pull-right" href="javascript:;" id="close-sticky-bar"><i class="fa fa-chevron-down"></i></a>
        </div>

    </div>

    <div id="sticky-note-list" style="display: none">


    </div>
</div>

<a href="javascript:;" id="sticky-note-toggle"><i class="icon-note"></i></a>




<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            Loading ...
        </div>
    </div>
</div>



<div class="modal fade bs-modal-md in" id="projectTimerModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" id="modal-data-application">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <span class="caption-subject font-red-sunglo bold uppercase" id="modelHeading"></span>
            </div>
            <div class="modal-body">
                Loading...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                <button type="button" class="btn blue">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



<div class="modal fade bs-modal-md in"  id="subTaskModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" id="modal-data-application">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <span class="caption-subject font-red-sunglo bold uppercase" id="subTaskModelHeading">Sub Task e</span>
            </div>
            <div class="modal-body">
                Loading...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                <button type="button" class="btn blue">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection
