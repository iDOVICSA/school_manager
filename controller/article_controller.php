<?php
require_once('./model/article_model.php') ;
require_once('./view/article_view.php') ;


class article_controller {
    public function get_article_controller ($id_article) {
        $mtf = new article_model() ;
        return $mtf->get_article_model($id_article) ;
    }
    public function get_all_articles_controller ($audiance) {
        $mtf = new article_model() ;
        return $mtf->get_all_articles_model($audiance) ;
    }
    public function afficher_article_controller() {
        $v = new article_view() ;
        $v->afficher_article_view() ;
    }
    public function afficher_article_details_controller ($id_article) {
        $v = new article_view() ;
        $v->afficher_article_details_view($id_article) ;
    }

    public function afficher_ajout_article_form_controller() {
        $v = new article_view() ;
        $v->afficher_ajout_article_form_view() ; 
    }

    public function ajout_article_controller() {
        $mtf = new article_model() ;
        $mtf->ajout_article_model() ;
    }
}

?>