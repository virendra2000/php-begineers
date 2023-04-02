<?php
$cookie_name = "email";
$cookie_value = $_POST['email'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

$plaintext_password = $_POST['pass'];
$hash = password_hash($plaintext_password,PASSWORD_DEFAULT);
$verify = password_verify($plaintext_password, $hash);
if ($verify) {
	echo 'Password Verified!';
}
else {
      	echo 'Incorrect Password!';
  }

$_SESSION["username"] = $_POST['email'];
$_SESSION["password"] = $hash;
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "<br>Value is: " . $_COOKIE[$cookie_name];
}

echo "<br>Session Username :  " . $_SESSION["username"] . ".<br>";
echo "Session Password :  " . $_SESSION["password"] . ".";
echo "<br><br>Note : Password is in encrypted form";
?>