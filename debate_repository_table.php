<?php
$link = mysql_connect('localhost', 'root', 'Amit12');
mysql_select_db('forms1', $link);

$sql="SELECT * FROM demo";

$records = mysql_query($sql);

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="table_style.css">
<title>Tournament Data</title>
</head>

<body>
<h1>Tournament Registration Information</h1>
<table width="1000" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Name</th>
<th>Attended</th>
<th>Judged</th>
<th>Wins</th>
<th>Losses</th>

<tr>

<?php

    while($student=mysql_fetch_assoc($records)) {
        echo "<tr>";
        echo "<td>".$student['name']."</td>";
        echo "<td>".$student['attend']."</td>";
        echo "<td>".$student['judged']."</td>";
        echo "<td>".$student['wins']."</td>";
        echo "<td>".$student['loss']."</td>";
        echo "</tr>";        
    }//end while

?>
