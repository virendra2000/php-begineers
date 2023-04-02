<?php
session_start();
?>
<html>
<head>
<title>Updated Data Successfully</title>
</head>
<body>
<?php
$sid = $_POST['id'];
$semail = $_POST['email'];
$password = $_POST['pass'];
$pwd = md5($password);
if(!empty('sid') || !empty('semail') || !empty('pwd'))  {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$con=mysqli_connect($servername,$username,$password,$dbname);
	if(!$con) {
		die("Sorry we failed connect to database".mysqli_connect_error());
	}
	else {
		$sql = "UPDATE student SET Studemail='$semail',Studpass='$pwd' WHERE Id='$sid'";

		if(mysqli_query($con,$sql)) {
			echo "<h3>Record Updated Successfully..</h3>";
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