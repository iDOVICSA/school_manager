<?php
require_once('./controller/user_controller.php');
class admin_view
{
   public function afficher_page_login_admin_view()
   {
      $user_type=1 ; 

      require ("./view/html_views/login.php") ;
   }
}
