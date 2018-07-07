<?php
require_once '../database.php' ; 
require_once '../models/articles.php' ; 
$link = mysqli_connect($db_host, $db_user, $db_password, $db_name); 
$articles = articles_all(@$link); 
$counter = -1; 
?>
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