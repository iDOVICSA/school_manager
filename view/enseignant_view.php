<?php
require_once('./controller/enseignant_controller.php');
class enseignant_view
{
   public function afficher_ajout_enseignant_form_view()
   {
      require_once("./view/html_views/admin_dashboard.php") ; 
    require_once ("./view/html_views/ajout_enseignant_form.php") ;
   }


   public function afficher_page_login_enseignant_view()
   {
      $user_type=2 ; 

      require ("./view/html_views/login.php") ;
   }

   public function afficher_enseignant_infos_view($enseignant_id)
   {
      try {
          $enseignant_controller = new enseignant_controller();
          $enseignant = $enseignant_controller->get_enseignant_infos_controller($enseignant_id);
          $enseignant_classes = $enseignant_controller->get_all_enseignants_classes_controller($enseignant_id) ; 
          $enseignant_eleves = $enseignant_controller->get_all_enseignants_eleves_controller($enseignant_id) ;
      
           require_once ("./view/html_views/menu.php");
          require_once ('./view/html_views/page_enseignant_infos.php');
      } catch (Exception $e) {
          echo $e;
      }
   }
   
}
