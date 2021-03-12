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
    public function afficher_enseignant_infos_controller($enseignant_id)
    {
        $ev = new enseignant_view() ;
        $ev->afficher_enseignant_infos_view($enseignant_id) ; 
    }

    public function get_enseignant_infos_controller($enseignant_id)
    {
        $em = new enseignant_model() ;
        return $em->get_enseignant_infos_model($enseignant_id) ;
    }

    public function get_all_enseignants_classes_controller($enseignant_id)
    {
        $em = new enseignant_model() ;
        return $em->get_all_enseignants_classes_controller($enseignant_id) ;
    }
    public function get_all_enseignants_eleves_controller($enseignant_id)
    {
        $em = new enseignant_model() ;
        return $em->get_all_enseignants_eleves_controller($enseignant_id) ;
    }
}

?>