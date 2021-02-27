<?php
require_once('./controller/article_controller.php');

class page_espace_parent_view
{
    public function afficher_page_espace_parent_view()
    { 
        try {
            $article_controller = new article_controller();
            $articles = $article_controller->get_all_articles_controller(3);
            // audiance 3 idique les parents
            require("./view/html_views/articles_acceuil.php");
            $user_type=3; 
            require ("./view/html_views/login.php") ; 
        } catch (Exception $ex) {
            echo $ex;
        }
    }
}
