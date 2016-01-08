
<?php
$link = mysql_connect('localhost', 'root', 'Amit12');
mysql_select_db('forms1', $link);

$sql="SELECT * FROM tournament_registration";

$student = mysql_query($sql);
$return = array();
    while($test=mysql_fetch_assoc($student)){
        
        array_push($return, $test['tournament_name']);
    }
        $i = sizeof($return);
        


?>

<html>
<head>
<title>Student Send</title>
</head>

<body>
<h1>Send Script</h1>
<form action = "tournament_database.php" method="POST">
    Select Tournament: <select name="tournament_name">
    <option name="blah">yolo</option>
    <?php 
        for($x=0; $x<=$i; $x++){
            echo "<option name = \"blah\">".$return[$x]."</option>";
        } 
    ?>
    </select>
    <input type="submit" value ="Submit"/>
</form>
<?php
?>
</body>
</html>