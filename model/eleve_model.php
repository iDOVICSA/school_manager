<?php
 require_once('connection_model.php');
 class eleve_model {

    public function ajout_eleve_model()
    {
        $nom = $_POST['nom'] ;
        $prenom = $_POST['prenom'] ;
        $matricule = $_POST['matricule'] ;
        $email = $_POST['email'] ;
        $date_naissance = $_POST['date_naissance'] ;
        $cycle = $_POST['cycle'] ;
        $annee_cycle = $_POST['annee_cycle'] ;
        $numero_group = $_POST['numero_group'] ;
        $aes = $_POST['aes'] ;


        $connection_model = new connection_model() ; 
        $c = $connection_model->connexion() ;  
        $sql = "select * from classe where (cycle,annee_cycle,numero_group) =(?,?,?)" ;
        $row = $c->prepare($sql) ;    
        $row->execute([$cycle,$annee_cycle,$numero_group]) ; 
        $classe = $row->fetch() ;
        if ($classe ==null) {
            echo "classe inexsitante";
        }
        else{
          
             $classe_id =$classe["classe_id"] ; 
             $sql = "select * from users where (email) =(?)" ;
             $row = $c->prepare($sql) ;    
             $row->execute([$email]) ; 
             $user = $row->fetch() ;
             if ($user !=null) {
                 echo "addresse email déja pris" ;
             }
             else {
                $sql = "INSERT INTO users  (email,password,user_type) VALUES(?,?,?)";
                $row = $c->prepare($sql);
                $row->execute([$email,'123456',4]);
                $sql = "select * from users where (email) =(?)" ;
                $row = $c->prepare($sql) ;    
                $row->execute([$email]) ; 
                $user = $row->fetch() ;
                $user_id = $user['user_id'] ;
                $sql = "INSERT INTO eleve  (nom,prenom,matricule,date_naissance,user_id,classe_id,activite_extra_scolaire) VALUES(?,?,?,?,?,?,?)";
                $row = $c->prepare($sql);
                $row->execute([$nom,$prenom,$matricule,$date_naissance,$user_id,$classe_id,$aes]) ; 
            }
        }
        $connection_model->deconnexion($c) ; 
    }
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
