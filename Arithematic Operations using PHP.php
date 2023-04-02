<!DOCTYPE html>
<html>
<head>
	<title>Expressions & Operators</title>
</head>
<body>
<h1>Aithematic Operators</h1>
<?php
	$x=10;
	$y=20;
	echo "Addition is ",$x+$y,"<br>";
	echo "Subtraction is ",$y-$x,"<br>";
	echo "Multiplication is",$x*$y,"<br>";
	echo "Division is ",$y/$x,"<br>";
	echo "Modulas is",$x%$y,"<br><br>";
	echo "<h1>Assignment Operator</h1> <br>";
	$x = 20;
	$x += 100;
	echo "Adition Operator : ",$x,"<br>";
	$x = 50;
	$x -= 30;
	echo "Subtraction Operator : ",$x,"<br>";
	$x = 5;
	$x *= 6;
	echo "Multiplication Operator : ",$x,"<br>";
	$x = 10;
	$x /= 5;
	echo "Division Operator : ",$x,"<br>";
	$x = 15;
	$x %= 4;
	echo "Modulas Operator : ",$x,"<br><br>";
	echo "<h1>Comparison Operator</h1><br>";
	$x = 100;
	$y = "100";
	echo "Equality Operator : ";
	var_dump($x == $y);

	$x = 100;
	$y ="100";
	echo "<br>Identical Operator : ";
	var_dump($x=== $y);

	$x = 100;
	$y = "100";
	echo "<br>Not Equal Operator(!=) : ";
	var_dump($x!= $y);
	
	$x = 100;
	$y = "100";
	echo "<br>Not Equal Operator(<>) : ";
	var_dump($x<> $y);

	$x = 100;
	$y = "100";
	echo "<br>Not Identical Operator(!==) : ";
	var_dump($x!== $y);

	$x = 100;
	$y = 50;
	echo "<br>Greather than Operator : ";
	var_dump($x > $y);

	$x = 10;
	$y = 50;
	echo "<br>Less than operator : ";
	var_dump($x < $y);

	$x = 50;
	$y = 50;
	echo "<br>Greater than or Equal to Operator : ";
	var_dump($x >= $y);

	$x = 50;
	$y = 50;
	echo "<br>Less than or equal to operator : ";
	var_dump($x <= $y);

	$x = 5;
	$y = 10;
	echo "<br>Spaceship Operator : ";
	echo ($x <=> $y);

	echo "<br><br><h1>Increment / Decrement Operator</h1> <br>";
	$x = 10;
	echo "Pre-Increment Operator : ";
	echo ++$x;

	$x = 10;
	echo "<br>Post Increment Operator : ";
	echo $x++;

	$x = 10;
	echo "<br>Pre-decrement Operator : ";
	echo --$x;

	$x = 10;
	echo "<br>Post-decrement Operator : ";
	echo $x--;

	echo "<br><br><h1>String Operators</h1> <br>";
	$txt1 = "Hello";
	$txt2 = "world!";
	echo "Concatenation Operator : ";
	echo $txt1 . $txt2;

	$txt1 = "Hello";
	$txt2 = " world!";
	$txt1 .= $txt2;
	echo "<br>Concatenation Assignment Operator : ";
	echo $txt1;

	echo "<br><br><h1>Conditional Operators</h1> <br>";
	echo "Ternary Operator : <br>";
	// if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";


   echo "<br>Null coalescing : <br>";
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";


   echo "<br><br><h1>Logical Operators</h1> <br>";
   echo "and Operator Example : ";
   $x = 100;
   $y = 50;
	if ($x == 100 and $y == 50) {
		echo "Hello world!";
	}

	echo "<br>or Operator Example : ";
	$x = 100;
	$y = 50;
	if ($x == 100 or $y == 80) {
			echo "Hello world!";
		}

	echo "<br>XOR Operator : ";
	$x = 100;
	$y = 50;
	if ($x == 100 xor $y == 80) {
		echo "Hello world!";
	}

	echo "<br>&& Operator Example : ";
   	$x = 100;
   	$y = 50;
	if ($x == 100 && $y == 50) {
		echo "Hello world!";
	}

	echo "<br>|| Operator Example : ";
   	$x = 100;
   	$y = 50;
	if ($x == 100 || $y == 80) {
		echo "Hello world!";
	}

	echo "<br>Not (!) Operator Example : ";
   	$x = 100;
	if ($x !== 90) {
		echo "Hello world!";
	}

?>
</body>
</html>