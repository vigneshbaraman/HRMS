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
    .label_color {
        color: #000000;
        padding-right: 26px;
    }
    .input-field{
        margin-left: 3%;
        margin-top: 5%;
    }
    .moves{
        margin-right: 20px;
    }
    .vtabs>ul>li>hr
    {
        margin-top: -10px !important;
        margin-bottom: 0;
    }

</style>

@include('layouts.sidebar1')


<!-- Page Content -->
<div id="page-wrapper" class="row">
    <div class="container-fluid">
            <div class="col-md-12 data-section">
                <button class="btn btn-default btn-xs btn-outline btn-circle m-t-5 filter-section-show hidden-sm hidden-md" style="display:none"><i class="fa fa-chevron-right"></i></button>
                {{-- <div class="row">
                    <div class="col-md-12">
                        <span id="timer-section">
                            <div class="nav navbar-top-links navbar-right pull-right m-t-10 m-b-0">
                                <a class="btn btn-outline btn-inverse timer-modal" href="javascript:;">Start Timer <i class="fa fa-check-circle text-success"></i></a>
                            </div>
                        </span>
                    </div>
                </div> --}}

        <div class="row bg-title">
        <!-- .page title -->
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 bg-title-left">
            <h4 class="page-title"><i class="user-follow"></i> Buddy Feedback</h4>
        </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 text-right bg-title-right">
            {{-- <a href="javascript:;" onclick="calendarData()" class="btn btn-outline btn-info btn-sm ">View on Calendar <i class="fa fa-calendar" aria-hidden="true"></i></a> --}}



            <ol class="breadcrumb">
                <li><a href="../member/dashboard">Home</a></li>
                <li class="active">Buddy Feedback</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>

    <div class="row">

        <div class="col-md-12 panel-inverse">
            <div class="white-box">
                <div class="row" id="holidaySectionData">

                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <div class="vtabs flex-column list-group" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <ul class="nav tabs-vertical" style="border: 1px solid rgba(0,0,0,.125);">

                                    <li class="tab active listed" id="pre_onboard">
                                        <a data-toggle="tab" href="#" id="pre_onboard" data-toggle="tab" class="nav-link " aria-expanded="" aria-controls="v-pills-home" aria-selected="true">
                                            <i class="fa fa-calendar"></i> Pre OnBoarding</a><hr>
                                    </li>
                                    <li class="tab nav-item listed" id="dayzeroid">
                                        <a data-toggle="tab" href="#" id="dayzeroid" data-toggle="tab" class="nav-link " aria-expanded="" aria-controls="v-pills-home" aria-selected="false">
                                            <i class="fa fa-calendar"></i> Day Zero</a><hr>
                                    </li>
                                    <li class="tab nav-item listed" id="dayoneid">
                                        <a data-toggle="tab" href="#" id="dayoneid" data-toggle="tab" class="nav-link " aria-expanded="" aria-controls="v-pills-home" aria-selected="false">
                                            <i class="fa fa-calendar"></i> Day One</a><hr>
                                    </li>
                            </ul>
                            <!-- Day all tab -->
                            <div class="tab-content p-0" style="border: 1px solid rgba(0,0,0,.125);">
                                <div id="preonboardtabid" class="tab-pane active">

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
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>


                                                    @if (count($info['user_info']) > 0)
                                                         <?php $i=0;
                                                            //  echo '<pre>';print_r($info["user_info"][0]->candidate_email);die();
                                                         ?>
                                                          @foreach ($info['user_info'] as $item)


                                                                @if ($item->candidate_email==="")
                                                                  <?php
                                                                     $email="--";
                                                                    ?>

                                                                @else
                                                                <?php
                                                                     $email=$item->candidate_email;
                                                                   ?>

                                                                @endif

                                                               @if ($item->candidate_mobile=="")
                                                                   <?php
                                                                   $mobile="--";
                                                                   ?>
                                                               @else
                                                                    <?php
                                                                    $mobile=$item->candidate_mobile;
                                                                    ?>
                                                               @endif




                                                                 <tr>
                                                                    <td>{{$i+1}}</td>
                                                                    <td>{{$item->cdID}}</td>
                                                                    <td>{{$item->candidate_name}}</td>
                                                                    <td>{{$email}}</td>
                                                                    <td>{{$mobile}}</td>
                                                                    <td>
                                                                        <button onclick=viewBuddyModel("{{$item->cdID}}") aria-expanded="false" data-toggle="dropdown" class="btn btn-default dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                                    </td>

                                                                 </tr>
                                                         <?php $i++;?>
                                                          @endforeach
                                                    @else

                                                    @endif



                                                        {{-- </tr>
                                                     <tr id="group2">
                                                            <td>2</td>
                                                            <td> Emp102</td>
                                                            <td>Linda Craver</td>
                                                            <td>Lindacraver@example.com</td>
                                                            <td>8747638735</td>
                                                            <td>
                                                                <button onclick="viewBuddyModel()" aria-expanded="false" data-toggle="dropdown" class="btn btn-default dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
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
                                                            <td>
                                                                <button onclick="viewBuddyModel()" aria-expanded="false" data-toggle="dropdown" class="btn btn-default dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                                            </td> --}}
                                                          </tbody>
                                                </table>
                                                {{-- <button type="button" class="btn blue" id="SaveBtn">Save changes</button> --}}
                                                <input type="hidden" name="_token" value="{!! csrf_token() !!}" id="token">
                                                </form>
                                            </div>
                                        </div>

                                </div>

                                <div id="dayzerotabid" class="tab-pane">
                                     <!-- second col ended -->

                                        <div class="white-box">
                                            <div class="table-responsive">
                                                <form>
                                                <table class="table table-bordered table-hover toggle-circle default footable-loaded footable" id="users-table">
                                                    <thead>
                                                    <tr>
                                                    <th>#</th>
                                                        <th>Employee Id</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Mobile Number</th>
                                                        <th>Inducation Mail</th>
                                                        <th>Buddy Mail</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr id="group1">
                                                        <td>1</td>
                                                            <td>Emp101</td>
                                                            <td>Danny Ward</td>
                                                            <td>Dannyward@example.com</td>
                                                            <td>8373898787</td>
                                                            <td><p style="color:green" class="fa fa-check"><p></td>
                                                            <td><p style="color:red" class="fa fa-times"></p></td>
                                                        </tr>
                                                            <tr id="group2">
                                                            <td>1</td>
                                                            <td>Emp101</td>
                                                            <td>Danny Ward</td>
                                                            <td>Dannyward@example.com</td>
                                                            <td>8373898787</td>
                                                            <td><p style="color:red" class="fa fa-times"></p></td>
                                                            <td><p style="color:red" class="fa fa-times"></p></td>
                                                        </tr>
                                                            <tr id="group3">
                                                            <td>1</td>
                                                            <td>Emp101</td>
                                                            <td>Danny Ward</td>
                                                            <td>Dannyward@example.com</td>
                                                            <td>8373898787</td>
                                                            <td><p style="color:green" class="fa fa-check"><p></td>
                                                            <td><p style="color:green" class="fa fa-check"><p></td>
                                                            </tbody>
                                                </table>
                                                <button type="button" class="btn blue" id="SaveBtn">Save changes</button>
                                                <input type="hidden" name="_token" value="{!! csrf_token() !!}" id="token">
                                                </form>
                                            </div>
                                        </div>

                                </div>

                                <div id="dayonetabid" class="tab-pane">
                                    <div class="white-box">
                                        <div class="table-responsive">
                                            <form>
                                            <table class="table table-bordered table-hover toggle-circle default footable-loaded footable" id="users-table">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Employee Id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile Number</th>
                                                    <th>Inducation Mail</th>
                                                    <th>Buddy Mail</th>
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
                                                        <td><p style="color:green" class="fa fa-check"><p></td>
                                                        <td><p style="color:red" class="fa fa-times"></p></td>
                                                        <td>
                                                            <a href="{{url('userdocuments')}}"><button  class="btn btn-default dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-file" aria-hidden="true"></i></button></a>
                                                        </td>

                                                    </tr>
                                                        <tr id="group2">
                                                        <td>1</td>
                                                        <td>Emp101</td>
                                                        <td>Danny Ward</td>
                                                        <td>Dannyward@example.com</td>
                                                        <td>8373898787</td>
                                                        <td><p style="color:red" class="fa fa-times"><p></td>
                                                        <td><p style="color:red" class="fa fa-times"></p></td>
                                                        <td>
                                                            <a href="{{url('userdocuments')}}"><button  class="btn btn-default dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-file" aria-hidden="true"></i></button></a>
                                                        </td>
                                                       </tr>
                                                        <tr id="group3">
                                                        <td>1</td>
                                                        <td>Emp101</td>
                                                        <td>Danny Ward</td>
                                                        <td>Dannyward@example.com</td>
                                                        <td>8373898787</td>
                                                        <td><p style="color:green" class="fa fa-check"><p></td>
                                                        <td><p style="color:green" class="fa fa-check"></p></td>
                                                        <td>
                                                            <a href="{{url('userdocuments')}}"><button  class="btn btn-default dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-file" aria-hidden="true"></i></button></a>
                                                        </td>
                                                        </tbody>
                                            </table>
                                            <button type="button" class="btn blue" id="SaveBtn">Save changes</button>
                                            <input type="hidden" name="_token" value="{!! csrf_token() !!}" id="token">
                                            </form>
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
                                <tbody id="candidate_onboardinfo">
                                    {{-- <tr>
                                        <td>
                                            <div>
                                                <h6 class="mb-0">HR ops</h6>

                                            </div>
                                        </td>
                                        <td>

                                        </td>
                                        <td>02-03-2022

                                        </td>
                                    </tr> --}}
                                    {{-- <tr>
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
                                    </tr> --}}

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


@endsection
<script src="../js/jquery.min.js"></script>
{{-- <script src="../pro_js/buddy/buddy.js"></script> --}}


<script src="../pro_js/Hrss/hrpreonboarding.js"></script>

