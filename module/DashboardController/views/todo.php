<div class="container">
    <h1>Todo</h1>
    <p> Description </p>
    <button data-toggle="modal" data-target="#myModal" class="btn btn-success"> Create Todo</button>
    <button data-toggle="modal" data-target="#createStaff" class="btn btn-success"> Create Staff</button>
    <a class="btn btn-success" href="<?php echo base_url(); ?>/DashboardController/finalResults">Final result </a>
    <br/>
    <br/>
    <table>
        <?php 
            while($row = mysqli_fetch_assoc($data['list'])) { ?>
                <tr id="tr-id-<?php echo $row['id']; ?>">
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['priority']; ?></td>
                    <td><button onclick="edit('<?php echo $row['id']; ?>')" class="btn btn-success">Edit</button></td>
                    <td><button onclick="delete_todo('<?php echo $row['id']; ?>')" class="btn btn-danger">Delete</button></td>
                </tr> 
            <?php } ?>
                
    </table>
    <input type="hidden" id="update_todo_id" value="0"/>
</div>




<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Todo</h4>
      </div>
      <div class="modal-body">
        <form id="formAdd" method="POST">
                <input type="text" name="name" id="name" class="form-control" placeholder="Name todo" required>
                <br/>
                <select class="form-control" id="priority" name="priority">
                    <option value="slow"> Slow </option>
                    <option value="medium"> Medium </option>
                    <option value="hight"> Hight </option>
                </select>
                <br/>
                <select class="form-control" id="staff_off_todo" name="staff_off_todo">
                    <?php while($row = mysqli_fetch_assoc($data['priority'])) { ?>
                          <option value="<?php echo $row['id']; ?>"><?php echo $row['username']; ?></option>
                    <?php } ?>
                </select>
                <br/>
                <button class="btn btn-success"> Add </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>










                <button class="hide button_trigger_update" data-toggle="modal" data-target="#update_modal"></button>
                <!-- Modal -->
                <div id="update_modal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Todo</h4>
                        </div>
                        <div class="modal-body">
                            <form id="formUpdate" method="POST">
                                    <input type="text" name="name" id="nameUpdate" class="form-control" placeholder="Name todo" required>
                                    <br/>
                                    <select class="form-control" id="update_priority" name="update_priority">
                                        <option value="slow"> Slow </option>
                                        <option value="medium"> Medium </option>
                                        <option value="hight"> Hight </option>
                                    </select>
                                    <br/>
                                    <select class="form-control" id="update_staff_off_todo" name="update_staff_off_todo">
                                        <?php while($row = mysqli_fetch_assoc($data['priority_update'])) { ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['username']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <br/>
                                    <button class="btn btn-success"> Update </button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>

                    </div>
                </div>







                <!-- Modal -->
                <div id="createStaff" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Staff</h4>
                        </div>
                        <div class="modal-body">
                            <form id="formAddStaff" method="POST">
                                    <input type="text" name="name" id="username_staff" class="form-control" placeholder="Username Staff" required>
                                    <br/>
                                    <button class="btn btn-success"> Add Staff </button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                        </div>

                    </div>
                </div>


