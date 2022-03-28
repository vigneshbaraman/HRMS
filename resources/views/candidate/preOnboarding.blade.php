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
@include('layouts.sidebar')
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
            <h4 class="page-title"><i class="icon-user"></i> Pre Onboarding</h4>
        </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-6 col-sm-8 col-md-8 col-xs-12 text-right bg-title-right">
            {{-- <a href="../admin/designations/create" class="btn btn-outline btn-success btn-sm">Add Designation <i class="fa fa-plus" aria-hidden="true"></i></a> --}}

            <ol class="breadcrumb">
                <li><a href="../admin/dashboard">Home</a></li>
                <li class="active">Designation</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>

                        <!-- .row -->

    <div class="row">
        <div class="col-xs-12">
            <div class="white-box">


                <div class="table-responsive">
                    <form>
                    <table class="table table-bordered table-hover toggle-circle default footable-loaded footable" id="users-table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Pre Onboarding</th>
                            <th>Verified</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php $i=0; ?>
                            @foreach ( $userdata['fields'] as $fields )
                            <tr>
                                @if (count($userdata['user_info']) == 0)
                                      <?php
                                        $checked="";
                                        $date="" ;
                                        $disabled="disabled";

                                        ?>
                                @else
                                            @if ($userdata['user_info'][$i]->date!="")
                                            <?php $date=$userdata['user_info'][$i]->date;
                                                $disabled="";
                                            ?>

                                                @else
                                                <?php   $date="" ;
                                                    $disabled="disabled";
                                                ?>
                                                @endif

                                        @if ($userdata['user_info'][$i]->type==1)
                                        <?php
                                         $checked="checked";

                                        ?>
                                        @else
                                        <?php
                                            $checked="";
                                            ?>
                                        @endif
                                @endif





                                    <td>{{$i+1}}</td>
                                    <td>{{$fields->preonboarding_process}}</td>
                                    <td> <input type="checkbox"
                                    class="js-switch packeges checkbox_check" name="monthly_status" id="check{{"$i"}}"   data-size="small" data-color="#00c292"
                                    data-secondary-color="#f96262"   {{$checked}}   />
                                    </td>
                                    <td>
                                    <input type="date" class="form-control test1" name="date3" value="{{$date}}" id="date{{"$i"}}" style="width:50%;" {{$disabled}}>
                                    </td>

                                     <?php $i++;?>
                            @endforeach




                             {{-- <tr id="group1">
                                <td>1</td>
                                <td>Hr Ops</td>
                                <td>
                                         <input type="checkbox"
                                            class="js-switch packeges" name="monthly_status" id="pre_onboard_id" data-size="small" data-color="#00c292"
                                            data-secondary-color="#f96262"  />

                                 </td>
                                <td>

                                <input type="date" class="form-control test1" name="date1"  id="date1" style="width:50%;" disabled>
                                </td>
                            </tr>
                                                    <tr id="group2">
                                <td>2</td>
                                <td>Supervisor</td>
                                <td>
                                <input type="checkbox"
                                            class="js-switch packeges" name="monthly_status" id="supervisor_id" data-size="small" data-color="#00c292"
                                            data-secondary-color="#f96262"    />
                                                                    </td>
                                <td>

                                <input type="date" class="form-control test1" name="date2" id="date2" style="width:50%;" disabled>

                                        </ul>
                                    </div>
                                </td>
                            </tr> --}}
                        {{-- <tr id="group3">
                            <td>3</td>
                            <td>Buddy</td>
                            <td> <input type="checkbox"
                                        class="js-switch packeges" name="monthly_status" id="buddy_id" data-size="small" data-color="#00c292"
                                        data-secondary-color="#f96262"    />
                                                                </td>
                            <td>

                        <input type="date" class="form-control test1" name="date3" id="date3" style="width:50%;" disabled>
                        </td>
                    </tr> --}}

                                                </tbody>
                    </table>
                    <button type="button" class="btn blue" id="SaveBtn">Save changes</button>
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}" id="token">
                    </form>
                </div>
            </div>
        </div>
    </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="../pro_js/preonboarding/preonboarding.js"></script>

