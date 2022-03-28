<?php
  $sess_info=Session::get("session_info");

?>
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
    textarea{
        width: 91%;
        height: 33px;
    }

</style>

@include('layouts.sidebar')


<!-- Page Content -->
<div id="page-wrapper" class="row">
    <div class="container-fluid">
            <div class="col-md-12 data-section">
                <button class="btn btn-default btn-xs btn-outline btn-circle m-t-5 filter-section-show hidden-sm hidden-md" style="display:none"><i class="fa fa-chevron-right"></i></button>


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

    <div id="day_zero_tab_id" class="tab-pane active">
        <div class="panel panel-info block4">
            {{-- <div class="panel-heading">
                <div class="caption">
                    Question / Query
                </div>
            </div> --}}
            <div class="portlet-body">
                <div class="table-scrollable ">
                    <div class="modern" style="margin-left: 2%; margin-top: 26px;">
                        <div class="row">
                            <div class="col-md-3">
                                <p>Employee Number</p>
                                <p>Employee Name</p>
                                <p>Department</p>
                                <p>Designation</p>
                                <p>Date of Joining</p>
                                <p>Work Location</p>
                                <p>Buddy Assigned </p>
                            </div>
                            <div class="col-md-3">
                                @foreach ($buddy_fields["user_info"] as $item)
                                    <p>: {{$item->cdID}} </p>
                                    <p>: {{$item->candidate_name}}</p>
                                    <p>: {{$item->or_department}} </p>
                                    <p>: PHP Developer</p>
                                    <p>: {{$item->or_doj}}</p>
                                    <p>: Cuddalore</p>
                                    <p>: SHANTHI</p>

                                @endforeach
                                {{-- <p>: {{}}</p>
                                <p>: Ram</p>
                                <p>: IT</p>
                                <p>: PHP Developer</p>
                                <p>: 19-03-2022</p>
                                <p>: WFH</p>
                                <p>: SHANTHI</p> --}}
                            </div>
                        </div>
                    </div>

                    <div class="modal-body">
                        <table class="table table-custom dtable-striped table-bordered" style="width: max-content;" id="buddy_feedbacktable">
                            <thead>
                              <tr>
                                <th scope="col" rowspan="2">S.No</th>
                                <th scope="col" rowspan="2">Question / Query</th>
                                <th scope="col" colspan="5" class="text-center">Response</th>
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
                            <tbody>
                                <?php $i=0;?>
                                @foreach ($buddy_fields["fields"] as $fields)
                                @if ($i<=5)
                                <tr class="countable_rows">
                                <td>{{$i+1}}</td>
                                <td>{{$fields->Buddy_feedback_fields}}
                                    <input type="hidden" id="field{{$fields->id}}" value="{{$fields->id}}">
                                </td>

                                 @if (count($buddy_fields["feedback_info"]) > 0)
                                    <td class="text-center"><input type="checkbox" {{$buddy_fields['feedback_info'][$i]->response == 1 ? 'checked' : ''}} value="1" class="buddy{{$i}}  checkboxchecker" name="buddy{{$i}}"></td>
                                    <td class="text-center"><input type="checkbox" {{$buddy_fields['feedback_info'][$i]->response == 2 ? 'checked' : ''}} value="2" class="buddy{{$i}} checkboxchecker" name="buddy{{$i}}"></td>
                                    <td class="text-center"><input type="checkbox" {{$buddy_fields['feedback_info'][$i]->response == 3 ? 'checked' : ''}} value="3" class="buddy{{$i}} checkboxchecker" name="buddy{{$i}}"></td>
                                    <td class="text-center"><input type="checkbox" {{$buddy_fields['feedback_info'][$i]->response == 4 ? 'checked' : ''}} value="4" class="buddy{{$i}} checkboxchecker" name="buddy{{$i}}"></td>
                                    <td class="text-center"><input type="checkbox" {{$buddy_fields['feedback_info'][$i]->response == 5 ? 'checked' : ''}} value="5" class="buddy{{$i}} checkboxchecker" name="buddy{{$i}}"></td>
                                    <td>
                                        {{-- <input class="form-control" type="text" name="remark{{$i}}" value="{{$buddy_fields['feedback_info'][$i]->remarks}}"  id="remark{{$i}}"> --}}
                                        <textarea>{{$buddy_fields['feedback_info'][$i]->remarks}}</textarea>
                                    </td>
                                    </tr>
                                 @else
                                    <td class="text-center"><input type="checkbox"  value="1" class="buddy{{$i}}  checkboxchecker" name="buddy{{$i}}"></td>
                                    <td class="text-center"><input type="checkbox"  value="2" class="buddy{{$i}} checkboxchecker" name="buddy{{$i}}"></td>
                                    <td class="text-center"><input type="checkbox"  value="3" class="buddy{{$i}} checkboxchecker" name="buddy{{$i}}"></td>
                                    <td class="text-center"><input type="checkbox"  value="4" class="buddy{{$i}} checkboxchecker" name="buddy{{$i}}"></td>
                                    <td class="text-center"><input type="checkbox"  value="5" class="buddy{{$i}} checkboxchecker" name="buddy{{$i}}"></td>
                                    <td><input class="form-control" type="text" name="remark{{$i}}"  id="remark{{$i}}"></td>
                                    {{-- <td><textarea id="remark{{$i}}"></textarea></td> --}}
                                   </tr>
                                 @endif

                                @endif
                                @if ($i>5)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$fields->Buddy_feedback_fields}}
                                    <input type="hidden" id="field{{$fields->id}}"  value="{{$fields->id}}"></td>
                                    @if (count($buddy_fields["feedback_info"]) > 0)
                                    <td class="text-center"><textarea   >{{$buddy_fields['feedback_info'][$i]->comments1}}</textarea></td>
                                        <td class="text-center"><textarea>{{$buddy_fields['feedback_info'][$i]->comments2}}</textarea></td>
                                        <td class="text-center"><textarea>{{$buddy_fields['feedback_info'][$i]->comments3}}</textarea></td>
                                        <td></td>
                                        <td></td>
                                </tr>
                                @else
                                <td class="text-center"><textarea></textarea></td>
                                <td class="text-center"><textarea></textarea></td>
                                <td class="text-center"><textarea></textarea></td>
                                <td></td>
                                <td></td>
                                @endif
                                @endif
                                 <?php  $i++;?>

                                @endforeach


                            </tbody>
                          </table>
                    </div>
                    <div class="text-center moves">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}" id="token">
                    <input type="hidden" value={{$sess_info["empID"]}}  id="sess_emp_id">
                        <button type="button" id="BuddyFeedbackBtn" class="btn btn-info">Submit </button>
                    </div>
                </div>
            </div>
        </div>
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
<!-- JS file -->
{{-- <script src="../pro_js/buddy/buddy.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../pro_js/preonboarding/preonboarding.js"></script>
<script>
    $(document).ready(function(){
        $('.buddy0').click(function() {
            $('.buddy0').not(this).prop('checked', false);
        });
        $('.buddy1').click(function() {
            $('.buddy1').not(this).prop('checked', false);
        });
        $('.buddy2').click(function() {
            $('.buddy2').not(this).prop('checked', false);
        });
        $('.buddy3').click(function() {
            $('.buddy3').not(this).prop('checked', false);
        });
        $('.buddy4').click(function() {
            $('.buddy4').not(this).prop('checked', false);
        });
        $('.buddy5').click(function() {
            $('.buddy5').not(this).prop('checked', false);
        });
    });


</script>




