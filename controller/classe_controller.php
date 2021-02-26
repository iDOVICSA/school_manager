<?php
require_once('./model/classe_model.php') ;
 

class classe_controller {
   public function get_all_classes_controller()
   {
       $cm = new classe_model() ; 
       return $cm->get_all_classes_model() ; 
   }
}

?>