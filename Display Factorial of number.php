<html>
<head>
<title>Factorial of Number</title>
</head>
<body>
<?php
$n = 6;
$x = 1;
for($i=1;$i<=$n-1;$i++)
{
 $x*=($i+1); 
}
echo "The factorial of  $n = $x"."\n";
?>
</body>
</html>