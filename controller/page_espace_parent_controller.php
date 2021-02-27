<?php
 require_once('./model/article_model.php') ;
 require_once('./view/page_espace_parent_view.php') ;
 
class page_espace_parent_controller {
   
    public function afficher_page_espace_parent_controller() {
        $v = new page_espace_parent_view();
        $v->afficher_page_espace_parent_view();
    }
}

?>