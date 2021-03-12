<?php
require_once('./controller/reception_controller.php');
require_once ('./controller/enseignant_controller.php') ;

class reception_view
{
   public function afficher_ajout_reception_form_view()
   {
    $ec = new enseignant_controller() ;
    $enseignants = $ec->get_all_enseignants_controller() ;
    require_once ("./view/html_views/admin_dashboard.php") ;
    require_once ("./view/html_views/ajout_reception_form.php") ;
   }
}
