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
                            <h4 class="page-title"><i class="icon-user"></i> Business Unit</h4>
                        </div>
                        <!-- /.page title -->
                        <!-- .breadcrumb -->
                        <div class="col-lg-6 col-sm-8 col-md-8 col-xs-12 text-right bg-title-right">
                            <a href="#" id="add_buisness"
                                class="btn btn-outline btn-success btn-sm">Add Business <i class="fa fa-plus"
                                    aria-hidden="true"></i></a>

                            <ol class="breadcrumb">
                                <li><a href="http://127.0.0.1:8080/admin/dashboard">Home</a></li>
                                <li class="active">Business</li>
                            </ol>
                        </div>
                        <!-- /.breadcrumb -->
                    </div>

                    <!-- .row -->

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="white-box">


                                <div class="table-responsive" >
                                    {{-- <table
                                        class="table table-bordered table-hover toggle-circle default footable-loaded footable"
                                        id="users-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Business</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="group1">
                                                <td>1</td>
                                                <td>BPO</td>
                                                <td>

                                                    <div class="btn-group dropdown m-r-10">
                                                        <button aria-expanded="false" data-toggle="dropdown"
                                                            class="btn btn-default dropdown-toggle waves-effect waves-light"
                                                            type="button"><i class="fa fa-gears "></i></button>
                                                        <ul role="menu" class="dropdown-menu pull-right">
                                                            <li><a href="http://127.0.0.1:8080/admin/designations/1/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></li>

                                                            <li><a href="http://127.0.0.1:8080/admin/designations/1/edit"><i class="icon-settings"></i> Status</a></li>

                                                            <li><a href="javascript:;" data-group-id="1" class="sa-params"><i class="fa fa-times" aria-hidden="true"></i> Delete </a></li>

                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="group2">
                                            <td>2</td>
                                            <td>KPO</td>
                                            <td>

                                                <div class="btn-group dropdown m-r-10">
                                                    <button aria-expanded="false" data-toggle="dropdown"
                                                        class="btn btn-default dropdown-toggle waves-effect waves-light"
                                                        type="button"><i class="fa fa-gears "></i></button>
                                                    <ul role="menu" class="dropdown-menu pull-right">
                                                        <li><a href="http://127.0.0.1:8080/admin/designations/1/edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a></li>

                                                        <li><a href="http://127.0.0.1:8080/admin/designations/1/edit"><i class="icon-settings"></i> Status</a></li>

                                                        <li><a href="javascript:;" data-group-id="1" class="sa-params"><i class="fa fa-times" aria-hidden="true"></i> Delete </a></li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table> --}}
                                    <table class="table" id="business_data" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Business</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->
                    <div class="modal fade bs-modal-md in" id="buisnessModal" role="dialog"
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

                                    <form method="POST" action="javascript:void(0)" id="add_business_unit" class="ajax-form">
                                        {{ csrf_field() }}
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-xs-12 ">
                                                    <div class="form-group">
                                                        <label>Business Name</label>
                                                        <input type="text" name="business_name" id="business_name"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="button" id="btnSubmit" class="btn btn-success"> <i
                                                    class="fa fa-check"></i> Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn default" data-dismiss="modal">Close</button>
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
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- Common JS -->
<script src="../pro_js/admin/add_business_unit.js"></script>


<script>

 var add_business_unit_process_link = "{{url('add_business_unit_process')}}";

</script>
