<?php
    ob_start();
    require_once '../database.php' ;
    require_once '../models/articles.php' ;

    $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "";

    if ($action == "add"){
        if(!empty($_POST)){
            articles_new($link, $_POST['header'], $_POST['mark'], $_POST['plusminus'], $_POST['image'], $_POST['about'], $_POST['map'], $_POST['brn'], $_POST['locinrost'] );
            header("Location: index.php");
        }
        include("article_admin.php");
    }
    else if($action == "edit"){
        if(!isset($_GET['id']))
            header("Location: index.php");
        $id = (int)$_GET['id'];

        if(!empty($_POST) && $id > 0){
            articles_edit($link, $id, $_POST['header'], $_POST['mark'], $_POST['plusminus'], $_POST['image'], $_POST['about'], $_POST['map'], $_POST['brn'], $_POST['locinrost']);
            header("Location: index.php");
        }
        $article = articles_get($link, $id);
        include("article_admin.php");
    }
    else if($action == "delete"){
        $id = $_GET['id'];
        $article = articles_delete($link, $id);
        header("Location: index.php");
    }
    else{
        $articles = articles_all($link);
        include("articles_admin.php");
    }
    ob_flush();
?>