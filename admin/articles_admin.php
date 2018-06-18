<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
</head>
<body>
    <div>
        <a href="../index.php"><h1>Тест</h1></a>
        <a href="index.php?action=add">Добавить статью</a>
        <div>
            <table>
                <tr>
                    <th>ZAGOLOVOK</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($articles as $a): ?> 
                <tr>
                    <td><?=$a['header']?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?=$a['id']?>">redaktirovat</a>
                    </td>
                    <td>
                        <a href="index.php?action=delete&id=<?=$a['id']?>">udalit</a>
                    </td>
                </tr>
                <?php endforeach ?> 
            </table>
        </div>
    </div>
</body>
</html>