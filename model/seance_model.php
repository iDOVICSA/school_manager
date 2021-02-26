<?php
require_once('connection_model.php');
class seance_model
{
   public function ajout_seance_model()
   {
    $jour = $_POST['jour'];
    $heure_debut = $_POST['heure_debut'];
    $heure_fin = $_POST['heure_fin'];
    $enseignant = $_POST['enseignant'];
    $classe = $_POST['classe'];
    $matiere = $_POST['matiere'];

    $enseignant_id = explode(' : ', $enseignant)[0];
    $classe_id = explode(' : ', $classe)[0];
    $matiere_id = explode(' : ', $matiere)[0];


    $connection_model = new connection_model();
    $c = $connection_model->connexion();
    $sql = "select * from seance where  (matiere_id,enseignant_id,classe_id,jour,heure_debut,heure_fin) =(?,?,?,?,?,?)";
    $row = $c->prepare($sql);
    $row->execute([$matiere_id,$enseignant_id,$classe_id,$jour,$heure_debut,$heure_fin]);
    $classe = $row->fetch();
    if ($classe != null ) {
        echo 'cette seance est déja ajouté' ;
    }
    else
    {
        $sql = "INSERT INTO  seance   (matiere_id,enseignant_id,classe_id,jour,heure_debut,heure_fin) VALUES (?,?,?,?,?,?)";
        $row = $c->prepare($sql);
        $row->execute([$matiere_id,$enseignant_id,$classe_id,$jour,$heure_debut,$heure_fin]);
    }


    $connection_model->deconnexion($c);
   }
}
