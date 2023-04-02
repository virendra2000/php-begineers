<?php
	$nameErr = "";
	$emailErr = "";
	$genderErr = "";
	$websiteErr = "";
	$name = $email = $gender = $comment = $website = "";
	if($_SERVER["REQUEST_METHOD"]=="POST") {
		if(empty($_POST["name"])) {
			$nameErr = " Name is Required";
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
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid Format";
			}
		}

		if(empty($_POST["website"]) {
			$website="";
		else {
			$website = "test_input($_POST["website"]);
			if((!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
				$websiteErr = "Invalid URL";
			}
		}

		if(empty($_POST["comment"])) {
			$comment = "";
		}
		else {
 			$email = test_input($_POST["comment"]);
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