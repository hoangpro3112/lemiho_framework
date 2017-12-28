<?php class DashboardModel extends SYSTEM_LEMIHO {
                           public function __construct(){
                                   parent::__construct();
                           }     
                           public function getTodo(){
                                   $connect = $this->connect_database();
                                   $sql = "SELECT * FROM todo WHERE user='{$_SESSION['user_id']}'";
                                   $query = mysqli_query($connect,$sql);
                                   return $query;
                           } 
                           public function getPriority(){
                                   $connect = $this->connect_database();
                                   $sql = "SELECT * FROM users WHERE `level`='priority'";
                                   $query = mysqli_query($connect,$sql);
                                   return $query;
                           } 
                           public function insertTodo($name,$priority,$staff){
                                   $connect = $this->connect_database();
                                   $key = md5(time());
                                   $sql = "INSERT INTO todo (`name`,`data_key`,`user`,`priority`,`staff`) VALUES ('{$name}','{$key}','{$_SESSION['user_id']}','{$priority}','{$staff}')";
                                   $query = mysqli_query($connect,$sql);
                                   return ($query) ? true : false;
                           }
                           public function updateTodo($id,$name,$priority,$staff){
                                   $connect = $this->connect_database();
                                   $sql = "UPDATE todo SET `name`='{$name}',`priority`='{$priority}',`staff`='{$staff}' WHERE id='{$id}'";
                                   $query = mysqli_query($connect,$sql);
                                   return ($query) ? true : false;
                           }
                           public function deleteTodo($id){
                                   $connect = $this->connect_database();
                                   $sql = "DELETE FROM todo WHERE id='{$id}'";
                                   $query = mysqli_query($connect,$sql);
                                   return ($query) ? true : false;
                           }
                           public function createStaff($username){
                                   $connect = $this->connect_database();
                                   // check exists
                                   $sql_check = "SELECT * FROM users WHERE username='{$username}'";
                                   $_query = mysqli_query($connect,$sql_check);
                                   $data_count = mysqli_num_rows($_query);
                                   if($data_count == 0) {
                                                $key = md5(time());
                                                $password = md5("123456789");
                                                $sql = "INSERT INTO users (`username`,`data_key`,`password`,`level`) VALUES ('{$username}','{$key}','{$password}','priority')";
                                                $query = mysqli_query($connect,$sql);
                                                return ($query) ? true : false;
                                   } else {

                                   }    return false;
                                                
                           }
                           public function listResult(){
                                   $connect = $this->connect_database();
                                   $sql = "SELECT result.id,result.result,users.username FROM result INNER JOIN users ON users.id=result.staff";
                                   $query = mysqli_query($connect,$sql);
                                   return $query;
                           }
}