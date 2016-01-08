
   <?php
   	define('DB_NAME', 'forms1');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'Amit12');
	define('DB_HOST', 'localhost');

	$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

	$db_selected = mysql_select_db(DB_NAME, $link);


	$coach = $_POST['coach'];
	$school = $_POST['school'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
    $con=mysqli_connect("localhost","root","Amit12","forms1");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT username,email FROM users");

    if($confirm != $password){
       echo '<script type="text/javascript">alert("your passwords dont match up");</script>';

    }
    while($row = mysqli_fetch_array($result))
      {
     	 if ($row['username'] == $username or $row['email'] == $email) {
          echo '<script type="text/javascript">alert("pick another username someone else has this one.");</script>';
          break;
     	 }
      }
	
  header("Location: loginexample.html");
	$sql = "INSERT INTO users (coach, school, email, username, password, confirm) VALUES ('$coach', '$school', '$email','$username','$password','$confirm')";
	if(!mysql_query($sql)){
		die('error!');
	}    

    mysqli_close($con);
?>