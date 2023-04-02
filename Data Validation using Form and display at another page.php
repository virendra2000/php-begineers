<html>
<head>
<title>Sending HTML email using PHP</title>
<style>
	.error { color: #ff0000; }
</style>
</head>
<body>
<?php
	//define variables and set to empty values
	$nameErr = $emailErr = $genderErr = "";
	$name = "";
	$email = "";
	$gender = "";
	if($_SERVER["REQUEST_METHOD"]=="POST") {
		if(empty($_POST["name"])) {
			$nameErr = " Name is Required";
		}
		else {
			$name = test_input($_POST["name"]);
			if(!preg_match("/^[a-zA-Z]*$/",$name)) {
				$nameErr = "Only letters and whitespaces allowed";
			}
		}
	
		if(empty($_POST["email"])) {
			$emailErr = "Email is required";
		}
		else {
 			$email = test_input($_POST["email"]);
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Invalid Format";
			}
		}

		if(empty($_POST["gender"])) {
			$genderErr = "Gender is Required";
		}
		else {
 			$email = test_input($_POST["gender"]);
		}
	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="Error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name : <input type="text" name="name">
	<span class="error">* <?php echo $nameErr;?></span>
	<br><br>

	E-mail: <input type="text" name="email">
	<span class="error">* <?php echo $emailErr;?></span>
	<br><br>

	Gender :
	<input type="radio" name="gender" value="male">Male
	<input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="other">Other
	<span class="error">* <?php echo $genderErr;?></span>
	<br><br>
	<input type="submit" name="submit" value="submit">
</form>
<?php
	echo "<h2>Your Input : </h2>";
	echo $name;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $gender;
?>
</body>
</html>