<?php

// connection db
// charset db

if (isset($_GET['accueil'])){
    require_once "files/accueil.php";
} else if (isset($_GET['articles'])){
    require_once "files/articles.php";
} else if (isset($_GET['article']) /*&& ctype_digit($_GET['article'])*/){
    require_once "files/article.php";
} else if (isset($_GET['romans'])){
    require_once "files/romans.php";
} else if (isset($_GET['roman']) /*&& ctype_digit($_GET['roman'])*/){
    require_once "files/roman.php";
}else if (isset($_GET['chapitre']) /*&& ctype_digit($_GET['chapitre'])*/){
    require_once "files/chapitre.php";
} else if (isset($_GET['contact'])){
    require_once "files/contact.php";
} else if (isset($_GET['a-propos'])){
    require_once "files/a-propos.php";
} else if (isset($_GET['connexion'])){
    require_once "files/connexion.php";
} else {
    require_once "files/accueil.php";
}