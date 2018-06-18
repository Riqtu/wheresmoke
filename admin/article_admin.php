<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Тест</h1>
    <div>
        <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
            <label>
                Название
                <input type="text" name="header" value="<?=$article['header']?>" autofocus required>
            </label>
            <label>
                ДАТА
                <input type="text" name="mark" value="<?=$article['mark']?>" required>
            </label>
            <label>
                Содержимое
                <textarea name="plusminus" required><?=$article['plusminus']?></textarea>
                <textarea name="image" required><?=$article['image']?></textarea>
                <textarea name="about" required><?=$article['about']?></textarea>
                <textarea name="map" required><?=$article['map']?></textarea>
                <textarea name="brn" required><?=$article['brn']?></textarea>
            </label>
            <input type="submit" value="Сохранить">
        </form>
    </div>
</body>
</html>