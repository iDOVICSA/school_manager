<?php
require_once('./model/parent_model.php') ; 
require_once('./view/parent_view.php') ;


class parent_controller {

   
    public function afficher_parent_infos_controller($parent_id)
    {
        $v = new parent_view() ;
        $v->afficher_parent_infos_view($parent_id) ;
    }

    public function get_parent_infos_controller($parent_id)
    {
        $pm = new parent_model() ; 
        return $pm->get_parent_infos_model($parent_id) ;
    }

    public function get_parent_fils_controller($parent_id)
    {
        $pm = new parent_model() ; 
        return $pm->get_parent_fils_model($parent_id) ;
    }
}

?>