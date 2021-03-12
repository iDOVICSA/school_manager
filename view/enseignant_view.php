<?php
require_once('./controller/enseignant_controller.php');
class enseignant_view
{
   public function afficher_ajout_enseignant_form_view()
   {
      require_once("./view/html_views/admin_dashboard.php") ; 
    require_once ("./view/html_views/ajout_enseignant_form.php") ;
   }
}
