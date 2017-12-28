<?php 
        /**
         *@  Library 
        **/
        require 'library/SYSTEM_LEMIHO.php';
    $controller = (!empty($_GET['controller'])) ? $_GET['controller'] : 'Home';   
    $function   = (!empty($_GET['function'])) ? $_GET['function'] : 'index';   
    if(!empty($controller) && !empty($function)) {
        // router assets
        if($function == 'assets') {
            return false;
        }
            $file = 'module/' . $controller . '/' . $controller . '.php';
            if(file_exists($file)) {
                require $file;
                if(class_exists($controller)) {
                        $class = new $controller;
                        // check uri function 
                        if(method_exists($class,$function)) {
                            return $class->$function();
                        } else {
                            die("page 404");
                        }
                }
            } else {
                die("Module not file exists");
            }
    }
        
?>