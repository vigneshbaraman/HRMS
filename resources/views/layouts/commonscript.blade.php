<!-- jQuery -->
<script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js'></script>

<!-- Sidebar menu plugin JavaScript -->
<script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--Slimscroll JavaScript For custom scroll-->
<script src="../js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="../js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="../plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<script src="../js/custom.js"></script>
<script src="../js/jasny-bootstrap.js"></script>
<script src="../plugins/froiden-helper/helper.js"></script>
<script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>

<!-- toast js -->
<script src="../plugins/bower_components/toastify/toastify.js"></script>

<script src="../js/cbpFWTabs.js"></script>
<script src="../plugins/bower_components/icheck/icheck.min.js"></script>
<script src="../plugins/bower_components/icheck/icheck.init.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/jquery.magnific-popup-init.js"></script>
<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
<script src="../plugins/bower_components/moment/moment.js"></script>

<script src="../pro_js/roles/roles.js"></script>
<script src="../plugins/bower_components/switchery/dist/switchery.min.js"></script>

<script src='https://www.google.com/recaptcha/api.js'></script>


<script>
    //reload page if landed via back button
    if (window.performance && window.performance.navigation.type === window.performance.navigation.TYPE_BACK_FORWARD) {
        window.location.reload();
    }

    dateRangePickerCustom = {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last 6 Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
        'Last 90 Days': [moment().subtract(89, 'days'), moment()],
        'Last 6 Month': [moment().subtract(6, 'months'), moment()],
        'Last 1 Year': [moment().subtract(1, 'years'), moment()]
    }

    $('.notificationSlimScroll').slimScroll({
        height: '250',
        position: 'right',
        color: '#dcdcdc'
    });

    $('body').on('click', '.active-timer-modal', function(){
        var url = '../member/all-time-logs/show-active-timer';
        $('#modelHeading').html('Active Timer');
        $.ajaxModal('#projectTimerModal',url);
    });

    $('.datepicker, #start-date, #end-date').on('click', function(e) {
        e.preventDefault();
        $(this).attr("autocomplete", "off");
    });

    function updateOnesignalPlayerId(userId) {
        $.easyAjax({
            url: '../member/profile/updateOneSignalId',
            type: 'POST',
            data:{'userId':userId, '_token':'1epOZkrUzaziuLC7NCF6GFUnSECkeEl9imkUTDI2'},
            success: function (response) {
            }
        })
    }
    var filter =  '';
    document.addEventListener("keydown", function(event) {
        if (event.keyCode === 190 && (event.altKey && event.shiftKey)) {
            $('.ti-angle-double-right').click();
        }else if (event.keyCode === 84 && (event.altKey && event.shiftKey)) {
            window.location.href = "../admin/task/all-tasks/create"
        }
        if ((filter)){
             if(event.keyCode === 191 && (event.altKey && event.shiftKey)) {
                if(localStorage.getItem('filter-'+currentUrl) == 'hide'){
                    $('.filter-section-show').click();
                    localStorage.setItem('filter-'+currentUrl, 'show');
                }
                else{
                    $('.filter-section-close').click();
                    localStorage.setItem('filter-'+currentUrl, 'hide');
                }

            }
        }
    });

    function addOrEditStickyNote(id)
    {
        var url = '';
        var method = 'POST';
        if(id === undefined || id == "" || id == null) {
            url =  '../member/sticky-note'
        } else{

            url = "../member/sticky-note/:id";
            url = url.replace(':id', id);
            var stickyID = $('#stickyID').val();
            method = 'PUT'
        }

        var noteText = $('#notetext').val();
        var stickyColor = $('#stickyColor').val();
        $.easyAjax({
            url: url,
            container: '#responsive-modal',
            type: method,
            data:{'notetext':noteText,'stickyColor':stickyColor,'_token':'1epOZkrUzaziuLC7NCF6GFUnSECkeEl9imkUTDI2'},
            success: function (response) {
                $("#responsive-modal").modal('hide');
                getNoteData();
            }
        })
    }

    // FOR SHOWING FEEDBACK DETAIL IN MODEL
    function showCreateNoteModal(){
        var url = '../member/sticky-note/create';

        $("#responsive-modal").removeData('bs.modal').modal({
            remote: url,
            show: true
        });

        $('#responsive-modal').on('hidden.bs.modal', function () {
            $(this).find('.modal-body').html('Loading...');
            $(this).data('bs.modal', null);
        });

        return false;
    }

    // FOR SHOWING FEEDBACK DETAIL IN MODEL
    function showEditNoteModal(id){
        var url = '../member/sticky-note/:id/edit';
        url  = url.replace(':id',id);

        $("#responsive-modal").removeData('bs.modal').modal({
            remote: url,
            show: true
        });

        $('#responsive-modal').on('hidden.bs.modal', function () {
            $(this).find('.modal-body').html('Loading...');
            $(this).data('bs.modal', null);
        });

        return false;
    }

    function selectColor(id){
        $('.icolors li.active ').removeClass('active');
        $('#'+id).addClass('active');
        $('#stickyColor').val(id);

    }


    function deleteSticky(id){

        swal({
            title: "Are you sure?",
            text: "You will not be able to recover the deleted Sticky Note",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel please!",
            closeOnConfirm: true,
            closeOnCancel: true
        }, function(isConfirm){
            if (isConfirm) {

                var url = "../member/sticky-note/:id";
                url = url.replace(':id', id);

                var token = "1epOZkrUzaziuLC7NCF6GFUnSECkeEl9imkUTDI2";

                $.easyAjax({
                    type: 'POST',
                    url: url,
                    data: {'_token': token, '_method': 'DELETE'},
                    success: function (response) {
                        $('#stickyBox_'+id).hide('slow');
                        $("#responsive-modal").modal('hide');
                        getNoteData();
                    }
                });
            }
        });
    }


    //getting all chat data according to user
    function getNoteData(){

        var url = "../member/sticky-note";

        $.easyAjax({
            type: 'GET',
            url: url,
            messagePosition: '',
            data:  {},
            container: ".noteBox",
            error: function (response) {

                //set notes in box
                $('#sticky-note-list').html(response.responseText);
            }
        });
    }

    //    sticky notes script
    var stickyNoteOpen = $('#open-sticky-bar');
    var stickyNoteClose = $('#close-sticky-bar');
    var stickyNotes = $('#footer-sticky-notes');
    var viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
    var stickyNoteHeaderHeight = stickyNotes.height();

    $('#sticky-note-list').css('max-height', viewportHeight-150);

    stickyNoteOpen.click(function () {
        $('#sticky-note-list').toggle(function () {
            $(this).animate({
                height: (viewportHeight-150)
            })
        });
        stickyNoteClose.toggle();
        stickyNoteOpen.toggle();
    })

    stickyNoteClose.click(function () {
        $('#sticky-note-list').toggle(function () {
            $(this).animate({
                height: 0
            })
        });
        stickyNoteOpen.toggle();
        stickyNoteClose.toggle();
    })

