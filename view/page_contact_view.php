<?php
require_once('./controller/page_contact_controller.php');
class page_contact_view
{
    public function modification_contact_form_view()
    {
        require_once("./view/html_views/admin_dashboard.php");
        require('./view/html_views/modification_contact_form.php');
    }
    public function afficher_contact__view()
    {

        try {
            $contact_controller = new page_contact_controller();
            $contact_infos = $contact_controller->get_contact_ecole_infos_controller();
            require_once("./view/html_views/page_contact_ecole.php");
        } catch (Exception $e) {
            echo $e;
        }
    }
}
