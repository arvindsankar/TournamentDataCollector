 <?php
define('DB_NAME', 'forms1');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Amit12');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

$db_selected = mysql_select_db(DB_NAME, $link);

echo 'Connected Successfully';

$name = ['x','y', 'z', 'a', 'b'];
$namestr = implode("+", 'name');

    $j = 0; // counter
    while (5 > $j) 
    {
        echo "<tr>";
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