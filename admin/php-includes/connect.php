<?php
$db_host = "sql107.epizy.com";
	$db_user = "epiz_26874935";
	$db_pass = "h7ubO2NnU6";
	$db_name = "epiz_26874935_cleanalya1";
	$con =  mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if(mysqli_connect_error()){
		echo 'connect to database failed';
	}
?>