


$(()=>{
 //save changes btn click event
    $("#SaveBtn").on('click',(e)=>{
        var onBoardData=[];
        e.preventDefault();
          $('#users-table tbody>tr').each(function () {
                var col1=$(this).find("td:eq(1)").text();
                if($(this).find('td:eq(2) input:checkbox').is(":checked"))
                {
                     var col2="1";
                }
                else{
                    var col2="0";
                }
                var col3 = $(this).find('td:eq(3) input[type=date]').val();
                if(col3==""){
                     col3=null;
                }
                else{
                    col3=col3;
                }
                onBoardData.push({
                     Process:col1,
                     verified:col2,
                     date:col3
                })
          });
          var token=$("#token").val();

           console.log(onBoardData)

           $.ajax({
                url:"PreOnBoarding_save",
                // url:"{{'PreOnBoarding_save'}}",
                type:"POST",
                data:{onboard:onBoardData,_token:token},
                beforeSend:function(response)
                {
                     console.log(response);
                },
                success:function(data)
                {
                   var res=JSON.parse(data);
                   console.log(res)
                   if(res.type==1){
                         toastr.success(res.message);
                         setTimeout(() => {
                            location.reload();
                         }, 2000);
                   }
                   else{
                       toastr.error(res.message)
                       setTimeout(() => {
                        location.reload();
                     }, 2000);

                   }
                }
           })



    })

    $('#users-table tbody').on('change', '.checkbox_check', function() {
         var currrow=$(this).closest('tr');
         $('[type=checkbox]:checked').val()
         if(currrow.find("td:eq(2) [type=checkbox]").is(":checked"))
         {
                currrow.find("td:eq(3) [type=date]").prop("disabled",false);


         }
         else{
             currrow.find("td:eq(3) [type=date]").prop("disabled",true);
            //  if(currrow.find("td:eq(3) [type=date]").val()!=""){
            //     currrow.find("td:eq(3) [type=date]").val("");
            // }

         }

    });

})


$(()=>{
    $("#BuddyFeedbackBtn").on('click',()=>{
        var empId=$('#sess_emp_id').val();
        var rowCount = $('#buddy_feedbacktable tr.countable_rows').length;
        var i=0;
        var selected=[];
        var selected1=[];
        $('#buddy_feedbacktable tbody>tr').each(function () {
            var currrow=$(this).closest('tr');
            var col1=currrow.find('td:eq(1) input[type=hidden]').val();
            var col5=currrow.find('td:eq(7) input[type=text]').val();
            if(col5==null)
            {
                 col5="";
            }
              if(i<=5){
                  check_lenght=6;
                currrow.find('input[type="checkbox"]:checked').each(function(){
                    selected.push({
                        empId:empId,
                        fieldid:col1,
                        response:$(this).attr('value'),
                        remarks:col5,
                        comments1:"",
                        comments2:"",
                        comments3:"",

                    });

                })
              }
              else{
                   var col2=currrow.find('td:eq(2) textarea').val();
                   var col3=currrow.find('td:eq(3) textarea').val();
                   var col4=currrow.find('td:eq(4) textarea').val();
                   if(col2==null){
                        col2="";
                   }
                   if(col3==null){
                       coll3="";
                   }
                   if(col4==null){
                       col4="";
                   }
                   selected.push({
                       empId:empId,
                       fieldid:col1,
                       response:"",
                       comments1:col2,
                       comments2:col3,
                       comments3:col4,
                       remarks:""
                   });
              }

                i++;

        });
       if(rowCount==check_lenght){
        var token=$("#token").val();
           $.ajax({
               url:"SaveBuddyFeedback",
               type:"POST",
               data:{buddy_data:selected,_token:token},
               beforeSend:function(data){
                   console.log("Loading!....");
               },
               success:function(response){
                    var res=JSON.parse(response);
                    if(res.status==1){
                        toastr.success(res.message);
                        setTimeout(() => {
                             location.reload();
                        }, 2000);
                    }
                    else{
                        toastr.error(res.message);
                        setTimeout(() => {
                            location.reload();
                       }, 2000);
                    }
               }
           })
       }
       else{

       }

})









})