</script>

<script>
    $('body').on('click', '.timer-modal', function(){
        var url = '../member/projects/time-log/create';
        $('#modelHeading').html('Start Timer For a Project');
        $.ajaxModal('#projectTimerModal',url);
    });

    $('body').on('click', '.stop-timer-modal', function(){
        var url = '../member/projects/time-log/:id';
        url = url.replace(':id', $(this).data('timer-id'));

        $('#modelHeading').html('Stop Timer');
        $.ajaxModal('#projectTimerModal',url);
    });

    $('.show-user-notifications').click(function () {
        var token = '1epOZkrUzaziuLC7NCF6GFUnSECkeEl9imkUTDI2';
        $.easyAjax({
            type: 'POST',
            url: '../show-user-notifications',
            data: {'_token': token},
            success: function (data) {
                if (data.status == 'success') {
                    $('.mailbox').html(data.html);
                }
            }
        });

    });

    $('body').on('click', '.mark-notification-read', function() {
        var token = '1epOZkrUzaziuLC7NCF6GFUnSECkeEl9imkUTDI2';
        $.easyAjax({
            type: 'POST',
            url: '../mark-notification-read',
            data: {'_token': token},
            success: function (data) {
                if(data.status == 'success'){
                    $('.top-notifications').remove();
                    $('.top-notification-count').html('0');
                    $('#top-notification-dropdown .notify').remove();
                    $('.notify').remove();
                }
            }
        });

    });

    $('body').on('click', '.toggle-password', function() {
        var $selector = $(this).parent().find('input.form-control');
        $(this).toggleClass("fa-eye fa-eye-slash");
        var $type = $selector.attr("type") === "password" ? "text" : "password";
        $selector.attr("type", $type);
    });

    $('.show-all-notifications').click(function () {
        var url = '../show-all-member-notifications';
        $('#modelHeading').html('View Unread Notifications');
        $.ajaxModal('#projectTimerModal',url);
    });

    $('#sticky-note-toggle').click(function () {
        $('#footer-sticky-notes').toggle();
        $('#sticky-note-toggle').hide();
    })

    $('body').on('click', '.right-side-toggle', function () {
        $(".right-sidebar").slideDown(50).removeClass("shw-rside");
    })

    var currentUrl = 'member.dashboard';
    $('body').on('click', '.filter-section-close', function() {
        localStorage.setItem('filter-'+currentUrl, 'hide');

        $('.filter-section').toggle();
        $('.filter-section-show').toggle();
        $('.data-section').toggleClass("col-md-9 col-md-12")
    });

    $('body').on('click', '.filter-section-show', function() {
        localStorage.setItem('filter-'+currentUrl, 'show');

        $('.filter-section-show').toggle();
        $('.data-section').toggleClass("col-md-9 col-md-12")
        $('.filter-section').toggle();
    });

    var currentUrl = 'member.dashboard';
    var checkCurrentUrl = localStorage.getItem('filter-'+currentUrl);
    if (checkCurrentUrl == "hide") {
        $('.filter-section-show').show();
        $('.data-section').removeClass("col-md-9")
        $('.data-section').addClass("col-md-12")
        $('.filter-section').hide();
    } else if (checkCurrentUrl == "show") {
        $('.filter-section-show').hide();
        $('.data-section').removeClass("col-md-12")
        $('.data-section').addClass("col-md-9")
        $('.filter-section').show();
    }
