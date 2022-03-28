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
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 bg-title-left">
            <h4 class="page-title"><i class="icon-user"></i> Documents</h4>
        </div>
        <!-- /.page title -->
        <!-- .breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 bg-title-right">
            <ol class="breadcrumb">
                <li><a href="../admin/dashboard">Home</a></li>
                <li><a href="../admin/employees/employees">Documents</a></li>
                <li class="active">Details</li>
            </ol>
        </div>
        <!-- /.breadcrumb -->
    </div>

                        <!-- .row -->
                        <!-- .row -->
<div class="row">


    <div class="col-xs-12">
        <div class="white-box">

            <div class="tab-content">

                <!-- 4th documents  -->
                <div class="tab-pane active" id="doc_info">
                    <div class="card ctm-border-radius shadow-sm">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-3 text-left">
                                    {{-- <h4 class="card-title doc d-inline-block mb-0">Documents</h4> --}}
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
                                    <a href="../documents/sample.pdf" target="_blank">
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
                                    <a href="../documents/sample.pdf" target="_blank">
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
                                    <a href="../documents/sample.pdf" target="_blank">
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


<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            Loading ...
        </div>
    </div>
</div>







@endsection

