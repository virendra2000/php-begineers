<html>
<head>
<title>Welcome <?PHP echo $_POST['uname']; ?></title>
</head>
<body>
<table>
	<tr>
		<td>Your Name : </td>
		<td><?php echo $_POST['uname']; ?></td>
	</tr>
	<tr>
		<td>Your Password : </td>
		<td><?php $plaintext_password = $_POST['uname'];
		$hash = password_hash($plaintext_password,PASSWORD_DEFAULT);
		$verify = password_verify($plaintext_password, $hash);
		if ($verify) {
      			echo 'Password Verified!';
  		}
		else {
      			echo 'Incorrect Password!';
  		} ?></td>
	</tr>
	<tr>
		<td>Your Account type : </td>
		<td><?php echo $_POST['utype']; ?></td>
	</tr>
	<tr>
		<td>Agreement Accepted : </td>
		<td><?php 
			$termsAccepted = false;
			if(isset($_POST['c1'])){
    				$termsAccepted = true;
    				echo "Yes";
			}

?></td>
	</tr>
</table>
</body>
</html>