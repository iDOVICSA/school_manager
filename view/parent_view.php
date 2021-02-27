<?php
require_once('./controller/parent_controller.php');
class parent_view
{
    public function afficher_parent_infos_view($parent_id)
    {
        require_once('./view/html_views/menu.php') ;
        try {
    
            $parent_controller = new parent_controller() ; 
            $parent_fils = $parent_controller->get_parent_fils_controller($parent_id);
            $parent_infos = $parent_controller->get_parent_infos_controller($parent_id) ; 
            require_once ('./view/html_views/page_parent_infos.php') ;
        } catch (Exception $e) {
            echo $e;
        }
    }
 
}
