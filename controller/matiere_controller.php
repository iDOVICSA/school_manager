<?php
require_once('./model/matiere_model.php') ;
 

class matiere_controller {
   public function get_all_matieres_controller()
   {
       $cm = new matiere_model() ; 
       return $cm->get_all_matieres_model() ; 
   }
}

?>