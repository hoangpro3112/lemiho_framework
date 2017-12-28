$(document).ready(function(){
    $("#formLogin").submit(function(e){
        $("#callback-login").html('');
        var base_url = $("#base_url").val();
        var username = $("#username").val();
        var password = $("#password").val();
        var submit = true;
        $.ajax({
            url: base_url + 'UsersController/accountLogin',
            type:'POST',
            data:{username:username,password:password,submit:submit},
            success: function(res){
                if(res.status == true ) {
                    location.href = res.redirect;
                } else {
                    var message = "Username or password is wrong";
                    $("#callback-login").html(message);
                }
                console.log(res);
            },
            error: function(err){
                //location.reload();
                //console.log(err);
            }
        });
        return false;
    });
});
    