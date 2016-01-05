<?php
define('DB_NAME', 'forms1');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Amit12');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

$db_selected = mysql_select_db(DB_NAME, $link);

echo 'Connected Successfully';


$value1 = $_POST['tournament_name'];
$value2 = $_POST['judges_needed'];
$value3 = $_POST['full_name'];
$value4 = $_POST['student_tournament_name'];
$value5 = $_POST['judge_hired_option'];

$sql ="INSERT INTO tournament_registration (tournament_name, full_name, student_tournament_name, judge_hired_option, judges_needed) VALUES ('$value1', '$value3', '$value4','$value5','$value2')";


if($sql){
	print("Success!");
}

if (!mysql_query($sql)) {
	die('Error');
}

mysql_close();

?>