</script>



<script>
    $('#clock-in').click(function () {
        var workingFrom = $('#working_from').val();

        var currentLatitude = document.getElementById("current-latitude").value;
        var currentLongitude = document.getElementById("current-longitude").value;

        var token = "1epOZkrUzaziuLC7NCF6GFUnSECkeEl9imkUTDI2";

        $.easyAjax({
            url: '../member/attendances',
            type: "POST",
            data: {
                working_from: workingFrom,
                currentLatitude: currentLatitude,
                currentLongitude: currentLongitude,
                _token: token
            },
            success: function (response) {
                if(response.status == 'success'){
                    window.location.reload();
                }
            }
        })
    })


    function showNoticeModal(id) {
        var url = '../member/notices/:id';
        url = url.replace(':id', id);
        $.ajaxModal('#projectTimerModal', url);
    }

    $('.show-task-detail').click(function () {
            $(".right-sidebar").slideDown(50).addClass("shw-rside");

            var id = $(this).data('task-id');
            var url = "../member/task/all-tasks/:id";
            url = url.replace(':id', id);

            $.easyAjax({
                type: 'GET',
                url: url,
                success: function (response) {
                    if (response.status == "success") {
                        $('#right-sidebar-content').html(response.view);
                    }
                }
            });
        })

    $(function () {
        $('.selectpicker').selectpicker();
    });

    $('.language-switcher').change(function () {
        var lang = $(this).val();
        $.easyAjax({
            url: '../member/language/change-language',
            data: {'lang': lang},
            success: function (data) {
                if (data.status == 'success') {
                    window.location.reload();
                }
            }
        });
    });

</script>
