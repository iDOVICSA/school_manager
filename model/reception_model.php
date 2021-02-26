<?php
require_once('connection_model.php');
class reception_model
{
   public function ajout_reception_model()
   {
       
    $date_reception = $_POST['date_reception'];
    $heure_reception = $_POST['heure_reception'];
    $enseignant = $_POST['enseignant'];
    $enseignant_id = explode(' : ', $enseignant)[0];
 
    $connection_model = new connection_model();
    $c = $connection_model->connexion();
    $sql = "select * from reception where  (enseignant_id,date_reception,heure_reception,) =(?,?,?)";
    $row = $c->prepare($sql);
    $row->execute([$enseignant_id,$date_reception,$heure_reception]);
    $reception = $row->fetch();
    if ($reception != null ) {
        echo 'cette reception est déja planifier' ;
    }
    else
    {
         $sql = "INSERT INTO  reception   (enseignant_id,date_reception,heure_reception) VALUES (?,?,?)";
        $row = $c->prepare($sql);
        $row->execute([$enseignant_id,$date_reception,$heure_reception]);
    }


    $connection_model->deconnexion($c);
   }
}
