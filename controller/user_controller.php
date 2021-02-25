<?php
require_once('./model/user_model.php') ; 

class user_controller {

    public function login_controller()
    {
        $um = new user_model() ;
        $um->login_model() ;
    }
 
}

?>