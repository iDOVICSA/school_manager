<?php
require_once('./controller/article_controller.php');
class page_acceuil_view
{
    public function entetePage()
    {
        require("./view/html_views/header.php");
    }
    public function diaporama()
    {
        require("./view/html_views/diaporama.php");
    }
    public function menu()
    {
        require("./view/html_views/menu.php");
    }
    public function menu_sans_style() {
        require ("./view/html_views/menu_sans_style.php") ;
    }

    public function afficher_page_acceuil_view()
    {
        $this->entetePage();
        $this->diaporama();
        $this->menu();
        try {
            $article_controller = new article_controller();
            $articles = $article_controller->get_all_articles_controller(1);
            require("./view/html_views/articles_acceuil.php");
        } catch (Exception $ex) {
            echo $ex;
        }
        $this->menu_sans_style();


    }
}
