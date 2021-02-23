<?php
require_once('connection_model.php');
class page_contact_model
{

    public function modification_contact_model()
    {
        $connection_model = new connection_model();
        $c = $connection_model->connexion();
        $sql = " REPLACE INTO contact (id,adresse,num_tlf,num_fax) VALUES(?,?,?,?)";
        $row = $c->prepare($sql);
        $row->execute([1, $_POST["adresse"], $_POST["num_tlf"], $_POST["num_fax"]]);
        $connection_model->deconnexion($c);
    }
    public function get_contact_ecole_infos_model()
    {
        $connection_model = new connection_model();
        $c = $connection_model->connexion();
        $sql = "select * from contact " ;
        $row = $c->prepare($sql) ;    
        $row->execute() ; 
        $connection_model->deconnexion($c) ; 
        return $row->fetch(); 
    }
}
