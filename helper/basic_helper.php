<?php     
    function base_url(){
        require 'config/config.php';
        return $config['base_url'];
    }
    function checkLogin() {
        if(!isset($_SESSION['username']) || !isset($_SESSION['user_id']) || !isset($_SESSION['login']) || !isset($_SESSION['user_level'])) {
            header("Location: " . base_url());
            exit();
        }
    }
    function check_priority(){
        if($_SESSION['user_level'] == 'priority') {
            header("Location: " . base_url() . 'Home/myWork');
        }
    }