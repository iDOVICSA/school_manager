<?php
require_once('./model/seance_model.php') ; 
require_once('./view/seance_view.php') ;


class seance_controller {

public function afficher_ajout_seance_form_controller()
{
    $ev = new seance_view() ;
    $ev->afficher_ajout_seance_form_controller() ; 
}


public function ajout_seance_controller()
{
    
        $mtf = new seance_model() ;
        $mtf->ajout_seance_model() ;
    
}
}
