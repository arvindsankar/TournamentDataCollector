<?php
define('DB_NAME', 'forms1');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Amit12');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

$db_selected = mysql_select_db(DB_NAME, $link);

echo 'Connected Successfully';

$value = $_POST['input1'];

$sql = "INSERT INTO demo (input1) VALUES ('$value')";


if($sql){
	print("Success!");
}

if (!mysql_query($sql)) {
	die('Error');
}

mysql_close();

?>