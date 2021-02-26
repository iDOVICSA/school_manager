<?php
require_once('./model/reception_model.php') ; 
require_once('./view/reception_view.php') ;


class reception_controller {

public function afficher_ajout_reception_form_controller()
{
    $ev = new reception_view() ;
    $ev->afficher_ajout_reception_form_view() ; 
}

public function ajout_reception_controller()
{
    $rc = new reception_model() ; 
    $rc->ajout_reception_model() ; 
}

}
