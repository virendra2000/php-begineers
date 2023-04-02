<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota","Mahindra","Tata Motors","Hyundai","Maruti Suzuki","KIA","Audi","Ferrari","Fiat","Ford","Honda","Jaguar","Lamborghini","Nissan","Renault","Tesla");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>

</body>
</html>