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

@include('layouts.sidebar1')
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
            <h4 class="page-title"><i class="icon-user"></i> Profile Settings</h4>
        </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 bg-title-right">
            <ol class="breadcrumb">
                <li><a href="../member/dashboard">Home</a></li>
                <li class="active">Profile Settings</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>

                        <!-- .row -->

    <div class="row">
        <div class="col-xs-12">

            <div class="panel panel-inverse">
                <div class="panel-heading"> Update Profile Info</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form method="POST" action="../member/profile" accept-charset="UTF-8" id="updateProfile" class="ajax-form"><input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="HgevldnZKfcxciADWveHBNGXLiGoj3H4Rpm0E7rx">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4 ">
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" name="name" id="name" class="form-control" value="Admin">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Your Email</label>
                                        <input type="email" name="email" id="email" class="form-control" value="admin@example.com">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Your Mobile Number</label>
                                        <input type="tel" name="mobile" id="mobile" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <!-- 1 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Secondary Number </label>
                                        <input type="tel" name="s_mobile" id="s_mobile" class="form-control" value="">
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Marital Status</label>
                                        <select name="gender" id="gender" class="form-control">
                                            <option  value="Single">Single</option>
                                            <option  value="Married">Married</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Blood Group</label>
                                        <select name="blood_gr" id="blood_gr" class="form-control">
                                            <option  value="A">A</option>
                                            <option  value="A++">A++</option>
                                            <option  value="B">B</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Department</label>
                                        <select name="Department" id="Department" class="form-control">
                                            <option  value="it">IT</option>
                                            <option  value="bpo">BPO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Roll of Intake</label>
                                        <select name="rool" id="rool" class="form-control">
                                            <option  value="hepl">HEPL</option>
                                            <option  value="ck">CK</option>
                                            <option  value="Hemas">Hemas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Attendance Format</label>
                                        <input type="text" name="dob" class="form-control"
                                               value="Mon-Sat 5.5 days / week">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input type="date" name="dob" class="form-control"
                                               value="">
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Weekoffs</label>
                                        <input type="text" name="weekoff" class="form-control"
                                               value="Sunday">
                                    </div>
                                </div>
                            </div>

                                <!-- 3 -->
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label">Permanent Address</label>
                                        <textarea name="p_address" id="p_address" rows="3"
                                                  class="form-control">Permanent address</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label class="control-label">Current Address</label>
                                        <textarea name="c_address" id="c_address" rows="3"
                                                  class="form-control">Current Address</textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- 4 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select name="State" id="State" class="form-control">
                                            <option  value="tn">Tamilnadu</option>
                                            <option  value="ap">Andhra Pradesh</option>
                                            <option  value="Bihar">Bihar</option>
                                            <option  value="goa">Goa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date Of Joining</label>
                                       <input type="date" name="doj" class="form-control"
                                               value="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Work Location</label>
                                        <input type="text" name="work_loc" class="form-control"
                                               value="Onsite-Cuddalore">
                                    </div>
                                </div>
                            </div>
                            <!-- 6 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>CTC</label>
                                        <input type="text" name="ctc" class="form-control"
                                               value="28,765">
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Business Unit</label>
                                        <input type="text" name="weekoff" class="form-control"
                                               value="BPO">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Position </label>
                                        <input type="text" name="purchase" class="form-control"
                                               value=" Purchase Officer">
                                    </div>
                                </div>
                            </div>
                            <!-- 7 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>RFH</label>
                                        <input type="text" name="rhf" class="form-control"
                                               value="HEPLRFH00436">
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Grade</label>
                                        <input type="text" name="grade" class="form-control"
                                               value="BPO">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Reviewer</label>
                                        <input type="text" name="hr_reviewer" class="form-control"
                                               value="Pradeesh N - pradeeshn@cavinkare.com">
                                    </div>
                                </div>
                            </div>
                            <!-- 8 -->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>HR Recruiter</label>
                                        <input type="text" name="hr_recruiter" class="form-control"
                                               value="Soumiya">
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                        <label>HR Onboarder</label>
                                        <input type="text" name="grade" class="form-control"
                                               value="Anjum Fathima">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Supervisor </label>
                                        <input type="text" name="supervisor" class="form-control"
                                               value=" Padmapriya B - padmapriyab@hemas.in">
                                    </div>
                                </div>
                            </div>
                            <!-- 9 -->

                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profile Picture</label>
                                    <div class="form-group">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="https://via.placeholder.com/200x150.png?text=Upload+your+picture"
                                                         alt=""/>
                                                                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"
                                                 style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                <span class="btn btn-info btn-file">
                                    <span class="fileinput-new"> Select Image </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <input type="file" name="image" id="image"> </span>
                                                <a href="javascript:;" class="btn btn-danger fileinput-exists"
                                                   data-dismiss="fileinput"> Remove </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!--/span-->
                                                    </div>
                        <div class="form-actions">
                            <button type="submit" id="save-form" class="btn btn-success"><i class="fa fa-check"></i>
                                Update                            </button>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    <!-- .row -->


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
    <!-- /.modal-dialog -->.
</div>


<!-- jQuery -->

@endsection
