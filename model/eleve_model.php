<?php
 require_once('connection_model.php');
 class eleve_model {

    public function get_eleve_notes_model($eleve_id)
    {
        $connection_model = new connection_model() ; 
        $c = $connection_model->connexion() ;  
        $sql = "select * from eleve  INNER JOIN notes on notes.eleve_id = eleve.matricule INNER JOIN matiere on matiere.matiere_id=notes.matiere_id where (matricule) =(?)" ;
        $row = $c->prepare($sql) ;    
        $row->execute([$eleve_id]) ; 
        $eleve = $row->fetchAll() ;
        $connection_model->deconnexion($c) ; 
        return $eleve;
    }

    public function get_eleve_infos_model($eleve_id)
    {   
        $connection_model = new connection_model() ; 
        $c = $connection_model->connexion() ; 
        // select with inner join to get all eleve infos
        $sql = "select * from eleve  INNER JOIN users on users.user_id = eleve.user_id INNER JOIN classe on eleve.classe_id=classe.classe_id where (matricule) =(?)" ;
        $row = $c->prepare($sql) ;    
        $row->execute([$eleve_id]) ; 
        $eleve = $row->fetch() ;
        $connection_model->deconnexion($c) ; 
        return $eleve;
     }

}
