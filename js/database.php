<?php
	error_reporting(0);
	$db_host = 'localhost';
	$db_user = 'root';
	$db_password = '20011998z';
	$db_name = 'wheresmoke';
	
	$link = mysqli_connect($db_host, $db_user, $db_password, $db_name);
	if (!$link) {
    	die('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
	}
	if(!mysqli_set_charset($link, "utf8")){
		printf("Error: ".mysqli_error($link));
	}
?>
<!-- apachectl stop -->