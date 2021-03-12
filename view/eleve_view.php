<?php
require_once('./controller/eleve_controller.php');
class eleve_view
{
    public function afficher_eleve_infos_view($eleve_id)
    {   
        require_once('./view/html_views/menu.php') ;
        try {
            $eleve_controller = new eleve_controller();
            $eleve = $eleve_controller->get_eleve_infos_controller($eleve_id);
            $eleve_notes = $eleve_controller->get_eleve_notes_controller($eleve_id) ;
            require_once ('./view/html_views/page_eleve_infos.php') ;
        } catch (Exception $e) {
            echo $e;
        }
    }
    public function afficher_ajout_eleve_form_view()
    {   
         require_once("./view/html_views/admin_dashboard.php") ; 
         require_once ("./view/html_views/ajout_eleve_form.php") ;

    }
}
