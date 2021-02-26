<?php
require_once('./model/enseignant_model.php') ; 
require_once('./view/enseignant_view.php') ;


class enseignant_controller {

    public function afficher_ajout_enseignant_form_controller()
    {
        $ev = new enseignant_view() ;
        $ev->afficher_ajout_enseignant_form_view() ; 
    }
    public function ajout_enseignant_controller()
    {
        $mtf = new enseignant_model() ;
        $mtf->ajout_enseignant_model() ;
    }
    public function get_all_enseignants_controller()
    {
        $em = new enseignant_model() ;
        return $em->get_all_enseignants_model() ;
    }
}

?>