<?php class HomeModel extends SYSTEM_LEMIHO {
             public function getWork(){
                                   $connect = $this->connect_database();
                                   $sql = "SELECT * FROM todo WHERE staff='{$_SESSION['user_id']}'";
                                   $query = mysqli_query($connect,$sql);
                                   return $query;
             }
             public function createResult($value){
                                   $connect = $this->connect_database();
                                   $sql = "INSERT INTO result (`result`,`staff`) VALUES ('{$value}','{$_SESSION['user_id']}')";
                                   $query = mysqli_query($connect,$sql);
                                   return ($query) ? true : false;
             }
}