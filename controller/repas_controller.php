<?php
require_once('./model/repas_model.php');
require_once('./view/repas_view.php');


class repas_controller
{

    public function afficher_ajout_repas_form_controller()
    {
        $ev = new repas_view();
        $ev->afficher_ajout_repas_form_view();
    }

    public function ajout_repas_controller()
    {
        $rc = new repas_model();
        $rc->ajout_repas_model();
    }

    public function get_all_repas_controller()
    {
        $rc = new repas_model();
        return $rc->get_all_repas_model();
    }
}
