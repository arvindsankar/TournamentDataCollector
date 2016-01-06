 <?php
define('DB_NAME', 'forms1');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Amit12');
define('DB_HOST', 'localhost');

<<<<<<< HEAD:yolo.php
$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

$db_selected = mysql_select_db(DB_NAME, $link);

echo 'Connected Successfully';
=======
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
>>>>>>> 51d03e8664bf21b8f107f542ba83ca204867a43d:student_tournament_registration.php

$name = ['x','y', 'z', 'a', 'b'];
$namestr = implode("+", 'name');

    $j = 0; // counter
    while (5 > $j) 
    {
        echo "<tr>";
<<<<<<< HEAD:yolo.php
        for ($i = 0; $i < 5; $i++) 
        {
              if(5 < $j) 
                break; //exit from the loop if names are over
        ?>
          <td width="260px"><a href="<?php echo $link;?>" target="_blank" title="<?php echo $namestr; ?>"><?php echo $name; ?></a></td>
        <?php
            $j++;
        }
        echo "</tr>";
    }
    ?>
=======
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

>>>>>>> 51d03e8664bf21b8f107f542ba83ca204867a43d:student_tournament_registration.php
