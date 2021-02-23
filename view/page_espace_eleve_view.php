<?php
require_once('./controller/article_controller.php');
class page_espace_eleve_view
{
 
    public function afficher_page_espace_eleve_view()
    { 
        try {
            $article_controller = new article_controller();
            $articles = $article_controller->get_all_articles_controller(4);
            // audiance 4 idique les eleve 
            require("./view/html_views/articles_acceuil.php");
        } catch (Exception $ex) {
            echo $ex;
        }
    }
}
