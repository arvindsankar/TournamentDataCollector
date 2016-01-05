<?php
define('DB_NAME', 'forms1');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Amit12');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

$db_selected = mysql_select_db(DB_NAME, $link);

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$attend = $_POST['attend'];
$judged = $_POST['judged'];
$wins = $_POST['wins'];
$loss = $_POST['loss'];
$parent_name = $_POST['parent_name'];
$parent_email = $_POST['parent_email'];


$sql = "INSERT INTO demo (input1, input2, input3, input4, input5, input6, input7, input8, input9) VALUES ('$name', '$email', '$phone','$attend','$judged','$wins','$loss','$parent_name','$parent_email')";

if(!mysql_query($sql)){
	die('error!');
}

header("Location: website.html");

mysql_close();

?>