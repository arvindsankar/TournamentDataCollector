
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
<style>
    form{
        text-align: center;
        margin-top: 20%;
        font-size: 20px;
    }
</style>
</head>

<body>
<form action = "tournament_database.php" method="POST">
    Select Tournament: <select name="tournament_name">
    <?php 
        for($x=0; $x<=$i; $x++){
            echo "<option name = \"blah\">".$return[$x]."</option>";
        } 
    ?>
    </select>
    Would you like to hire a judge:
    <br><input type="checkbox" name="judge_hired_option" value="Yes">Yes<br>
    <br><input type="checkbox" name="judge_hired_option" value="No" checked>No<br><br>
    <input type="submit" value ="Submit"/>
</form>
<?php
?>
</body>
</html>