<?php
require_once('./model/eleve_model.php') ; 
require_once('./view/eleve_view.php') ;


class eleve_controller {

    public function get_eleve_infos_controller($eleve_id) 
    {
        $mtf = new eleve_model() ;
        return $mtf->get_eleve_infos_model($eleve_id) ;
    }

    public function get_eleve_notes_controller($eleve_id)
    {
        $mtf = new eleve_model() ;
        return $mtf->get_eleve_notes_model($eleve_id) ;
    }
    public function afficher_eleve_infos_controller($eleve_id)
    {
        $v = new eleve_view() ;
        $v->afficher_eleve_infos_view($eleve_id) ;
    }

    public function afficher_ajout_eleve_form_controller() {
        $v = new eleve_view() ;
        $v->afficher_ajout_eleve_form_view() ;
    }

    public function ajout_eleve_controller()
    {
        $mtf = new eleve_model() ;
        return $mtf->ajout_eleve_model() ;
    }
 
}

?>