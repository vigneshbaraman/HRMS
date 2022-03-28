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
    .modal
    {
        padding-right: 26% !important;
    }
    .table thead th
    {
        border-bottom: 1px solid #dee2e6 !important;
    }
    .word-warpped
    {
        word-break: break-word;
        max-width: 160px;
        min-width: 160px;
    }
</style>

@include('layouts.sidebar2')




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
            <h4 class="page-title"><i class="icon-user"></i> HR Buddy</h4>
        </div>
        <!-- /.page title -->

    </div>

<!-- .row -->
    <div class="row">


        <div class="col-xs-12">
            <div class="white-box">
                <div class="table-responsive">
                   <input type="hidden" name="_token" value="{!! csrf_token() !!}" id="token">
                    <table class="table table-bordered table-hover toggle-circle default footable-loaded footable" id="users-table">
                        <thead>
                        <tr>
                            <th>EmployeeId</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if (count($candidate_info)>0)
                                        @foreach ($candidate_info as $item)
                                        <tr>
                                            <td>{{$item->cdID }}</td>
                                            <td>{{$item->candidate_name }}</td>
                                            <td>{{$item->candidate_email }}</td>
                                            <td>{{$item->candidate_mobile }}</td>
                                            <td>
                                                <button onclick=showAdd("{{$item->cdID}}") aria-expanded="false" data-toggle="dropdown" class="btn btn-default dropdown-toggle waves-effect waves-light" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                     @endforeach
                            @else
                                   <tr><td>No Data Available</td></tr>;
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- .row -->


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

<div class="modal fade bs-modal-md in" id="edit-column-form" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-md" id="modal-data-application">
                <div class="modal-content" style="width: fit-content;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <span class="caption-subject font-red-sunglo bold uppercase" id="modelHeading"></span>
                    </div>
                    <div class="modal-body">
                        <table class="table table-custom dtable-striped table-bordered" style="width: max-content;">
                            <thead>
                                <tr>
                                  <th scope="col" rowspan="2">No</th>
                                  <th scope="col" rowspan="2">Question / Query</th>
                                  <th scope="col" colspan="6" class="text-center">Response</th>
                                </tr>
                                <tr>
                                  <th scope="col">STRONGLY DISAGREE</th>
                                  <th scope="col">DISAGREE</th>
                                  <th scope="col">NEITEHR AGREE NOR DISAGREE</th>
                                  <th scope="col">AGREE</th>
                                  <th scope="col">STRONGLY AGREE</th>
                                  <th scope="col">Remarks</th>
                                </tr>
                              </thead>

                            <tbody id="buddy_feedback_tableId">

                            </tbody>
                          </table>
                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>


<a href="javascript:;" id="sticky-note-toggle"><i class="icon-note"></i></a>

@endsection
<script src="../js/jquery.min.js"></script>
<script src="../pro_js/buddy/buddy.js"></script>
















