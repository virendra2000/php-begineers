<!DOCTYPE html>
<html>
<head>
<title>Student Detail</title>
</head>
<body>
<?php
$stddetail = array("Ajay"=>"90", "Amar"=>"85", "John"=>"89");
foreach($stddetail as $std_name => $std_marks) {
  echo "Student Name =" . $std_name . ", Marks =" . $std_marks;
  echo "<br>";
}
?>
</body>
</html>