<?php
 require_once('connection_model.php');
 
 
 class classe_model {

    public function get_all_classes_model()
    {
        $connection_model = new connection_model() ; 
        $c = $connection_model->connexion() ;  
        $sql = "select * from classe" ;
        $row = $c->prepare($sql) ;    
        $row->execute() ; 
        return $row->fetchAll() ;
    }

}
