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
    img.img-circle {
          border-radius: 50%;
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
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 bg-title-left">
            <h4 class="page-title"><i class="icon-user"></i> Employees</h4>
        </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 bg-title-right">
            <ol class="breadcrumb">
                <li><a href="../admin/dashboard">Home</a></li>
                <li><a href="../admin/employees/employees">Employees</a></li>
                <li class="active">Details</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>

                        <!-- .row -->
                        <!-- .row -->
<div class="row">
    <div class="col-md-5 col-xs-12">
        <div class="white-box">
            <div class="user-bg">
                <img src="../img/default-profile-3.png" alt="user" width="100%">
                <div class="overlay-box">
                    <div class="user-content"> <a href="javascript:void(0)">
                            <img src="../img/default-profile-3.png" alt="user" class="thumb-lg img-circle">
                            </a>
                        <h4 class="text-white">Kumar</h4>
                        <h5 class="text-white">kumar@example.net</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-7">
        <div class="user-btm-box">
            <div class="row row-in">
                <div class="col-md-6 row-in-br">
                    <div class="col-in row">
                            <h3 class="box-title">Tasks Done</h3>
                            <div class="col-xs-4"><i class="ti-check-box text-success"></i></div>
                            <div class="col-xs-8 text-right counter">0</div>
                    </div>
                </div>
                <div class="col-md-6 row-in-br  b-r-none">
                    <div class="col-in row">
                            <h3 class="box-title">Hours Logged</h3>
                        <div class="col-xs-2"><i class="icon-clock text-info"></i></div>
                        <div class="col-xs-10 text-right counter" style="font-size: 13px">0 hrs </div>
                    </div>
                </div>
            </div>
            <div class="row row-in">
                <div class="col-md-6 row-in-br b-t">
                    <div class="col-in row">
                            <h3 class="box-title">Leaves Taken</h3>
                            <div class="col-xs-4"><i class="icon-logout text-warning"></i></div>
                            <div class="col-xs-8 text-right counter">0</div>
                    </div>
                </div>
                <div class="col-md-6 row-in-br  b-r-none b-t">
                    <div class="col-in row">
                            <h3 class="box-title">Remaining Leaves</h3>
                        <div class="col-xs-4"><i class="icon-logout text-danger"></i></div>
                        <div class="col-xs-8 text-right counter">15</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="white-box">
            <ul class="nav nav-tabs tabs customtab">
                <li class="active tab"><a href="#basic_info" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-home"></i></span> <span class="hidden-xs">Profile</span> </a> </li>
                <li class="tab"><a href="#Contact_info" data-toggle="tab"> <span class="visible-xs"><i class="fa fa fa-bar-chart-o" aria-hidden="true"></i></span> <span class="hidden-xs">Contact</span> </a> </li>
                <li class="tab"><a href="#working_info" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-cogs"></i></span> <span class="hidden-xs">Working Information</span> </a> </li>

                <li class="tab"><a href="#hr_info" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-laptop"></i></span> <span class="hidden-xs">HR Information</span> </a> </li>
                <li class="tab"><a href="#education_info" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-book"></i></span> <span class="hidden-xs">Education</span> </a> </li>
                <li class="tab"><a href="#Experience_info" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="icon-layers"></i></span> <span class="hidden-xs">Experience</span> </a> </li>
                <li class="tab"><a href="#doc_info" data-toggle="tab"> <span class="visible-xs"><i class="fa-list-alt"></i></span> <span class="hidden-xs">Other Documents</span> </a> </li>
                <li class="tab"><a href="#pass_info" data-toggle="tab" > <span class="visible-xs"><i class="icon-list"></i></span> <span class="hidden-xs">Change Password</span> </a> </li>

            </ul>
            <div class="tab-content">
                    <!-- profile MENU  -->
                    <div class="tab-pane active" id="basic_info">
                        <div class="row">
                            <div class="card flex-fill ctm-border-radius shadow-sm">
                                <!-- <div class="card-header">
                                    <h4 class="card-title mb-0">Basic Information</h4>
                                </div> -->
                                <div class="row">
                                    <div class="col-xs-6 col-md-4  b-r"> <strong>Name : </strong>  Kumar
                                    </div>
                                    <div class="col-xs-6 col-md-4 b-r"> <strong>Gender : </strong> Male
                                    </div>
                                    <div class="col-xs-6 col-md-4"> <strong>Marital Status : </strong> Single
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-6 col-md-4  b-r"> <strong>Blood Group : </strong> A++
                                    </div>
                                    <div class="col-xs-6 col-md-4 b-r"> <strong>Date of Birth :</strong> 11-05-1994
                                    </div>
                                    <div class="col-xs-6 col-md-4"> <strong>Roll of Intake : </strong>  HEPL
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-6 col-md-6  b-r"> <strong>Attendance Format :</strong> Mon-Sat 5.5 days / week
                                    </div>
                                    <div class="col-xs-6 col-md-6 b-r"> <strong>Weekoffs : </strong> Sunday
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!-- contact MENU  -->
                    <div class="tab-pane " id="Contact_info">
                       <div class="row">
                            <div class="card flex-fill ctm-border-radius shadow-sm">
                                <!-- <div class="card-header">
                                    <h4 class="card-title mb-0">Contact</h4>
                                </div> -->
                                <!-- <div class="card-body text-center">
                                    <p class="card-text mb-3"><span class="text-info"> </span></p>
                                    <p class="card-text mb-3"><span class="text-info"></span></p>
                                    <p class="card-text mb-3"><span class="text-info"></span>/p>
                                    <p class="card-text mb-3"><span class="text-info"></span> </p>
                                    <p class="card-text mb-3"><span class="text-info">Current Address:</span> </p>
                                    <p class="card-text mb-3"><span class="text-info"></span> Tamil Nadu</p>
                                    <a href="javascript:void(0)" class="btn btn-theme ctm-border-radius text-white btn-sm" data-toggle="modal" data-target="#edit_Contact"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                </div> -->
                                <div class="row">
                                    <div class="col-xs-6 col-md-4  b-r"> <strong>Phone Number :</strong>  987654321
                                    </div>
                                    <div class="col-xs-6 col-md-4 b-r"> <strong>Secondary Number : </strong> 986754231
                                    </div>
                                    <div class="col-xs-6 col-md-4"> <strong>Personal Email : </strong> mariacotton@example.com</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-6 col-md-6  b-r"> <strong>Permanent Address:</strong> 465 - KALIYAMMAN KOIL STREET, SANDRORPALAYAM, CUDDALORE PORT, CUDDALORE , TN - 607003 </div>
                                    <div class="col-xs-6 col-md-6 b-r"> <strong>Current Address :</strong> 465 - KALIYAMMAN KOIL STREET, SANDRORPALAYAM, CUDDALORE PORT, CUDDALORE , TN - 607003
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-6 col-md-4"> <strong>State : </strong>  Tamil Nadu
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!-- Working info -->
                    <div class="tab-pane " id="working_info">
                        <div class="row">
                            <div class="card flex-fill ctm-border-radius shadow-sm">
                                <!-- <div class="card-header">
                                    <h4 class="card-title mb-0">Working Information</h4>
                                </div> -->
                                <!-- <div class="card-body text-center">
                                    <p class="card-text mb-3"><span class="text-info">Date Of Joining: </span>06 Jun 2022</p>
                                    <p class="card-text mb-3"><span class="text-info">Work Location : </span>Onsite-Cuddalore</p>
                                    <p class="card-text mb-3"><span class="text-info">CTC Proposed : </span>29869</p>
                                    <p class="card-text mb-3"><span class="text-info">Business Unit : </span>BPO</p>
                                    <p class="card-text mb-3"><span class="text-info">Position :</span> Purchase Officer</p>
                                    <p class="card-text mb-3"><span class="text-info">RFH :</span> HEPLRFH00436</p>
                                    <p class="card-text mb-3"><span class="text-info">Department:</span> Business Process Outsourcing</p>

                                    <p class="card-text mb-3"><span class="text-info">Grade :</span> 7B</p>
                                    <a href="javascript:void(0)" class="btn btn-theme ctm-border-radius text-white btn-sm" data-toggle="modal" data-target="#edit_information"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                </div> -->
                                <div class="row">
                                    <div class="col-xs-6 col-md-4  b-r"> <strong>Date Of Joining :</strong>  06 Jun 2022
                                    </div>
                                    <div class="col-xs-6 col-md-4 b-r"> <strong>Work Location : </strong> Onsite-Cuddalore
                                    </div>
                                    <div class="col-xs-6 col-md-4"> <strong>CTC : </strong> 29,869</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-6 col-md-4  b-r"> <strong>Business Unit :</strong>  BPO
                                    </div>
                                    <div class="col-xs-6 col-md-4 b-r"> <strong>Position : </strong> Purchase Officer
                                    </div>
                                    <div class="col-xs-6 col-md-4"> <strong>Department : </strong> Business Process Outsourcing</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-6 col-md-6  b-r"> <strong>RFH :</strong>  HEPLRFH00436</div>
                                    <div class="col-xs-6 col-md-6 b-r"> <strong>Grade : </strong> 7G
                                    </div>
                                </div><hr>
                            </div>
                        </div>
                    </div>
                    <!-- HR Information -->
                    <div class="tab-pane " id="hr_info">
                        <div class="card flex-fill ctm-border-radius shadow-sm">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">HR Information</h4>
                                </div>
                                <!-- <div class="card-body text-center">
                                    <p class="card-text mb-3"><span class="text-info">HR Recruiter : </span>Soumiya</p>
                                    <p class="card-text mb-3"><span class="text-info">HR Onboarder : </span>Anjum Fathima</p>
                                    <p class="card-text mb-3"><span class="text-info">Supervisor : </span>Padmapriya B - padmapriyab@hemas.in</p>
                                    <p class="card-text mb-3"><span class="text-info">Reviewer : </span>Pradeesh N - pradeeshn@cavinkare.com</p>
                                    <a href="javascript:void(0)" class="btn btn-theme ctm-border-radius text-white btn-sm" data-toggle="modal" data-target="#edit_HRinformation"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                </div> -->
                                <div class="row">
                                    <div class="col-xs-6 col-md-4  b-r"> <strong>HR Recruiter :</strong>  Soumiya
                                    </div>
                                    <div class="col-xs-6 col-md-4 b-r"> <strong>HR Onboarder : </strong> Anjum Fathima
                                    </div>
                                    <div class="col-xs-6 col-md-4"> <strong>Supervisor : </strong> Padmapriya B - padmapriyab@hemas.in</div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-xs-6 col-md-12  b-r"> <strong>Reviewer :</strong>  Pradeesh N - pradeeshn@cavinkare.com
                                    </div>
                                </div>
                                <hr>
                            </div>
                    </div>

                <!-- 2 nd tab education -->
                <div class="tab-pane" id="education_info">
                    <hr>
                     <div class="card shadow-sm ctm-border-radius">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Review Forms</h4>
                                </div>
                                <div class="card-body">
                                    <div class="employee-office-table">
                                        <div class="table-responsive">
                                        <table class="table custom-table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Qualification</th>
                                                    <th>University</th>
                                                    <th>Begin On</th>
                                                    <th>Due By</th>
                                                    <th>File</th>
                                                    <!-- <th>Status</th> -->
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a>SSLC</a></td>
                                                    <td>University</td>
                                                    <td>15 Dec 2019</td>
                                                    <td>17 Dec 2019</td>
                                                    <td><a href="employment.html" class="avatar"><img class="img-fluid img-circle" alt="avatar image" src="../img/profiles/img-10.jpg" style="width:30px"></a>
                                                        <!-- <h2><a href="employment.html">SSLC</a></h2> -->
                                                    </td>
                                                    <td>
                                                        <div class="table-action">
                                                            <a href="edit-review.html"  class="btn btn-primary fa fa-pencil">
                                                                <span class="lnr lnr-pencil"></span> Edit
                                                            </a>
                                                            <a href="javascript:void(0);" class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#delete">
                                                                <span class="lnr lnr-trash"></span> Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a> +2</a></td>
                                                    <td>AAA university</td>
                                                    <td>15 Dec 2019</td>
                                                    <td>17 Dec 2019</td>
                                                    <td>
                                                        <a href="employment.html" class="avatar"><img class="img-fluid img-circle" alt="avatar image" src="../img/profiles/img-10.jpg" style="width:30px"></a>
                                                        <!-- <h2><a href="employment.html">SSLC</a></h2> -->
                                                    </td>
                                                   <td>
                                                        <div class="table-action">
                                                            <a href="edit-review.html"  class="btn btn-primary fa fa-pencil">
                                                                <span class="lnr lnr-pencil"></span> Edit
                                                            </a>
                                                            <a href="javascript:void(0);" class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#delete">
                                                                <span class="lnr lnr-trash"></span> Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a>B.SC</a></td>
                                                    <td> VVVV university</td>
                                                    <td>15 Dec 2019</td>
                                                    <td>17 Dec 2019</td>
                                                    <td>
                                                        <a href="employment.html" class="avatar"><img class="img-fluid img-circle" alt="avatar image" src="../img/profiles/img-10.jpg" style="width:30px"></a>
                                                        <!-- <h2><a href="employment.html">SSLC</a></h2> -->
                                                    </td>
                                                    <td>
                                                        <div class="table-action">
                                                            <a href="edit-review.html"  class="btn btn-primary fa fa-pencil">
                                                                <span class="lnr lnr-pencil"></span> Edit
                                                            </a>
                                                            <a href="javascript:void(0);" class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#delete">
                                                                <span class="lnr lnr-trash"></span> Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td><a>MCA</a></td>
                                                    <td> TRTRTR university</td>
                                                    <td>15 Dec 2019</td>
                                                    <td>17 Dec 2019</td>
                                                    <td>
                                                        <a href="employment.html" class="avatar"><img class="img-fluid img-circle" alt="avatar image" src="../img/profiles/img-10.jpg" style="width:30px"></a>
                                                        <!-- <h2><a href="employment.html">SSLC</a></h2> -->
                                                    </td>
                                                    <td>
                                                        <div class="table-action">
                                                            <a href="edit-review.html"  class="btn btn-primary fa fa-pencil">
                                                                <span class="lnr lnr-pencil"></span> Edit
                                                            </a>
                                                            <a href="javascript:void(0);" class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#delete">
                                                                <span class="lnr lnr-trash"></span> Delete
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div>
                </div>
                 <!-- 3rd Experience -->
                <div class="tab-pane" id="Experience_info">
                    <hr>
                    <div class="ctm-border-radius shadow-sm card">
                        <div class="card-body">
                                    <!--Content tab-->
                            <div class="row people-grid-row">
                                <div class="col-md-3 col-lg-3 col-xl-4">
                                    <div class="card widget-profile">
                                        <div class="card-body">
                                            <div class="pro-widget-content text-center">
                                                <div class="profile-info-widget">
                                                    <a class="fa fa-suitcase" style="font-size:25px;color:black">
                                                        <!-- <img alt="User Image"> -->
                                                    </a>
                                                    <div class="profile-det-info">
                                                        <h5><a href="employment.html" class="text-info">Maria Cotton</a></h5>
                                                        <div>
                                                            <p class="mb-0"><b>PHP Team Lead</b></p>
                                                            <p class="mb-0 ctm-text-sm">3Years</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-4">
                                    <div class="card widget-profile">
                                        <div class="card-body">
                                            <div class="pro-widget-content text-center">
                                                <div class="profile-info-widget">
                                                    <a class="fa fa-suitcase" style="font-size:25px;color:black">
                                                        <!-- <img src="../public/img/profiles/img-5.jpg" alt="User Image"> -->
                                                    </a>
                                                    <div class="profile-det-info">
                                                        <h5><a href="employment.html" class="text-info">Danny Ward</a></h5>
                                                        <div>
                                                            <p class="mb-0"><b>Designing Team Lead</b></p>
                                                            <p class="mb-0 ctm-text-sm">2 Years</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-4">
                                    <div class="card widget-profile">
                                        <div class="card-body">
                                            <div class="pro-widget-content text-center">
                                                <div class="profile-info-widget">
                                                    <a class="fa fa-suitcase" style="font-size:25px;color:black">
                                                        <!-- <img src="../public/img/profiles/img-4.jpg" alt="User Image"> -->
                                                    </a>
                                                    <div class="profile-det-info">
                                                        <h5><a href="employment.html" class="text-info">Linda Craver</a></h5>
                                                        <div>
                                                            <p class="mb-0"><b>IOS Team Lead</b></p>
                                                            <p class="mb-0 ctm-text-sm">1 Year</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-4">
                                    <div class="card widget-profile">
                                        <div class="card-body">
                                            <div class="pro-widget-content text-center">
                                                <div class="profile-info-widget">
                                                    <a class="fa fa-suitcase" style="font-size:25px;color:black">
                                                        <!-- <img src="../public/img/profiles/img-3.jpg" alt="User Image"> -->
                                                    </a>
                                                    <div class="profile-det-info">
                                                        <h5><a href="employment.html" class="text-info">Jenni Sims</a></h5>
                                                        <div>
                                                            <p class="mb-0"><b>Android Team Lead</b></p>
                                                            <p class="mb-0 ctm-text-sm">2 Years</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-4">
                                    <div class="card widget-profile">
                                        <div class="card-body">
                                            <div class="pro-widget-content text-center">
                                                <div class="profile-info-widget">
                                                    <a class="fa fa-suitcase" style="font-size:25px;color:black">
                                                        <!-- <img src="../public/img/profiles/img-2.jpg" alt="User Image"> -->
                                                    </a>
                                                    <div class="profile-det-info">
                                                        <h5><a href="employment.html" class="text-info">John Gibbs</a></h5>
                                                        <div>
                                                            <p class="mb-0"><b> Business Team Lead</b></p>
                                                            <p class="mb-0 ctm-text-sm">2 Years</p>
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
                </div>
                <!-- 4th documents  -->
                <div class="tab-pane" id="doc_info">
                    <div class="card ctm-border-radius shadow-sm">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    <h4 class="card-title doc d-inline-block mb-0">Documents</h4>
                                </div>
                                <div class="col-md-9 text-right">
                                    <h4><a href="javascript:void(0)" class="float-right doc-fold text-info d-inline-block text-info" data-toggle="modal" data-target="#add-document" >+ Add Document</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="ctm-border-radius shadow-sm card">
                                <div class="card-header">
                                    <h3 class="card-title d-inline-block mb-0 mt-2">CV</h3>
                                    <!-- <div class="team-action-icon float-right">
                                        <span data-toggle="modal" data-target="#delete">
                                            <a href="javascript:void(0)" class="btn btn-theme text-white ctm-border-radius" title="Delete" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                        </span>
                                    </div> -->
                                </div>
                                <div class="card-body">
                                    <a href="../documents/test.pdf" target="_blank">
                                        <span class="avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="CV"><img src="../img/profiles/img-6.jpg" alt="CV" class="img-fluid img-circle" style="width:50px" /></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="ctm-border-radius shadow-sm card">
                                <div class="card-header">
                                    <h3 class="page-sub-title d-inline-block mb-0 mt-2">Addhar</h3>
                                    <!-- <div class="team-action-icon float-right">
                                        <span data-toggle="modal" data-target="#delete">
                                            <a href="javascript:void(0)" class="btn btn-theme text-white ctm-border-radius" title="Delete"><i class="fa fa-trash"></i></a>
                                        </span>
                                    </div> -->
                                </div>
                                <div class="card-body">
                                    <a href="../documents/sample2.doc">
                                        <span class="avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Addhar"><img src="../img/profiles/img-5.jpg" alt="Addhar" class="img-fluid img-circle" style="width:50px"/></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="ctm-border-radius shadow-sm card" style="margin-top: 15px;">
                                <div class="card-header">
                                    <h4 class="page-sub-title d-inline-block mb-0 mt-2">Pancard</h4>
                                    <!-- <div class="team-action-icon float-right">
                                        <span data-toggle="modal" data-target="#delete">
                                            <a href="javascript:void(0)" class="btn btn-theme text-white ctm-border-radius" title="Delete"><i class="fa fa-trash"></i></a>
                                        </span>
                                    </div> -->
                                </div>
                                <div class="card-body">
                                    <a href="../documents/test.pdf" target="_blank">
                                        <span class="avatar" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pancard"><img src="../img/profiles/img-5.jpg" alt="Pancard" class="img-fluid img-circle" style="width:50px"/></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Add a Key Date Modal-->
                        <div class="modal fade" id="add-document">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title mb-3">Add Document</h4>
                                        <div class="form-group">
                                            <div class="col form-group">
                                                <select name="weekoffs" class="form-control select2" required>
                                                    <option value=""> Document Type</option>
                                                    <option value="Sunday, Saturday">SSLC</option>
                                                    <option value="Sunday">cv</option>
                                                    <option value="Any">Passport</option>
                                                    <option value="Any">visa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <input class="form-control date-enter" type="file" />
                                            </div>
                                        </div>
                                        <button type="button" style="background-color: red;" class="btn btn-danger ctm-border-radius float-right ml-3" data-dismiss="modal">Cancel</button>
                                        <button type="button" style="background-color: blue;" class="btn btn-theme button-1 text-white ctm-border-radius float-right">Add Document</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 5th change password -->
                <div class="tab-pane" id="pass_info">
                    <div class="row">
                        <div class="col-lg-6 d-flex">
                            <div class="card flex-fill ctm-border-radius shadow-sm">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Change Password</h4>
                                    <span class="ctm-text-sm">Your password needs to be at least 8 characters long.</span>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Current Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="New Password" id="pwd">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Repeat Password">
                                    </div>
                                    <button type="button" style="background-color: red;" class="btn btn-danger ctm-border-radius float-right ml-3" data-dismiss="modal">Cancel</button>
                                        <button type="button" style="background-color: green;" class="btn btn-theme button-1 text-white ctm-border-radius float-right">Add Document</button>
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
</div>
<!-- /.row -->

        <div class="modal fade bs-modal-md in" id="edit-column-form" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
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

