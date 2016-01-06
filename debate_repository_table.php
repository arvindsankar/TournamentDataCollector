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
<th>Email</th>
<th>Phone Number</th>
<th>Number of Tournaments Attended</th>
<th>Number of Tournaments Judged</th>
<th>Number of Wins</th>
<th>Number of Losses</th>
<th>Parent Name</th>
<th>Parent Phone Number</th>

<tr>

<?php

    while($student=mysql_fetch_assoc($records)) {
        echo "<tr>";
        echo "<td>".$student['input1']."</td>";
        echo "<td>".$student['input2']."</td>";
        echo "<td>".$student['input3']."</td>";
        echo "<td>".$student['input4']."</td>";
        echo "<td>".$student['input5']."</td>";
        echo "<td>".$student['input6']."</td>";
        echo "<td>".$student['input7']."</td>";
        echo "<td>".$student['input8']."</td>";
        echo "<td>".$student['input9']."</td>";
        echo "</tr>";        
    }//end while

?>
