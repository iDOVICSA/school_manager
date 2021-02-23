<?php
 require_once('./model/presentation_ecole_model.php') ;
 require_once('./view/page_presentation_ecole_view.php') ;
 
class page_presentation_ecole_controller {
   
    public function get_all_presentation_ecole_controller() {
        $mtf = new presentation_ecole_model() ;
        return $mtf->get_all_presentation_ecole_model() ;
    }
    public function afficher_page_presentation_controller() {
        $v = new page_presentation_ecole_view() ;
        $v->afficher_page_presentation_ecole_view();
    }
    public function afficher_ajout_presentation_form_controller() {
        $v = new page_presentation_ecole_view() ;
        $v->afficher_ajout_presentation_form_view();
    }
    public function ajout_presentation_form_controller() {
       $mtf = new presentation_ecole_model() ;
        $mtf->ajout_presentation_form_model() ;
    }
}

?>