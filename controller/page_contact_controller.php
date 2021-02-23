<?php
require_once('./model/page_contact_model.php') ;
require_once('./view/page_contact_view.php') ;


class page_contact_controller {
   public function get_contact_ecole_infos_controller()
   {
      $mtf = new page_contact_model() ;
      return $mtf->get_contact_ecole_infos_model() ;
   }
   public function modification_contact_form_controller() 
   {    
        $v = new page_contact_view() ;
        $v->modification_contact_form_view() ;
   }
   public function modification_contact_controller() 
   {   
      $mtf = new page_contact_model() ;
      return $mtf->modification_contact_model() ;
   }
   public function afficher_contact_controller() 
   {
      $v = new page_contact_view() ;
      $v->afficher_contact__view() ;
      
   }
}

?>