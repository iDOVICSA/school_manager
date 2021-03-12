<?php
require_once('./controller/article_controller.php') ; 

class article_view {
    
    public function afficher_article_view () {
        try {
            $article_controller = new article_controller() ;
            $article = $article_controller->get_article_controller(1) ; 
            require_once("./view/html_views/article_html.php");
        }
        catch(Exception $e) {
            echo $e ;
        }
    }
    public function afficher_article_details_view($id_article)  {
        require("./view/html_views/menu.php") ;
        try {
            $article_controller = new article_controller() ;
            $article = $article_controller->get_article_controller($id_article) ; 
            require_once("./view/html_views/article_details_html.php");
        }
        catch(Exception $e) {
            echo $e ;
        }
    }
    public function afficher_ajout_article_form_view() {
         require("./view/html_views/admin_dashboard.php") ; 
         require("./view/html_views/ajout_article_form.php") ;

    }
}
