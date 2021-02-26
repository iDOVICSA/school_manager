<?php
 require_once('connection_model.php');
 
 
 class matiere_model {

    public function get_all_matieres_model()
    {
        $connection_model = new connection_model() ; 
        $c = $connection_model->connexion() ;  
        $sql = "select * from matiere" ;
        $row = $c->prepare($sql) ;    
        $row->execute() ; 
        return $row->fetchAll() ;
    }

}
