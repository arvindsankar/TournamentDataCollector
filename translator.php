<?php
define('DB_NAME', 'forms1');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Amit12');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

$db_selected = mysql_select_db(DB_NAME, $link);

echo 'Connected Successfully';


$value1 = $_POST['input1'];
$value2 = $_POST['input2'];
$value3 = $_POST['input3'];
$value4 = $_POST['input4'];
$value5 = $_POST['input5'];
$value6 = $_POST['input6'];
$value7 = $_POST['input7'];
$value8 = $_POST['input8'];
$value9 = $_POST['input9'];



$sql ="INSERT INTO demo (input1, input2, input3, input4, input5, input6, input7, input8, input9) VALUES ('$value1', '$value2', '$value3','$value4','$value5','$value6','$value7','$value8','$value9')";



if($sql){
	print("Success!");
}

if (!mysql_query($sql)) {
	die('Error');
}

mysql_close();

?>