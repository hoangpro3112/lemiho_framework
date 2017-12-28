<?php class Home extends SYSTEM_LEMIHO {
      public function __construct(){
            parent::__construct();
            session_start();
            $this->load('basic_helper');
            $this->model('HomeModel');
            $this->db = new HomeModel;
             
        }
      public function index(){
              echo "<h1> Welcome to LEMIHO FRAMEWORK</h1>";
      }
       public function myWork(){
              checkLogin();
              $data = array(
                      'title' => 'My company',
                      'template' => 'work',
                      'listWork' => $this->db->getWork()
              );
              $this->view('layout',$data);
      }
        public function createResult(){
                $n = 100;  
                $x = 1;
                for($i=1; $i <= $n-1; $i++)  
                        {  
                        $x*=($i+1);   
                        }  
                header("Content-type: application/json");
               if($_SERVER['REQUEST_METHOD'] == 'POST') :
                    if($_POST['submit'] == true ) :
                        $save = $this->db->createResult($x);
                        echo json_encode(array('status' => ($save) ? true : false));
                    endif;
                endif;                
        }
}