<?php
define('DB_NAME', 'forms1');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

$db_selected = mysql_select_db(DB_NAME, $link);

echo 'Connected Successfully';


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$attend = $_POST['attend'];
$judged = $_POST['judged'];
$wins = $_POST['wins'];
$loss = $_POST['loss'];
$parent_phone = $_POST['parent_phone'];
$parent_email = $_POST['parent_email'];



$sql ="INSERT INTO demo (name, email, phone, attend, judged, wins, loss, parent_phone, parent_email) VALUES ('$name', '$email', '$phone','$attend','$judged','$wins','$loss','$parent_phone','$parent_email')";



if($sql){
	print("Success!");
}

if (!mysql_query($sql)) {
	die('Error');
}

mysql_close();

?>