<?php
 require_once('./model/article_model.php') ;
 require_once('./view/page_acceuil_view.php') ;
 
class page_acceuil_controller {
   

    public function afficher_page_acceuil_controller() {
        $v = new page_acceuil_view() ;
        $v->afficher_page_acceuil_view() ;
    }
}

?>