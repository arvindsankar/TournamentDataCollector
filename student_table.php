
<?php
$link = mysql_connect('localhost', 'root', 'Amit12');
mysql_select_db('forms1', $link);

$sql="SELECT * FROM tournament_registration";

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

<th>Tournament Name</th>
<th>Student Name</th>
<th> Student Tournament Name</th>
<th> Hiring A Judge</th>
<th> Amount of Judges Needed</th>
<tr>

<?php

    while($student=mysql_fetch_assoc($records)) {
        echo "<tr>";
        echo "<td>".$student['student_tournament_name']."</td>";
        echo "<td>".$student['full_name']."</td>";
        echo "<td>".$student['tournament_name']."</td>";
        echo "<td>".$student['judge_hired_option']."</td>";
        echo "<td>".$student['judges_needed']."</td>";
        echo "</tr>";        
    }//end while

?>

</table>
</body>
</html>