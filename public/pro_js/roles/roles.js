//for role permission
$(document).ready(function () {

// $('#addRole').click(function () {     
//     $('#modelHeading').html('Role Members');
//     $('#projectCategoryModal').modal('show');
// })
$('#add_buisness').click(function () {     
    $('#modelHeading').html('Add Buisness');
    $('#buisnessModal').modal('show');
})
$('#add_grade').click(function () {     
    $('#modelHeading').html('Add Grade');
    $('#gradeModal').modal('show');
})
$('#add_location').click(function () {     
    $('#modelHeading').html('Add Work Location');
    $('#locationModal').modal('show');
})
$('#add_blood').click(function () {     
    $('#modelHeading').html('Add Blood Group');
    $('#bloodModal').modal('show');
})
$('#add_roll').click(function () {     
    $('#modelHeading').html('Add Roll of Intake');
    $('#rollModal').modal('show');
})
$('#add_department').click(function () {     
    $('#modelHeading').html('Add Department');
    $('#departmentModal').modal('show');
})
$('#add_state').click(function () {     
    $('#modelHeading').html('Add State');
    $('#stateModal').modal('show');
})
$('#add_personnel').click(function () {     
    $('#modelHeading').html('Add Personnel');
    $('#personnelModal').modal('show');
})
$('#add_users').click(function () {     
    $('#modelHeading').html('Add User');
    $('#usersModal').modal('show');
})
$('#add_roles').click(function () {     
    $('#modelHeading').html('Add Role');
    $('#rolesModal').modal('show');
})

$('.toggle-permission').click(function () {
    var roleId = $(this).data('role-id');
    $('#role-permission-'+roleId).toggle();
   // $('#role-permission-0').toggle();
})
// Switchery
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
$('.js-switch').each(function() {
    new Switchery($(this)[0], $(this).data());

});

// Initialize multiple switches
var animating = false;
var masteranimate = false;

//    if (Array.prototype.forEach) {
//        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
//        elems.forEach(function() {
//            var switcherys = new Switchery($(this)[0], $(this).data());
//        });
//    }
//    else {
//        var elems = document.querySelectorAll('.js-switch');
//        for (var i = 0; i < elems.length; i++) {
//            var switcherys = new Switchery(elems[i]);
//        }
//    }
});