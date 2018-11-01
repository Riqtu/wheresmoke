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
    <a href="../"><img src="../img/logo.png" alt="" onclick="closeArticle(<?= $counter ?>)"></a>
    </div>
        <div class="admin-content">
        <a href="index.php?action=add"><div class="add-article">Добавить кальянную</div></a>
            <table class="data">
                <tr>
                    <th>Название</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($articles as $a): ?> 
                <tr>
                    <td class="nzv"><?=$a['header']?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?=$a['id']?>">Изменить</a>
                    </td>
                    <td>
                        <a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
                    </td>
                </tr>
                <?php endforeach ?> 
            </table>
        </div>
    </div>
</body>
</html>