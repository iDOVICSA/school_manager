<?php
require_once('connection_model.php');
class parent_model
{

    public function get_parent_fils_model($parent_id)
    {

        $connection_model = new connection_model();
        $c = $connection_model->connexion();
        $sql = "select * from eleve INNER JOIN users on users.user_id=eleve.user_id where (parent_id) = (?)";
        $row = $c->prepare($sql);
        $row->execute([$parent_id]);
        $connection_model->deconnexion($c);

        return $row->fetchAll();
    }


    public function get_parent_infos_model($parent_id)
    {
        
        $connection_model = new connection_model();
        $c = $connection_model->connexion();
        $sql = "select * from parent INNER JOIN users on users.user_id=parent.user_id where (parent_id) = (?)";
        $row = $c->prepare($sql);
        $row->execute([$parent_id]);
        $connection_model->deconnexion($c);
        return $row->fetch();
    
    }
}
