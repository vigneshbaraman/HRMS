@extends('layouts.app')

@section('content')
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Left navbar-header -->
        <style>
            .slimScrollDiv {
                overflow: initial !important;
            }

        </style>
        @include('layouts.admin_sidebar')
        <div id="page-wrapper" class="row">
            <div class="container-fluid">
                <div class="col-md-3 filter-section other-section">
                    <ul class="nav tabs-vertical slimscrollright mt-0">
                        <li class="tab ">
                            <a href="http://127.0.0.1:8080/admin/settings/profile-settings">Profile Settings</a>
                        </li>
                        <li class="tab active">
                            <a class="active" href="http://127.0.0.1:8080/admin/role-permission">Roles & Permissions</a>
                        </li>
                        <li class="tab ">
                            <a href="http://127.0.0.1:8080/admin/settings/module-settings">Module Settings</a>
                        </li>




                    </ul>
                </div>
                <div class="
                        col-md-9
                        data-section" id="section-task">
                    <button
                        class="btn btn-default btn-xs btn-outline btn-circle m-t-5 filter-section-show hidden-sm hidden-md"
                        style="display:none"><i class="fa fa-chevron-right"></i></button>
                    <div class="row hidden-md hidden-lg">
                        <div class="col-xs-12 p-l-25 m-t-10">
                            <button class="btn btn-inverse btn-outline" id="mobile-filter-toggle"><i
                                    class="fa fa-sliders"></i></button>
                        </div>
                    </div>

                    <div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 bg-title-left">
                            <h4 class="page-title"><i class="ti-lock"></i> Roles &amp; Permissions</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-6 col-md-6 col-xs-12 text-right bg-title-right">
                            <a href="{{route('roles')}}" id="addRole"
                                class="btn btn-success btn-sm btn-outline  waves-effect waves-light"><i
                                    class="fa fa-gear"></i> Manage Role</a>
                            <ol class="breadcrumb">
                                <li><a href="http://127.0.0.1:8080/admin/dashboard">Home</a></li>
                                <li class="active">Roles &amp; Permissions</li>
                            </ol>
                        </div>
                        <!-- /.breadcrumb -->
                    </div>

                    <!-- .row -->


                    <div class="row">
                        <div class="col-xs-12">
                            <div class="white-box">
                                <div class="row">


                                    <div class="col-md-12 b-all m-t-10">
                                        <div class="row">
                                            <div class="col-md-4 text-center p-10 bg-inverse ">
                                                <h5 class="text-white"><strong id="role_display_name">Admin</strong>
                                                </h5>
                                            </div>
                                            <div class="col-md-4 text-center bg-inverse role-members">
                                                <button class="btn btn-xs btn-danger btn-rounded show-members"
                                                    data-role-id="0"><i class="fa fa-users"></i> 3 Member(s)</button>
                                            </div>
                                            <div class="col-md-4 p-10 bg-inverse" style="padding-bottom: 11px !important;">
                                                <button class="btn btn-default btn-rounded pull-right toggle-permission"
                                                    data-role-id="0"><i class="fa fa-key"></i> Permissions</button>
                                            </div>


                                            <div class="col-md-12 b-t permission-section" id="role-permission-0" style="display:none">
                                                <table class="table ">
                                                    <thead>
                                                        <tr class="bg-white">
                                                            <th>
                                                                <div class="form-group">
                                                                    <div class="checkbox checkbox-info  col-md-10">
                                                                        <input id="select_all_permission_0"
                                                                            class="select_all_permission" value="0"
                                                                            type="checkbox">
                                                                        <label for="select_all_permission_0">Select
                                                                            All</label>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <th>Add</th>
                                                            <th>View</th>
                                                            <th>Update</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Buisness unit </td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>
                                                        <tr>
                                                            <td>Grade </td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>
                                                        <tr>
                                                            <td>Work Locatiom </td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>
                                                        <tr>
                                                            <td>Blood group</td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>
                                                        <tr>
                                                            <td>Roll of intake</td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>
                                                        <tr>
                                                            <td>Department </td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>
                                                        <tr>
                                                            <td>State </td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>
                                                        <tr>
                                                            <td>Personnel </td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 b-all m-t-10">
                                        <div class="row">
                                            <div class="col-md-4 text-center p-10 bg-inverse ">
                                                <h5 class="text-white"><strong id="role_display_name">Candidate
                                                </h5>
                                            </div>
                                            <div class="col-md-4 text-center bg-inverse role-members">
                                                <button class="btn btn-xs btn-danger btn-rounded show-members"
                                                    data-role-id="1"><i class="fa fa-users"></i> 5 Member(s)</button>
                                            </div>
                                            <div class="col-md-4 p-10 bg-inverse" style="padding-bottom: 11px !important;">
                                                <button class="btn btn-default btn-rounded pull-right toggle-permission"
                                                    data-role-id="1"><i class="fa fa-key"></i> Permissions</button>
                                            </div>


                                            <div class="col-md-12 b-t permission-section" id="role-permission-1" style="display:none">
                                                <table class="table ">
                                                    <thead>
                                                        <tr class="bg-white">
                                                            <th>
                                                                <div class="form-group">
                                                                    <div class="checkbox checkbox-info  col-md-10">
                                                                        <input id="select_all_permission_0"
                                                                            class="select_all_permission" value="0"
                                                                            type="checkbox">
                                                                        <label for="select_all_permission_0">Select
                                                                            All</label>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <th>Add</th>
                                                            <th>View</th>
                                                            <th>Update</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Pre Onboarding</td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>
                                                        <tr>
                                                            <td>Induction Schedule </td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>
                                                        <tr>
                                                            <td>Buddy Info </td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>
                                                        <tr>
                                                            <td>Buddy Feedback</td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>

                                                        <tr>
                                                            <td>Profile</td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 b-all m-t-10">
                                        <div class="row">
                                            <div class="col-md-4 text-center p-10 bg-inverse ">
                                                <h5 class="text-white"><strong id="role_display_name">Buddy
                                                </h5>
                                            </div>
                                            <div class="col-md-4 text-center bg-inverse role-members">
                                                <button class="btn btn-xs btn-danger btn-rounded show-members"
                                                    data-role-id="2"><i class="fa fa-users"></i> 2 Member(s)</button>
                                            </div>
                                            <div class="col-md-4 p-10 bg-inverse" style="padding-bottom: 11px !important;">
                                                <button class="btn btn-default btn-rounded pull-right toggle-permission"
                                                    data-role-id="2"><i class="fa fa-key"></i> Permissions</button>
                                            </div>


                                            <div class="col-md-12 b-t permission-section" id="role-permission-2" style="display:none">
                                                <table class="table ">
                                                    <thead>
                                                        <tr class="bg-white">
                                                            <th>
                                                                <div class="form-group">
                                                                    <div class="checkbox checkbox-info  col-md-10">
                                                                        <input id="select_all_permission_0"
                                                                            class="select_all_permission" value="0"
                                                                            type="checkbox">
                                                                        <label for="select_all_permission_0">Select
                                                                            All</label>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <th>Add</th>
                                                            <th>View</th>
                                                            <th>Update</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Buddy Info</td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>
                                                        <tr>
                                                            <td>Profile </td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>



                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 b-all m-t-10">
                                        <div class="row">
                                            <div class="col-md-4 text-center p-10 bg-inverse ">
                                                <h5 class="text-white"><strong id="role_display_name">HRSS
                                                </h5>
                                            </div>
                                            <div class="col-md-4 text-center bg-inverse role-members">
                                                <button class="btn btn-xs btn-danger btn-rounded show-members"
                                                    data-role-id="3"><i class="fa fa-users"></i> 2 Member(s)</button>
                                            </div>
                                            <div class="col-md-4 p-10 bg-inverse" style="padding-bottom: 11px !important;">
                                                <button class="btn btn-default btn-rounded pull-right toggle-permission"
                                                    data-role-id="3"><i class="fa fa-key"></i> Permissions</button>
                                            </div>


                                            <div class="col-md-12 b-t permission-section" id="role-permission-3" style="display:none">
                                                <table class="table ">
                                                    <thead>
                                                        <tr class="bg-white">
                                                            <th>
                                                                <div class="form-group">
                                                                    <div class="checkbox checkbox-info  col-md-10">
                                                                        <input id="select_all_permission_0"
                                                                            class="select_all_permission" value="0"
                                                                            type="checkbox">
                                                                        <label for="select_all_permission_0">Select
                                                                            All</label>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <th>Add</th>
                                                            <th>View</th>
                                                            <th>Update</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Pre onboarding</td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>
                                                        <tr>
                                                            <td>Candidate</td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>


                                                        </tr>
                                                        <tr>
                                                            <td>Profile </td>

                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="1" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="2" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="3" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="switchery-demo">
                                                                    <input type="checkbox"
                                                                        class="js-switch assign-role-permission permission_0"
                                                                        data-size="small" data-color="#00c292"
                                                                        data-permission-id="4" data-role-id="0"
                                                                        data-switchery="true" style="display: none;">
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
                        </div>
                    </div>
                    <!-- .row -->


                    <div class="modal fade bs-modal-md in" id="projectCategoryModal" role="dialog"
                        aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md" id="modal-data-application">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true"></button>
                                    <span class="caption-subject font-red-sunglo bold uppercase" id="modelHeading"></span>
                                </div>
                                <div class="modal-body">
                                    <div class="portlet-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>User Role</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id="role-0">
                                                        <td>1</td>
                                                        <td>
                                                            <a href="#" data-name="name"
                                                                data-url="http://127.0.0.1:8080/admin/role-permission/0"
                                                                class="roleEditable editable editable-click"
                                                                data-type="text" data-pk="0" data-value="Buddy">Buddy</a>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:;" data-role-id="0"
                                                                class="btn btn-sm btn-danger btn-rounded delete-category">Remove</a>
                                                        </td>
                                                    </tr>
                                                    <tr id="role-1">
                                                        <td>2</td>
                                                        <td>
                                                            Admin
                                                        </td>
                                                        <td>
                                                            <a href="javascript:;" data-role-id="0"
                                                                class="btn btn-sm btn-danger btn-rounded delete-category">Remove</a>
                                                        </td>
                                                    </tr>
                                                    <tr id="role-2">
                                                        <td>3</td>
                                                        <td>
                                                            Candidate
                                                        </td>
                                                        <td>
                                                            <a href="javascript:;" data-role-id="0"
                                                                class="btn btn-sm btn-danger btn-rounded delete-category">Remove</a>
                                                        </td>
                                                    </tr>
                                                    <tr id="role-3">
                                                        <td>4</td>
                                                        <td>
                                                            Client
                                                        </td>
                                                        <td>
                                                            <a href="javascript:;" data-role-id="0"
                                                                class="btn btn-sm btn-danger btn-rounded delete-category">Remove</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <hr>
                                        <form method="POST" action="http://127.0.0.1:8080/admin/role-permission/create"
                                            accept-charset="UTF-8" id="createProjectCategory" class="ajax-form"
                                            onsubmit="return false"><input name="_token" type="hidden"
                                                value="9HTTTIuKEouOuSns2n0zX9yNY29tUdcc4GJD1tS6">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-xs-12 ">
                                                        <div class="form-group">
                                                            <label>Role Name</label>
                                                            <input type="text" name="name" id="name"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="button" id="save-category" class="btn btn-success"> <i
                                                        class="fa fa-check"></i> Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn default" data-dismiss="modal">Close</button>
                                    {{-- <button type="button" class="btn blue">Save changes</button> --}}
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
@endsection
