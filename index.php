<?php
    require_once 'database.php' ;
    require_once 'models/articles.php' ;
    $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    $articles = articles_all(@$link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,900&amp;subset=cyrillic" rel="stylesheet">
    <script src="js/jquery-latest.js"></script>
</head>
<body>
    <div class="bg"></div>
    <div class="menu">
            <img class="menu__img" src="img/menu-butto-on.svg">
    </div>
    <div class="mleft"></div>
    <div class="mcenter"></div>
    <div class="mright"></div>
    <div class="novigation">
        <!-- <h1 onclick="goToHome(); menu.setMenu();">ГЛАВНАЯ</h1>
        <h1 onclick="aboutOn(); menu.setMenu();">О ПРОЕКТЕ</h1>
        <h1 onclick="projectsOn(); menu.setMenu();">РАБОТЫ</h1>
        <h1 onclick="contactsOn(); menu.setMenu();">КОНТАКТЫ</h1> -->
    </div>
    <div class="logo">
        <img src="img/logo.png" alt="">
    </div>
    <div class="content">
    <?php foreach ($articles as $a): ?> 
    <div class="article" onclick="openArticle(<?= $a['id']-1 ?>)">
        <div class="article__header"><h1 ></h1><?=$a['header']?></div>
        <div class="article__mark"><?php echo "<img src='".$a['mark']."' >"?></div>
        <div class="article__plusminus"><?=$a['plusminus']?></div>
        <div class="article__img"><?php echo "<img src='".$a['image']."' >"?></div>
        <div class="article__about"><?=$a['about']?></div>
        <div class="article__map"><?=$a['map']?></div>
        <div class="article__buy">
            ЗАБРОНИРОВАТЬ
        </div>
    </div>
        <?php endforeach ?> 
    </div>
    <script src="js/main.js"></script>
</body>
</html>