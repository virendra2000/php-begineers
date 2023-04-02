<html>
<head>
<title></title>
</head>
<body>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$con=mysqli_connect($servername,$username,$password,$dbname);
	if(!$con) {
		die("Sorry we failed connect to database".mysqli_connect_error());
	}
	else {
		$semail = $_POST['email'];
		echo "Connected to database is successfully maintained<br>";
		$sql = "SELECT * FROM student WHERE Studemail = '$semail'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				echo "STUDENT ID : " . $row["Id"]. "<br>STUDENT NAME : " . $row["Studname"]. "<br>COURSE ENROLLED : " . $row["Studcourse"]. "<br>GENDER : ". $row["Studgender"]."<br>PHONE NUMBER : ". $row["Studphone"]."<br>STUDENT ADDRESS : ". $row["Studaddress"]."<br>STUDENT EMAIL : ". $row["Studemail"]."<br>STUDENT PASSWORD : ". $row["Studpass"]."<br>";
				echo "<br>------------------------------------------------------------------------------------------";
		 	}
		}
		else {
			echo "0 results";
		}
		mysqli_close($con);
	}
?>
</body>
</html>