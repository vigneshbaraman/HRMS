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
        <style>
            .slimScrollDiv{
                overflow: initial !important;
            }
            /* .nav>li>a:focus{
                background-color: #041731
            } */
            </style>
        <div id="page-wrapper" class="row" style="min-height: 137px;">
            <div class="container-fluid">




                <div class="
                            col-md-12
                            data-section"
                    id="section-task">
                    <button
                        class="btn btn-default btn-xs btn-outline btn-circle m-t-5 filter-section-show hidden-sm hidden-md"
                        style="display:none"><i class="fa fa-chevron-right"></i></button>

                    <div class="row bg-title">
                        <!-- .page title -->
                        <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 bg-title-left">
                            <h4 class="page-title"><i class="icon-user"></i> Grade </h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-6 col-sm-8 col-md-8 col-xs-12 text-right bg-title-right">
                            <a href="#" id="add_grade"
                                class="btn btn-outline btn-success btn-sm">Add Grade <i class="fa fa-plus"
                                    aria-hidden="true"></i></a>

                            <ol class="breadcrumb">
                                <li><a href="http://127.0.0.1:8080/admin/dashboard">Home</a></li>
                                <li class="active">Grade</li>
                            </ol>
                        </div>
                        <!-- /.breadcrumb -->
                    </div>

                    <!-- .row -->

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="white-box">


                                <div class="table-responsive" >
                                    <table
                                        class="table table-bordered table-hover toggle-circle default footable-loaded footable"
                                        id="users-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Grade</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="group1">
                                                <td>1</td>
                                                <td>6A</td>
                                                <td>

                                                    <div class="btn-group dropdown m-r-10">
                                                        <button aria-expanded="false" data-toggle="dropdown"
                                                            class="btn btn-default dropdown-toggle waves-effect waves-light"
                                                            type="button"><i class="fa fa-gears "></i></button>
                                                        <ul role="menu" class="dropdown-menu pull-right">
                                                            <li><a href="http://127.0.0.1:8080/admin/designations/1/edit"><i
                                                                        class="icon-settings"></i> Manage</a></li>
                                                            <li><a href="javascript:;" data-group-id="1"
                                                                    class="sa-params"><i class="fa fa-times"
                                                                        aria-hidden="true"></i> Delete </a></li>

                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="group2">
                                            <td>2</td>
                                            <td>6B</td>
                                            <td>

                                                <div class="btn-group dropdown m-r-10">
                                                    <button aria-expanded="false" data-toggle="dropdown"
                                                        class="btn btn-default dropdown-toggle waves-effect waves-light"
                                                        type="button"><i class="fa fa-gears "></i></button>
                                                    <ul role="menu" class="dropdown-menu pull-right">
                                                        <li><a href="http://127.0.0.1:8080/admin/designations/1/edit"><i
                                                                    class="icon-settings"></i> Manage</a></li>
                                                        <li><a href="javascript:;" data-group-id="1"
                                                                class="sa-params"><i class="fa fa-times"
                                                                    aria-hidden="true"></i> Delete </a></li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->
                    <div class="modal fade bs-modal-md in" id="gradeModal" role="dialog"
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

                                    <form method="POST" action="http://127.0.0.1:8080/admin/role-permission/create"
                                        accept-charset="UTF-8" id="createProjectCategory" class="ajax-form"
                                        onsubmit="return false"><input name="_token" type="hidden"
                                            value="9HTTTIuKEouOuSns2n0zX9yNY29tUdcc4GJD1tS6">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-xs-12 ">
                                                    <div class="form-group">
                                                        <label>Grade Name</label>
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
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
@endsection