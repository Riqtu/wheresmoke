<?php
require_once '../database.php' ; 
require_once '../models/articles.php' ; 
$link = mysqli_connect($db_host, $db_user, $db_password, $db_name); 
$word = $_POST['search'];
$query = "SELECT * FROM articles WHERE header LIKE '%" . $word . "%'";
$result = mysqli_query($link, $query);

if (!$result){
    die(mysqli_error($link));
    echo "PIIIISOOOOS";
}

$n = mysqli_num_rows($result);
$articles = array();

for ($i = $n; $i > 0; $i--){
    $row = mysqli_fetch_assoc($result);
    $articles[] = $row;
}
$counter = -1; 
?>
<?php foreach ($articles as $a): $counter +=1;?>
    <div class="article">
        <div class="article__header" onclick="openArticle(<?= $counter ?>)"><?=$a['header']?></div>
        <div class="article__exit" onclick="closeArticle(<?= $counter ?>)">X</div>
        <div class="article__mark"><?php echo "<img src='".$a['mark']."' >"?></div>
        <br><br><br>
        <div class="article__plusminus" onclick="openArticle(<?= $counter ?>)"><?=$a['plusminus']?></div>
        <div class="article__img" onclick="openArticle(<?= $counter ?>)"><?php echo "<img src='".$a['image']."'>"?></div>
        <div class="article__about">
            <h1>ОПИСАНИЕ</h1>
            <?=$a['about']?>
            <h1>КОНТАКТЫ</h1>
            <?=$a['contacts']?>
        </div>
        <div class="article__map"><?=$a['map']?></div>
        <div class="article__buy" onclick="closeArticle(<?= $counter ?>)">
            ЗАБРОНИРОВАТЬ
        </div>
    </div>
<?php endforeach ?> 