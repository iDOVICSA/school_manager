<?php
require_once('./controller/seance_controller.php');
require_once ('./controller/enseignant_controller.php') ;
require_once ('./controller/classe_controller.php') ;
require_once ('./controller/matiere_controller.php') ; 
class seance_view
{
    public function afficher_ajout_seance_form_view()
    {
        $ec = new enseignant_controller() ;
        $enseignants = $ec->get_all_enseignants_controller() ;
        $cc = new classe_controller() ; 
        $classes = $cc->get_all_classes_controller() ; 
        $mc = new matiere_controller() ;
        $matieres = $mc->get_all_matieres_controller() ; 
        require_once ('./view/html_views/admin_dashboard.php') ;
         require_once ("./view/html_views/ajout_seance_form.php") ;
    }
}
