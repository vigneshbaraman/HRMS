@extends('layouts.app')

@section('content')
<body class="fix-sidebar ">
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
@include('layouts.sidebar1')
    <!-- Page Content -->
    <div id="page-wrapper" class="row">
        <div class="container-fluid">
            <div class="
                        col-md-12
                        data-section" id ="section-task">
                <button class="btn btn-default btn-xs btn-outline btn-circle m-t-5 filter-section-show hidden-sm hidden-md" style="display:none"><i class="fa fa-chevron-right"></i></button>

                    <div class="row bg-title">
        <!-- .page title -->
        <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 bg-title-left">
            <h4 class="page-title" id="topHeadingid">Candidate Listing</h4>
        </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-6 col-sm-8 col-md-8 col-xs-12 text-right bg-title-right">
            <!-- <a href="../admin/designations/create" class="btn btn-outline btn-success btn-sm">Add Designation <i class="fa fa-plus" aria-hidden="true"></i></a> -->

            <ol class="breadcrumb">
                <li><a href="../admin/dashboard">Home</a></li>
                <li class="active">Designation</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>

                        <!-- .row -->

    <div class="row">
        <div class="col-xs-12 active" id="preonboardtabid">
            <div class="white-box">
                <div class="table-responsive">
                    <form>
                    <table class="table table-bordered table-hover toggle-circle default footable-loaded footable" id="users-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Emplpoyee Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Gender</th>
                            <th>Marital Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                               <tr id="group1">
                                <td>1</td>
                                <td>Emp101</td>
                                <td>Danny Ward</td>
                                <td>Dannyward@example.com</td>
                                <td>8373898787</td>
                                <td>Male</td>
                                <td>Single</td>
                                <td>
                                    <div class="btn-group dropdown m-r-10">
                                        <button aria-expanded="false" data-toggle="dropdown" class="btn btn-default dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-gears "></i></button>
                                       <ul role="menu" class="dropdown-menu pull-right">
                                           <li><a href="../Hrss_profile"><i class="icon-settings"></i> Profile</a></li>
                                           <li><a href="javascript:;" data-group-id="1" class="sa-params"><i class="fa fa-times" aria-hidden="true"></i> Delete </a></li>

                                       </ul>
                                   </div>
                               </td>
                            </tr>
                                <tr id="group2">
                                <td>2</td>
                                <td> Emp102</td>
                                <td>Linda Craver</td>
                                <td>Lindacraver@example.com</td>
                                <td>8747638735</td>
                                <td>Female</td>
                                <td>Single</td>
                                <td>
                                    <div class="btn-group dropdown m-r-10">
                                        <button aria-expanded="false" data-toggle="dropdown" class="btn btn-default dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-gears "></i></button>
                                       <ul role="menu" class="dropdown-menu pull-right">
                                           <li><a href="../Hrss_profile"><i class="icon-settings"></i> Profile</a></li>
                                           <li><a href="javascript:;" data-group-id="1" class="sa-params"><i class="fa fa-times" aria-hidden="true"></i> Delete </a></li>

                                       </ul>
                                   </div>
                               </td>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                                <tr id="group3">
                                <td>3</td>
                                <td>Emp103</td>
                                <td>Jenni Sims </td>
                                <td>Jennisims@example.com</td>
                                <td>9876535487</td>
                                <td>Female</td>
                                <td>Single</td>
                                <td>
                                    <div class="btn-group dropdown m-r-10">
                                        <button aria-expanded="false" data-toggle="dropdown" class="btn btn-default dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-gears "></i></button>
                                       <ul role="menu" class="dropdown-menu pull-right">
                                           <li><a href="../Hrss_profile"><i class="icon-settings"></i> Profile</a></li>
                                           <li><a href="javascript:;" data-group-id="1" class="sa-params"><i class="fa fa-times" aria-hidden="true"></i> Delete </a></li>

                                       </ul>
                                   </div>
                               </td>
                              </tbody>
                    </table>
                    {{-- <button type="button" class="btn blue" id="SaveBtn">Save changes</button> --}}
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}" id="token">
                    </form>
                </div>
            </div>
         </div>
        <!-- first col ended -->


    <!-- .row -->

    </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->


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




<div class="modal fade bs-modal-md in" id="projectTimeModal" role="dialog" aria-labelledby="myModalLabel"
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
            <table class="table admin-table table-hover">
                            <thead>
                                <tr>
                                    <th class="pt-0">Pre OnBoarding</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div>
                                            <h6 class="mb-0">HR ops</h6>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="switch1" checked>
                                            <label class="custom-control-label" for="switch1"></label>
                                        </div>
                                    </td>
                                    <td>02-03-2022

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <h6 class="mb-0">Supervisor</h6>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="switch3" checked>
                                            <label class="custom-control-label" for="switch3"></label>
                                        </div>
                                    </td>
                                    <td>07-03-2022
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <h6 class="mb-0">Buddy</h6>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="switch5" checked>
                                            <label class="custom-control-label" for="switch5"></label>
                                        </div>
                                    </td>
                                    <td>04-03-2022
                                    </td>
                                </tr>

                            </tbody>
                        </table>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- <script src="../js/projs/Hrss/hrpreonboarding.js"></script> -->

