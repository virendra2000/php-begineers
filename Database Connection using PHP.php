<html>
<head>
<title>Database Coonection</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con) {
	die("Sorry we failed connect to database".mysqli_connect_error());
}
else {
	echo "Connected to Database Sucessfully";
}
?>
</body>
</html>