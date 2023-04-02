<html>
<head>
<title>Welcome</title>
</head>
<body>
<table>
	<tr>
		<td>Your Selected Subject : </td>
		<td><?php
			if(isset($_POST["s1"])) {
        			if(isset($_POST["subj"])) {
            				foreach ($_POST['subj'] as $subject) 
                					print "$subject <br>";
        				}
    				else
        				echo "Select an option first !!";
    				}?></td>
	</tr>
	<tr>
		<td>Course Enrolled : </td>
		<td><?php echo $_POST['course']; ?></td>
	</tr>
	<tr>
		<td>User Id : </td>
		<td><?php echo $_POST['userid']; ?></td>
	</tr>
</table>
</body>
</html>