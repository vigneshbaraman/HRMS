$( document ).ready(function() {
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

// $(document).ready(function(){
//     get_roles_list();
// });


//Insertion
$(()=>{
    $('#btnSubmit').on('click',(e)=>{
    //    alert("abc");
   $('#btnSubmit').prop("disabled",true);
   $('#btnSubmit').html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Processing');

   e.preventDefault();

   $.ajax({
       url:add_roles_process_link,
       method:"POST",
       data: $("#form_add_roles").serialize(),
       dataType:"json",

       success:function(data) {
        //    alert('sdf')
           // console.log(data);
           $('#btnSubmit').prop("disabled",false);
               $('#btnSubmit').html('Submit');


           if(data.response =='success'){

               Toastify({
                   text: "Added Sucessfully..!",
                   duration: 3000,
                   close:true,
                   backgroundColor: "#4fbe87",
               }).showToast();

               setTimeout(
                   function() {
                    //    window.location.href = "view_recruiter";
                    location.reload();
                   }, 2000);

           }
           else{
               Toastify({
                   text: "Request Failed..! Try Again",
                   duration: 3000,
                   close:true,
                   backgroundColor: "#f3616d",
               }).showToast();

               setTimeout(
                   function() {
                       location.reload();
                   }, 2000);

           }

       }
   });
    })
})

// // for export all data
// function newexportaction(e, dt, button, config) {
//     var self = this;
//     var oldStart = dt.settings()[0]._iDisplayStart;
//     dt.one('preXhr', function (e, s, data) {
//         // Just this once, load all data from the server...
//         data.start = 0;
//         data.length = 2147483647;
//         dt.one('preDraw', function (e, settings) {
//             // Call the original action function
//             if (button[0].className.indexOf('buttons-copy') >= 0) {
//                 $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button, config);
//             } else if (button[0].className.indexOf('buttons-excel') >= 0) {
//                 $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
//                     $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
//                     $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
//             } else if (button[0].className.indexOf('buttons-csv') >= 0) {
//                 $.fn.dataTable.ext.buttons.csvHtml5.available(dt, config) ?
//                     $.fn.dataTable.ext.buttons.csvHtml5.action.call(self, e, dt, button, config) :
//                     $.fn.dataTable.ext.buttons.csvFlash.action.call(self, e, dt, button, config);
//             } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
//                 $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
//                     $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button, config) :
//                     $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button, config);
//             } else if (button[0].className.indexOf('buttons-print') >= 0) {
//                 $.fn.dataTable.ext.buttons.print.action(e, dt, button, config);
//             }
//             dt.one('preXhr', function (e, s, data) {
//                 // DataTables thinks the first item displayed is index 0, but we're not drawing that.
//                 // Set the property to what it was before exporting.
//                 settings._iDisplayStart = oldStart;
//                 data.start = oldStart;
//             });
//             // Reload the grid with the original page. Otherwise, API functions like table.cell(this) don't work properly.
//             setTimeout(dt.ajax.reload, 0);
//             // Prevent rendering of the full data to the DOM
//             return false;
//         });
//     });
//     // Requery the server with the new one-time export settings
//     dt.ajax.reload();
// }

// function get_roles_list(){

// table_cot = $('#roles_data').DataTable({

//     dom: 'lBfrtip',
//     "buttons": [
//         {
//             "extend": 'copy',
//             "text": '<i class="bi bi-clipboard" ></i>  Copy',
//             "titleAttr": 'Copy',
//             "exportOptions": {
//                 'columns': ':visible'
//             },
//             "action": newexportaction
//         },
//         {
//             "extend": 'excel',
//             "text": '<i class="bi bi-file-earmark-spreadsheet" ></i>  Excel',
//             "titleAttr": 'Excel',
//             "exportOptions": {
//                 'columns': ':visible'
//             },
//             "action": newexportaction
//         },
//         {
//             "extend": 'csv',
//             "text": '<i class="bi bi-file-text" ></i>  CSV',
//             "titleAttr": 'CSV',
//             "exportOptions": {
//                 'columns': ':visible'
//             },
//             "action": newexportaction
//         },
//         {
//             "extend": 'pdf',
//             "text": '<i class="bi bi-file-break" ></i>  PDF',
//             "titleAttr": 'PDF',
//             "exportOptions": {
//                 'columns': ':visible'
//             },
//             "action": newexportaction
//         },
//         {
//             "extend": 'print',
//             "text": '<i class="bi bi-printer"></i>  Print',
//             "titleAttr": 'Print',
//             "exportOptions": {
//                 'columns': ':visible'
//             },
//             "action": newexportaction
//         },
//         {
//             "extend": 'colvis',
//             "text": '<i class="bi bi-eye" ></i>  Colvis',
//             "titleAttr": 'Colvis',
//             // "action": newexportaction
//         },

//     ],
//     lengthMenu: [[15, 50, 100, 250, 500, -1], [15, 50, 100, 250, 500, "All"]],
//     processing: true,
//     serverSide: true,
//     serverMethod: 'post',
//     bDestroy: true,
//     scrollX: true,
//     scrollY: 800,
//     scrollCollapse: true,
//     drawCallback: function() {


//     },
//     // aoColumnDefs: [
//     //     { 'visible': false, 'targets': [3] }
//     // ],
//     ajax: {
//         url: get_role_data_link,
//         type: 'POST',
//         dataType: "json",
//         data: function (d) {
//             // d.af_from_date = $('#af_from_date').val();
//             // d.af_to_date = $('#af_to_date').val();
//             // d.af_position_title = $('#af_position_title').val();
//         }
//     },
//     createdRow: function( row, data, dataIndex ) {
//         $( row ).find('td:eq(0)').attr('data-label', 'Sno');
//         $( row ).find('td:eq(1)').attr('data-label', 'Name');
//         $( row ).find('td:eq(2)').attr('data-label', 'action');
//     },
//     columns: [
//         {   data: 'DT_RowIndex', name: 'DT_RowIndex'    },
//         {   data: 'name', name: 'name'    },
//         {   data: 'action', name: 'action'    },


//     ],
// });
// }