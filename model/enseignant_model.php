<?php
require_once('connection_model.php');
class enseignant_model
{
    public function ajout_enseignant_model()
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        $connection_model = new connection_model();
        $c = $connection_model->connexion();
        $sql = "select * from users where (email) =(?)";
        $row = $c->prepare($sql);
        $row->execute([$email]);
        $user = $row->fetch();
        if ($user != null) {
            echo "addresse email déja pris";
        } else {
            $sql = "INSERT INTO users  (email,password,user_type) VALUES(?,?,?)";
            $row = $c->prepare($sql);
            // user type = 2 for enseignant
            $row->execute([$email, '123456', 2]);
            $sql = "select * from users where (email) =(?)";
            $row = $c->prepare($sql);
            $row->execute([$email]);
            $user = $row->fetch();
            $user_id = $user['user_id'];
            $sql = "INSERT INTO enseignant  (nom,prenom,telephone,user_id) VALUES(?,?,?,?)";
            $row = $c->prepare($sql);
            $row->execute([$nom, $prenom, $telephone, $user_id]);
        }
        $connection_model->deconnexion($c);
    }

    public function get_all_enseignants_model()
    {
        $connection_model = new connection_model() ; 
        $c = $connection_model->connexion() ;  
        $sql = "select * from enseignant" ;
        $row = $c->prepare($sql) ;    
        $row->execute() ; 
        return $row->fetchAll() ;

    }
    
}
