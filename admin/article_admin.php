<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,900&amp;subset=cyrillic" rel="stylesheet">
</head>
<body>
    <div>
    <div class="bg"></div>
    <div class="logo">
    <a href="../index.php"><img src="../img/logo.png" alt="" onclick="closeArticle(<?= $counter ?>)"></a>
    </div>
    <div>
    <div class="admin-content">
        <form method="post" class="add-form" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
        <table>
            <tr>
            <label>
                <td>Название</td>
                <td><input type="text" name="header" value="<?=$article['header']?>" autofocus required></td>
            </label>
            </tr>
            <tr>
            <label>
                <td>Оценка</td>
                <td><input type="text" name="mark" value="<?=$article['mark']?>" required></td>
            </label>
            </tr>
            <tr>
                <label>
                    <td>Плюсы и Минусы</td>
                    <td><textarea name="plusminus" class="big-form" required><?=$article['plusminus']?></textarea></td>
                </label>
            </tr>
            <tr>
            <label>
                <td>Изображение</td>
                <td><textarea name="image" required><?=$article['image']?></textarea></td>
                
            </label>
            </tr>
            <tr>
            <label>
                <td>Описание</td>
                <td><textarea name="about" class="big-form" required><?=$article['about']?></textarea></td>
            </label>
            </tr>
            <tr>
            <label>
                <td>Контакты</td>
                <td><textarea name="contacts" class="big-form" required><?=$article['contacts']?></textarea></td>
            </label>
            </tr>
            <tr>
            <label>
                <td>Карта</td>
                <td><textarea name="map" required><?=$article['map']?></textarea></td>
                 
            </label>
            </tr>
            <tr>
            <label>
                <td>Бронь/*</td>
                <td><textarea name="brn" required><?=$article['brn']?></textarea></td>
            </label>
            </tr>
            <tr>
            <label>
                <td>Местоположение...</td>
                <td><input type="text" name="locinrost" value="<?=$article['locinrost']?>" required></td>
            </label>
            </tr>
            </table>
            <input type="submit" value="Сохранить">
        </form>
    </div>
</div>
</body>
</html>