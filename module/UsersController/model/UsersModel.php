<?php class UsersModel extends SYSTEM_LEMIHO {
                 protected $table = 'users'; 
                 public function checkUsers($username,$password){
                    $connect = $this->connect_database(); 
                    $password = md5($password);
                    $sql = "SELECT * FROM users WHERE `username`='{$username}' AND `password`='{$password}'";
                    $query = mysqli_query($connect,$sql);
                    $rowcount=mysqli_num_rows($query);
                    return $rowcount;
                 }
                 public function getUser($username,$password){
                    $connect = $this->connect_database(); 
                    $password = md5($password);
                    $sql = "SELECT id,level FROM users WHERE `username`='{$username}' AND `password`='{$password}'";
                    $query = mysqli_query($connect,$sql);
                    $result = mysqli_fetch_row($query);
                    return $result;
                 }
}