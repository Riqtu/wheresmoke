<?php

    $k = -1;
    function articles_all($link){
        $query = "SELECT * FROM articles ORDER BY id DESC";
        $result = mysqli_query($link, $query);

        if (!$result)
            die(mysqli_error($link));

        $n = mysqli_num_rows($result);
        $articles = array();

        for ($i = 0; $i < $n; $i++){
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }

        return $articles;
    }
    function articles_new($link, $header, $mark, $plusminus, $image, $about, $map, $brn){
        $header = trim($header);

        if ($header == '')
            return false;
        
        $t = "INSERT INTO articles (header, mark, plusminus, image, about, map, brn) VALUES ('%s', '%s', '%s','%s', '%s', '%s','%s')";
        $query = sprintf($t,
        mysqli_real_escape_string($link, $header), 
        mysqli_real_escape_string($link, $mark),
        mysqli_real_escape_string($link, $plusminus),
        mysqli_real_escape_string($link, $image),
        mysqli_real_escape_string($link, $about),
        mysqli_real_escape_string($link, $map),
        mysqli_real_escape_string($link, $brn));
        
        $result = mysqli_query($link, $query);
        if (!$result)
            die(mysqli_error($link));
        
        return true;
    }
?>

<?php 
require_once 'database.php' ;
function upload_file($file, $upload_dir= '../img', $allowed_types= array('img/png','img/x-png','img/jpeg','img/webp','img/gif', 'img/jpg')){

$blacklist = array(".php", ".phtml", ".php3", ".php4");
$ext = substr($filename, strrpos($filename,'.'), strlen($filename)-1); // В переменную $ext заносим расширение загруженного файла.
if(in_array($ext,$blacklist )){
  return array('error' => 'Запрещено загружать исполняемые файлы');}

$upload_dir = dirname(__FILE__).DIRECTORY_SEPARATOR.$upload_dir.DIRECTORY_SEPARATOR; // Место, куда будут загружаться файлы.
$max_filesize = 8388608; // Максимальный размер загружаемого файла в байтах (в данном случае он равен 8 Мб).
$prefix = date('Ymd-is_');
$filename = $file['name']; // В переменную $filename заносим точное имя файла.

if(!is_writable($upload_dir))  // Проверяем, доступна ли на запись папка, определенная нами под загрузку файлов.
  return array('error' => 'Невозможно загрузить файл в папку "'.$upload_dir.'". Установите права доступа - 777.');

// if(!in_array($file['type'], $allowed_types))
//   return array('error' => 'Данный тип файла не поддерживается.');

if(filesize($file['tmp_name']) > $max_filesize)
  return array('error' => 'файл слишком большой. максимальный размер '.intval($max_filesize/(1024*1024)).'мб');

if(!move_uploaded_file($file['tmp_name'],$upload_dir.$filename)) // Загружаем файл в указанную папку.
  return array('error' => 'При загрузке возникли ошибки. Попробуйте ещё раз.');

   return Array('filename' => $filename);
}?>