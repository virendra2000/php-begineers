<html>
<head>
<title></title>
<style>
* {
	background: linear-gradient(to right, #11998e, #38ef7d);
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>
</head>
<body>
<center>
<table id="customers">
	<tr>
    		<th>Student Name</th>
    		<th>Student Course</th>
    		<th>Gender</th>
		<th>Phone Number</th>
		<th>Address</th>
		<th>Email</th>
		<th>Password</th>
  	</tr>
  	<tr>
    		<td><?php echo $_POST['sname']; ?></td>
    		<td><?php echo $_POST['course']; ?></td>
    		<td><?php echo $_POST['gender']; ?></td>
		<td><?php echo $_POST['phone']; ?></td>
		<td><?php echo $_POST['saddress']; ?></td>
		<td><?php echo $_POST['email']; ?></td>
		<td><?php $plaintext_password = $_POST['pass'];
		$hash = password_hash($plaintext_password,PASSWORD_DEFAULT);
		$verify = password_verify($plaintext_password, $hash);
		if ($verify) {
      			echo '<p style="color:green;font-family:bold">Password Verified!</p>';
  		}
		else {
      			echo '<p style="color:red;font-family:bold">Incorrect Password!</p>';
  		} ?></td>
  	</tr>
  
</table>
</center>


<?php
session_start();

$sname = $_POST['sname'];
$scourse = $_POST['course'];
$sgender = $_POST['gender'];
$sphone = $_POST['phone'];
$address = $_POST['saddress'];
$semail = $_POST['email'];
$pwd = $_POST['pass'];
$pwd = md5($pwd);

if(!empty('sname') ||  !empty('scourse') || !empty('sgender') || !empty('sphone') || !empty('saddress') || !empty('email') || !empty('pwd'))  {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$con=mysqli_connect($servername,$username,$password,$dbname);
	if(!$con) {
		die("Sorry we failed connect to database".mysqli_connect_error());
	}
	else {
		$insert = "INSERT INTO student (Studname,Studcourse,Studgender,Studphone,Studaddress,Studemail,Studpass) VALUES('$sname','$scourse','$sgender','$sphone','$address','$semail','$pwd')";

		if(mysqli_query($con,$insert)) {
			echo "<h3>Record inserted Successfully..</h3>";
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
