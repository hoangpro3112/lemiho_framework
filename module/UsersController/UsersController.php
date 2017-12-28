<?php 
    class UsersController extends SYSTEM_LEMIHO {
        public function __construct(){
            parent::__construct();
            $this->load('basic_helper');
            $this->model('UsersModel');
            $this->db = new UsersModel;
            session_start();
        }
           public function login(){
               $this->connect_database();
               $data = array(
                       'template' => 'login',
               );
               $this->view('layout',$data);
           }
           public function accountLogin(){
               header("Content-type: application/json");
               if($_SERVER['REQUEST_METHOD'] == 'POST') :
                    if($_POST['submit'] == true ) :
                        if(isset($_POST['username']) && isset($_POST['password'])) {
                            $user = $this->db->checkUsers($_POST['username'],$_POST['password']);
                            if($user >= 1  ) {
                                $get = $this->db->getUser($_POST['username'],$_POST['password']);
                                $_SESSION['username'] = $_POST['username'];
                                $_SESSION['login']    = true;  
                                $_SESSION['user_id']  = $get[0];
                                $_SESSION['user_level']  = $get[1];
                                $redirect_dashboard = base_url() . 'DashboardController/dashboard';
                                $redirect_home = base_url() . 'Home/myWork';
                                $redirect = ($get[1] == 'priority') ? $redirect_home : $redirect_dashboard;
                                echo json_encode(array('status' => true,'redirect'=> $redirect ));
                            } else {
                                echo json_encode(array('status' => false,'redirect'=> '','test' => $user ));
                            }
                        }
                    endif;
               endif;
           }
            public function logout(){
                    unset($_SESSION);
                    checkLogin();
            }
    } 