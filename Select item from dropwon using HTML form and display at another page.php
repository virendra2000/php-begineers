<html>
<head>
<title>Personal Data</title>
</head>
<body>
<h1>Personal Details</h1><br>
<form name="f1" action="second page.php" method="post">
	<label>Select Subject : </label><br><br>
	<select id="subject" name="subj[]" multiple>
  		<option value="PHP">PHP</option>
  		<option value="Python">Python</option>
  		<option value="Java">Java</option>
  		<option value="Ruby">Ruby</option>
	</select><br><br>
	<label>Select Course</label><br>
	<select id="course" name="course">
  		<option value="Computer Engineering">Computer Engineering</option>
  		<option value="Mechanical Engineering">Mechanical Engineering</option>
  		<option value="Chemical Engineering">Chemical Engineering</option>
  		<option value="Civil Engineering">Civil Engineering</option>
	</select><br><br>
	
	<input type="hidden" id="user" name="userid" value="3487"><br><br>
	<input type="submit" name="s1" value="Submit">
</form>
</body>
</html>