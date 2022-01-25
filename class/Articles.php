<?php

require_once("Article.php");

class Articles{

    public array $articles = [];

    public function ajouter(Article $article){
        array_push($this->articles, $article);
    }

}

