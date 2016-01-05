<html>
<head>
    <link rel="stylesheet" type="text/css" href="Form_Style.css">
</head>

    <h1>Student Tournament Registration</h1>
     
    <body>

    <form action ="tournament_database.php" method="POST">
    Full Name: <br><input type="text" name="full_name"><br>
    Tournament Name: <br><input type="text" name="tournament_name"><br>
    Would you like to hire a judge:
    <br><input type="checkbox" name="judge_hired_option" value="Yes">Yes<br>
    <br><input type="checkbox" name="judge_hired_option" value="No" checked>No<br><br>
    <input type ="submit" value="Submit"/>
    </form>

    </body>
    </div>

</html>


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

