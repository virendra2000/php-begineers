<?php
	$to_email = $_POST['email'];
	$subject = $_POST['subj'];
	$message = $_POST['msg'];
	mail($to_email, $subject, $message);
	echo "This email is sent using PHP Mail";
?>