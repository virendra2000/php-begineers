<html>
<head>
<title>Armstrong Number</title>
</head>
<body>
<?php
	$n=153;
	$total=0;
	$num=$n;
	$rem=0;
	while($num!=0) {
		$rem=$num%10;
		$total=$total+$rem*$rem*$rem;
		$num=$num/10;	
	}
	if($n==$total) {
		echo "Number is Armstrong";
	}
	else {
		echo "Number is Not Armstrong";
	}
?>
</body>
</html>