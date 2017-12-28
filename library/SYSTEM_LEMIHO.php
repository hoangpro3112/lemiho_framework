<?php 
    class SYSTEM_LEMIHO  {
           public function __construct(){
                // load helper 
           }
          /**
           *@author Le Minh Hoang
           *@return file
           */
          public function load($name){
             $file = 'helper/' . $name . '.php';
             if(file_exists($file)) {
                 require $file;
             } else {
                 die("file not exists");
             }
          }
          /**
           *@author Le Minh Hoang
           *@return file 
           */
          public function view($name,$data){
             $controller = (!empty($_GET['controller'])) ? $_GET['controller'] : 'Home';   
             $file = 'module/' . $controller . '/views/' . $name . '.php'; 
             if(file_exists($file)) {
                 require $file;
                 return $data;
             } else {
                 die("File not exists");
             }
          }
          /**
           *@author Le Minh Hoang
           *@return file 
           */
          public function model($name){
             $controller = (!empty($_GET['controller'])) ? $_GET['controller'] : 'Home';    
             $file = 'module/' . $controller . '/model/' . $name . '.php'; 
             if(file_exists($file)) {
                 require $file;
             } else {
                 die("File not exists");
             }
          }
          /**
           *@author Le Minh Hoang
           *@return connect Database 
           */
          public function connect_database(){
              require 'config/database.php';
              $connect = mysqli_connect($database['server_name'],$database['username'],$database['password'],$database['data_name']);
              if(!$connect) {
                  die("connect error!!!");
              }
              return $connect;
          }
    }