<?php
require_once('./controller/page_presentation_ecole_controller.php');
class page_presentation_ecole_view
{

    public function menu()
    {
        require("./view/html_views/menu.php");
    }

    public function afficher_page_presentation_ecole_view()
    {
        $this->menu();
        try {
            $presentation_controller = new page_presentation_ecole_controller();
            $presentation = $presentation_controller->get_all_presentation_ecole_controller();
            require("./view/html_views/presentaion_ecole.php");
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function afficher_ajout_presentation_form_view() {
            require ("./view/html_views/admin_dashboard.php") ; 
            require ("./view/html_views/ajout_presentation_form.php") ;
    }
}
