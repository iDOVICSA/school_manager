<?php
require_once('./controller/repas_controller.php');
 
class repas_view
{
   public function afficher_ajout_repas_form_view()
   {
    $rc = new repas_controller() ; 
    $tous_repas = $rc->get_all_repas_controller() ; 
    require_once ("./view/html_views/admin_dashboard.php") ;
    require_once ("./view/html_views/ajout_repas_form.php") ;
   }
}
