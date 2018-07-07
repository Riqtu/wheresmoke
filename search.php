<?php
    require_once 'database.php' ;
$search_q=$_POST['search_q'];
$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$search_q = trim($search_q);
$search_q = strip_tags($search_q);
$q= mysqli_query($link, "SELECT header,about FROM 'articles' WHERE header LIKE '%$search_q%'");
$itog=mysqli_fetch_assoc($q);
  while ($itog = mysqli_fetch_assoc($q)) {
 printf("%s (%s)\n",$r["header"],$r["about"]);
 }
 mysqli_free_result($q);
  mysqli_close($link);
?>