
// $(()=>{
//     // $('#pre_onboard_id').change(function() {
//     //     if(this.checked) {
//     //         $("#date1").prop('disabled',false);
//     //     }
//     //     else{
//     //         $("#date1").prop('disabled',true)
//     //     }
//     // });
//     // $('#supervisor_id').change(function() {
//     //     if(this.checked) {
//     //         $("#date2").prop('disabled',false);
//     //     }
//     //     else{
//     //         $("#date2").prop('disabled',true)
//     //     }
//     // });
//     // $('#buddy_id').change(function() {
//     //     if(this.checked) {
//     //         $("#date3").prop('disabled',false);
//     //     }
//     //     else{
//     //         $("#date3").prop('disabled',true)
//     //     }
//     // });


//  //save changes btn click event

//     $("#SaveBtn").on('click',(e)=>{
//         var onBoardData=[];
//         e.preventDefault();
//           $('#users-table tbody>tr').each(function () {
//                 var col1=$(this).find("td:eq(1)").text();
//                 if($(this).find('td:eq(2) input:checkbox').is(":checked"))
//                 {
//                      var col2="1";
//                 }
//                 else{
//                     var col2="0";
//                 }
//                 var col3 = $(this).find('td:eq(3) input[type=date]').val();

//                 onBoardData.push({
//                      Process:col1,
//                      verified:col2,
//                      date:col3
//                 })
//           });
//           var token=$("#token").val();

//            console.log(onBoardData)

//            $.ajax({
//                 url:"PreOnBoarding_save",
//                 // url:"{{'PreOnBoarding_save'}}",
//                 type:"POST",
//                 data:{onboard:onBoardData,_token:token},
//                 beforeSend:function(response)
//                 {
//                      console.log(response);
//                 },
//                 success:function(data)
//                 {
//                    var res=JSON.parse(data);
//                    console.log(res)
//                    if(res.type==1){
//                         alert(res.message);
//                         location.reload(true);
//                    }
//                    else{
//                     alert(res.message);
//                     location.reload(true);

//                    }
//                 }
//            })



//     })

//     $('#users-table tbody').on('change', '.checkbox_check', function() {
//          var currrow=$(this).closest('tr');
//          $('[type=checkbox]:checked').val()
//          if(currrow.find("td:eq(2) [type=checkbox]").is(":checked"))
//          {
//                 currrow.find("td:eq(3) [type=date]").prop("disabled",false);


//          }
//          else{
//              currrow.find("td:eq(3) [type=date]").prop("disabled",true);
//             //  if(currrow.find("td:eq(3) [type=date]").val()!=""){
//             //     currrow.find("td:eq(3) [type=date]").val("");
//             // }

//          }

//     });





// })

$(()=>{

    //day zero and day one default hide --08-03-2022
     $("#dayonetabid").hide();
     $("#dayzerotabid").hide();
     $("#preonboardtabid").show();

    //preonboard onclick
    $("#pre_onboard").on('click',(e)=>{
            $("#dayonetabid").hide();
            $("#dayzerotabid").hide();
            $("#preonboardtabid").show();
    })

    //dayzore onclick
    $('#dayzeroid').on('click',(e)=>{
             $("#topHeadingid").text("Day Zero");
            $("#dayonetabid").hide();
            $("#dayzerotabid").show();
            $("#preonboardtabid").hide();
    })

    //dayone onclick
    $('#dayoneid').on('click',(e)=>{
           $("#topHeadingid").text("Day One");
            $("#dayonetabid").show();
            $("#dayzerotabid").hide();
            $("#preonboardtabid").hide();
    })
})


function viewBuddyModel(one){
    var token=$("#token").val();
   $.ajax({
       url:"view_preonboarding",
       type:"POST",
       data:{id:one,_token:token},
       success:function(data){
        $("#candidate_onboardinfo").empty();
            var res=JSON.parse(data);
            for(var i=0;i<res.length;i++)
            {
                   if(res[i]["type"]==1)
                   {
                        var checked="checked";
                   }
                   else{
                       var checked="";
                   }
                 var tr='<tr>';
                 var td='<td><div>'+res[i]["preonboarding_process"]+'</div></td>';
                 var td1='<td><div class="custom-control custom-switch">\
                 <input type="checkbox" class=" js-switch packeges custom-control-input " id="switch3" '+checked+'>\
                 <label class="custom-control-label" for="switch3"></label></div></td>';
                 var td2='<td>'+res[i]["date"]+'</td>';
              $("#candidate_onboardinfo").append(tr+td+td1+td2);

            }
        $("#projectTimerModal").modal('show');

       }
   })


}
