<?php

// connection db
// charset db

if (isset($_GET['accueil'])){
    require_once "files/accueil.php";
} else if (isset($_GET['articles'])){
    require_once "files/articles.php";
} else if (isset($_GET['article']) && ctype_digit($_GET['article'])){
    require_once "files/article.php";
} else if (isset($_GET['series'])){
    require_once "files/series.php";
} else if (isset($_GET['serie']) && ctype_digit($_GET['serie'])){
    require_once "files/serie.php";
} else if (isset($_GET['article']) && ctype_digit($_GET['article'])){
    require_once "files/article.php";
} else if (isset($_GET['contact'])){
    require_once "files/contact.php";
} else if (isset($_GET['a-propos'])){
    require_once "files/a-propos.php";
} else if (isset($_GET['connexion'])){
    require_once "files/connexion.php";
} else {
    require_once "files/accueil.php";
}