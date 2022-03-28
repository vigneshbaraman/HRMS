
function showAdd(one) {
    var token=$("#token").val();
     $.ajax({
         url:"show_buddy_feedback",
         type:"POST",
         data:{id:one,_token:token},
         beforeSend:(e)=>{
            console.log("Loading!....");
         },
         success:(response)=>{
             var res=JSON.parse(response);
             var fields=res.fields;
             var feedback=res.feedback_info;
            $("#buddy_feedback_tableId").empty();
             for(var i=0;feedback.length>i;i++){
                    if(i<=5)
                    {
                    var tr='<tr>';
                    var td1="<td>"+fields[i].id+"</td>";
                    var td2="<td><p class='word-warpped'>"+fields[i].Buddy_feedback_fields+"</p></td>";
                    var td3="<td><p "+(feedback[i]['response']=="1" ? 'style="color:green" class="fa fa-check"  ' : '')+"></p></td>";
                    var td4="<td><p "+(feedback[i]['response']=="2" ? 'style="color:green" class="fa fa-check"  ' : '')+"></p></td>";
                    var td5="<td><p "+(feedback[i]['response']=="3" ? 'style="color:green" class="fa fa-check"  ' : '')+"></p></td>";
                    var td6="<td><p "+(feedback[i]['response']=="4" ? 'style="color:green" class="fa fa-check"  ' : '')+"></p></td>";
                    var td7="<td><p "+(feedback[i]['response']=="5" ? 'style="color:green" class="fa fa-check"  ' : '')+"></p></td>";
                    if(feedback[i].remarks==null)
                    {
                         var feedback_remarks="--";
                    }
                    else{
                        var feedback_remarks=feedback[i].remarks;
                    }
                    var td8="<td>"+feedback_remarks+"</td>";
                    $("#buddy_feedback_tableId").append(tr+td1+td2+td3+td4+td5+td6+td7+td8);
                    }
                     if(i>5){
                        var tr='<tr>';
                        var td1="<td>"+fields[i].id+"</td>";
                        var td2="<td><p class='word-warpped'>"+fields[i].Buddy_feedback_fields+"</p></td>";
                        var td3="<td>"+(feedback[i].comments1!=null ? feedback[i].comments1:'--')+"</td>";
                        var td4="<td>"+(feedback[i].comments2!=null ? feedback[i].comments2:'--')+"</td>";
                        var td5="<td>"+(feedback[i].comments3!=null ? feedback[i].comments3:'--')+"</td>";
                        var td6="<td></td>";
                        var td7="<td></td>";

                        $("#buddy_feedback_tableId").append(tr+td1+td2+td3+td4+td5+td6+td7);
                     }
             }
         $('#edit-column-form').modal('show');
         }
     })



}
