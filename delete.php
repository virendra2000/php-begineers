<?php
session_start();
?>
<html>
<head>
<title></title>
</head>
<body>
<?php
$semail = $_POST['email'];
if(!empty('semail'))  {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$con=mysqli_connect($servername,$username,$password,$dbname);
	if(!$con) {
		die("Sorry we failed connect to database".mysqli_connect_error());
	}
	else {
		$sql = "DELETE FROM student WHERE Studemail ='$semail'";

		if(mysqli_query($con,$sql)) {
			echo "<h3>Record Deleted Successfully..</h3>";
		}
		else {
			echo "<h3>Could not insert record</h3>".mysqli_error($con);
		}
		mysqli_close($con);
	}
}
else {
	echo "All Field are required !";
	die();
}
session_destroy();
?>
</body>
</html>