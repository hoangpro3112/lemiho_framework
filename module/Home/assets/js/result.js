function createResult(url){
    var submit = true;
         $.ajax({
             url:url + 'Home/createResult',
             type:'POST',
             data: { submit: submit},
             success: function(res){
                if(res.status == true ) {
                    $("#message-system").html("Save success");     
                } else {
                    $("#message-system").html("Save error");     
                }
             }
         });
}