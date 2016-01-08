
   <?php
   	define('DB_NAME', 'forms1');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'Amit12');
	define('DB_HOST', 'localhost');

	$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

	$db_selected = mysql_select_db(DB_NAME, $link);

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $attend = $_POST['attend'];
  $judged = $_POST['judged'];
  $wins = $_POST['wins'];
  $loss = $_POST['loss'];
  $parent_name = $_POST['parent_name'];
  $parent_email = $_POST['parent_email'];
	$school = $_POST['school'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
    $con=mysqli_connect("localhost","root","Amit12","forms1");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT username,email FROM demo");

    if($confirm != $password){
       echo '<script type="text/javascript">alert("your passwords dont match up try again");</script>';
       echo '<script type="text/javascript">window.location=(\'loginexample.html\');</script>';


    }
    while($row = mysqli_fetch_array($result))
      {
     	 if ($row['username'] == $username or $row['email'] == $email) {
          echo '<script type="text/javascript">alert("choose another username/email someone else has this one.");</script>';
          echo '<script type="text/javascript">window.location=(\'loginexample.html\');</script>';
          die;
     	 }
      }
	echo '<script type="text/javascript">window.location=(\'student_login.html\');</script>';
	$sql = "INSERT INTO demo (name, email, phone, attend, judged, wins, loss, parent_name, parent_email, school, username, password, confirm) VALUES ('$name', '$email', '$phone','$attend','$judged','$wins','$loss','$parent_name','$parent_email', '$school', '$username','$password','$confirm')";
	if(!mysql_query($sql)){
		die('error!');
	}    

    mysqli_close($con);
?>