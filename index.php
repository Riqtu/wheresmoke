<?php
    require_once 'database.php' ;
    require_once 'models/articles.php' ;
    $link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    $articles = articles_all(@$link);
    $counter = -1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Где кальян?</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,900&amp;subset=cyrillic" rel="stylesheet">
    <!-- <script src="js/jquery-latest.js"></script> -->
</head>
<body>
    <div class="howold">
        <h1 class="howold__st">18+</h1>
        <h1 class="howold__noold">:c</h1>
        <h2 class="howold__st">Тебе много годиков?</h2>
        <h2 class="howold__noold">Сюда тебе нельзя</h2>
        <div class="howold__logo">
             <img src="img/logo.png" alt="">
        </div>
        <div class="howold__yes" onclick="start()">ДА</div>
        <div class="howold__no" onclick="noold()">НЕТ</div>
    </div>
    <div class="bg"></div>
    <div class="menu">
            <img class="menu__img" src="img/menu-butto-on.svg">
    </div>
    <div class="mleft"></div>
    <div class="mcenter"></div>
    <div class="mright"></div>
    <div class="novigation">
        <h1 onclick="goToHome(); menu.setMenu();">ГЛАВНАЯ</h1></a>
        <h1 onclick="aboutOn(); menu.setMenu();">О ПРОЕКТЕ</h1>
        <!-- <h1 onclick="projectsOn(); menu.setMenu();">РАБОТЫ</h1>
        <h1 onclick="contactsOn(); menu.setMenu();">КОНТАКТЫ</h1> -->
    </div>
    <div class="logo">
        <img src="img/logo.png" alt="" onclick="closeArticle(<?= $counter ?>)">
    </div>
    <div class="content">
    <?php foreach ($articles as $a): $counter +=1;?>
    <div class="article">
        <div class="article__header" onclick="openArticle(<?= $counter ?>)"><?=$a['header']?></div>
        <div class="article__mark"><?php echo "<img src='".$a['mark']."' >"?></div>
        <br><br><br>
        <div class="article__plusminus" onclick="openArticle(<?= $counter ?>)"><?=$a['plusminus']?></div>
        <div class="article__img" onclick="openArticle(<?= $counter ?>)"><?php echo "<img src='".$a['image']."'>"?></div>
        <div class="article__about"><?=$a['about']?></div>
        <div class="article__map"><?=$a['map']?></div>
        <div class="article__buy" onclick="closeArticle(<?= $counter ?>)">
            ЗАБРОНИРОВАТЬ
        </div>
    </div>
        <?php endforeach ?> 
    </div>
    <div class="recomendation-all"></div>
    <div class="recomendation">
        <div class="recomendation__header">Кальянная дня:</div>
    <div class="article-recom">
        <div class="article-recom__img" onclick="recomendationOn()"><img src="img/youhoo-rec.jpg" alt=""></div>
        <div class="article-recom__header">YOUHOO</div>
    </div>
    </div>

    <div class="contacts">
        <h3>Мы в социальных сетях:</h3>
        <a href=""><img src="img/vk.svg" alt=""></a>
        <a href="admin/index.php"><img src="img/instagram.svg" alt=""></a>
    </div>
    <script src="js/main.js"></script>
</body>
</html>