<?php
$link= mysql_connect('localhost', 'root', 'Amit12');
$db_selected = mysql_select_db('forms1');
echo "connection success";
#$sql= "SELECT username, password FROM demo";
$sql = "SELECT ID FROM demo WHERE username='yoloswag' and password='amit123'";
$names = mysql_query($sql);
$return= array();
$username_input = POST['username'];
$password_input = POST['password'];
while($row=mysql_fetch_assoc($names)){
	array_push($return, $row['ID']);
}

if($return){
	echo "login";
	#header('location: student_page/student_header.html');
}
else{
	echo "you fucked up";
	#header('location: student_login.html');
}

?>

<html>
<form action='test.php' method="POST">
Username:<br><input type="text" name="username"><br>
Password:<br><input type="text" name="password"><br>
</form>
<input type ="submit" value="Submit"/>

