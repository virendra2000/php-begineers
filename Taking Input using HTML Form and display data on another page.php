<html>
<head>
<title>Login</title>
</head>
<body>
<form name="f1" action="welcome.php" method="post">
	<label>Username : </label><br>
	<input type="text" name="uname" id="username"><br>
	<label>Password : </label><br>
	<input type="password" name="pass" id="password"><br>
	<label>Select Account Type : </label><br>
	<select name="utype">
		<option value="Admin">Admin</option>
		<option value="User">User</option>
	</select><br>
	<input type="checkbox" name="c1" id="agreement">I Agree to the terms and Conditions<br>
	<input type="submit" name="s1" value="Submit">
</body>
<html>