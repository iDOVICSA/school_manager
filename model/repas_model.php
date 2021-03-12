<?php
require_once('connection_model.php');
class repas_model
{
    public function ajout_repas_model()
    {
        $connection_model = new connection_model();
        $c = $connection_model->connexion();
        if (isset($_POST['repas_samedi'])) {
            $sql = " REPLACE INTO repas (id_repas,jour,repas) VALUES(?,?,?)";
            $row = $c->prepare($sql);
            $row->execute([6, "samedi", $_POST["repas_samedi"]]);
        }
        if (isset($_POST['repas_dimanche'])) {
            $sql = " REPLACE INTO repas (id_repas,jour,repas) VALUES(?,?,?)";
            $row = $c->prepare($sql);
            $row->execute([1, "dimanche", $_POST["repas_dimanche"]]);
        }
        if (isset($_POST['repas_lundi'])) {
            $sql = " REPLACE INTO repas (id_repas,jour,repas) VALUES(?,?,?)";
            $row = $c->prepare($sql);
            $row->execute([2, "lundi", $_POST["repas_lundi"]]);
        }
        if (isset($_POST['repas_mardi'])) {
            $sql = " REPLACE INTO repas (id_repas,jour,repas) VALUES(?,?,?)";
            $row = $c->prepare($sql);
            $row->execute([3, "mardi", $_POST["repas_mardi"]]);
        }
        
        if (isset($_POST['repas_mercredi'])) {
            $sql = " REPLACE INTO repas (id_repas,jour,repas) VALUES(?,?,?)";
            $row = $c->prepare($sql);
            $row->execute([4, "mercredi", $_POST["repas_mercredi"]]);
        }
        if (isset($_POST['repas_jeudi'])) {
            $sql = " REPLACE INTO repas (id_repas,jour,repas) VALUES(?,?,?)";
            $row = $c->prepare($sql);
            $row->execute([5, "jeudi", $_POST["repas_jeudi"]]);
        }
        $connection_model->deconnexion($c);
    }
    public function get_all_repas_model()
    {
        $connection_model = new connection_model();
        $c = $connection_model->connexion();
        $sql = "select * from repas ";
        $row = $c->prepare($sql);
        $row->execute();
        $connection_model->deconnexion($c);
        return $row->fetchAll();
    }
}
