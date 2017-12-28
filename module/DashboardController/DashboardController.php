<?php 
    class DashboardController extends SYSTEM_LEMIHO {
        public function __construct(){
            parent::__construct();
            session_start();
            $this->load('basic_helper');
            $this->model('DashboardModel');
            $this->db = new DashboardModel;
             checkLogin();
             check_priority();
            }
            public function dashboard(){
               $this->connect_database();
               $data = array(
                       'template' => 'dashboard',
               );
               $this->view('layout',$data);
            }
            public function todo(){
               $this->connect_database();
               $data = array(
                       'template' => 'todo',
                       'list'     => $this->db->getTodo(),
                       'priority' => $this->db->getPriority(),
                       'priority_update' => $this->db->getPriority()
               );
               $this->view('layout',$data);
            }
            public function addTodo(){
                header("Content-type: application/json");
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if($_POST['submit'] == true && !empty($_POST['name']) && !empty($_POST['priority']) && !empty($_POST['staff'])) :
                        $insert = $this->db->insertTodo(htmlspecialchars($_POST['name']),htmlspecialchars($_POST['priority']),htmlspecialchars($_POST['staff']));
                        echo json_encode(array('status' => ($insert) ? true : false ));
                    endif;    
                } 
            }
            public function deleteTodo() {
                 header("Content-type: application/json");
                 if($_SERVER['REQUEST_METHOD'] == 'POST') {
                     if($_POST['submit'] == true && !empty($_POST['id'])) :
                        $delete = $this->db->deleteTodo($_POST['id']);
                        echo json_encode(array('status' =>  ($delete) ? true : false  ));
                     endif;
                 }
            }
            public function updateTodo(){
                header("Content-type: application/json");
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if($_POST['submit'] == true && !empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['priority']) && !empty($_POST['staff'])) :
                        $update = $this->db->updateTodo($_POST['id'],htmlspecialchars($_POST['name']),htmlspecialchars($_POST['priority']),htmlspecialchars($_POST['staff']));
                        echo json_encode(array('status' =>  ($update) ? true : false  ));
                    endif;    
                }
            }
            public function createStaff(){
                header("Content-type: application/json");
                if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if($_POST['submit'] == true && !empty($_POST['nameStaff'])) :
                        $create = $this->db->createStaff(htmlspecialchars($_POST['nameStaff']));
                        echo json_encode(array('status' =>  ($create) ? true : false  ));
                    endif;    
                }
            }
            public function finalResults(){
               $data = array(
                       'template' => 'result',
                       'listResult' => $this->db->listResult()
               );
               $this->view('layout',$data);
            }

    } 