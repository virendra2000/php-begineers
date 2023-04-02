<?php
$cookie_name = "email";
$cookie_value = $_POST['email'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "<br>Value is: " . $_COOKIE[$cookie_name];
}
?>