<?php
require_once('./model/user_model.php') ; 
require_once('./view/admin_view.php') ; 
require_once("./view/enseignant_view.php") ;
class user_controller {

    public function login_controller()
    {
        $um = new user_model() ;
        $um->login_model() ;
    }

    public function afficher_page_login_enseignant_controller()
    {
        $av = new enseignant_view() ;
        $av->afficher_page_login_enseignant_view() ; 
    }
    
    public function afficher_page_login_admin_controller() 
    {
        $av = new admin_view() ;
        $av->afficher_page_login_admin_view() ; 
    }
}

?>