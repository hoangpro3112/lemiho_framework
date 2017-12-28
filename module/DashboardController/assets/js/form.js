$(document).ready(function(){
    $("#formAdd").submit(function(e){
        var name = $("#name").val();
        var priority = $("#priority").val();
        var staff = $("#staff_off_todo").val();
        var submit = true;
        var base_url = $("#base_url").val();
        $.ajax({
            url: base_url + 'DashboardController/addTodo',
            type:'POST',
            data: { submit: submit, name: name, priority: priority, staff: staff},
            success: function(res){
                location.href = base_url + 'DashboardController/todo';
            },
            error: function(err){
                location.href = base_url + 'DashboardController/todo';
            }
        });
        return false;
    });
    
    $("#formUpdate").submit(function(e) {
        var name = $("#nameUpdate").val();
        var priority = $("#update_priority").val();
        var staff = $("#update_staff_off_todo").val();
        var submit = true;
        var id = $("#update_todo_id").val();
        var base_url = $("#base_url").val();
        $.ajax({
            url: base_url + 'DashboardController/updateTodo',
            type: 'POST',
            data: { submit: submit, name: name, id: id, priority: priority, staff: staff },
            success: function (res) {
               if(res.status == true ) {
                   location.href = base_url + 'DashboardController/todo';
               } else {
                   location.href = base_url + 'DashboardController/todo';
               }
            },
            error: function (err) {
                location.href = base_url + 'DashboardController/todo';
            }
        });
        return false;
    });

    $("#formAddStaff").submit(function (e) {
        var nameStaff = $("#username_staff").val();
        var submit = true;
        var base_url = $("#base_url").val();
        $.ajax({
            url: base_url + 'DashboardController/createStaff',
            type: 'POST',
            data: { submit: submit, nameStaff: nameStaff},
            success: function (res) {
                if (res.status == true) {
                    location.href = base_url + 'DashboardController/todo';
                } else {
                    location.href = base_url + 'DashboardController/todo';
                }
            },
            error: function (err) {
                location.href = base_url + 'DashboardController/todo';
            }
        });
        return false;
    });
});



function delete_todo(id) {
    var base_url = $("#base_url").val();
    var submit = true;
    $.ajax({
        url: base_url + 'DashboardController/deleteTodo',
        type: 'POST',
        data: { submit: submit, id: id },
        success: function (res) {
            if(res.status == true ) {
                $("#tr-id-" + id).remove();
            }
        },
        error: function (err) {
            
        }
    });
}


function edit(id){
    $("#update_todo_id").val(id);
    $(".button_trigger_update").trigger('click');
}
