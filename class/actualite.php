<?php

require_once("Articles.php");
require_once("Article.php");

$articles = new Articles();

$articles->ajouter(new Article(1, "23 novembre 2021","Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, ratione!"));
$articles->ajouter(new Article(2, "21 novembre 2021","Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, ratione!"));
$articles->ajouter(new Article(3, "15 novembre 2021","Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, ratione!"));
$articles->ajouter(new Article(4, "14 novembre 2021","Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, ratione!"));
$articles->ajouter(new Article(5, "11 novembre 2021","Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, ratione!"));
$articles->ajouter(new Article(6, "8 novembre 2021","Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, ratione!"));
$articles->ajouter(new Article(7, "7 novembre 2021","Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, ratione!"));
$articles->ajouter(new Article(8, "3 novembre 2021","Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, ratione!"));
$articles->ajouter(new Article(9, "1 novembre 2021","Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, ratione!"));

?>