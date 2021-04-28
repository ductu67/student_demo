<?php
   	define('DB_SERVER', 'mysql-student');
   	define('DB_USERNAME', 'root');
   	define('DB_PASSWORD', 'A12345678');
   	define('DB_DATABASE', 'istudent_db');
   	$connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   	if(!$connection){
		die("Connection failed: " . mysqli_connect_error());
   	}
?>