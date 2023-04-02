<html>
<head>
  <title>Simple Function</title>
</head>
<body>
  <?php
      function add() {
        $a=10;$b=20;$c=0;
        echo "Value of A is ".$a;
        echo "<br> Value of A is ".$a;
        $c = $a + $b;
         echo "<br> Addition = ".$c;
      }
      function sub() {
        $a=10;$b=20;$c=0;
        $c = $a - $b;
         echo "<br> Subtraction = ".$c;
      }
      function mul() {
        $a=10;$b=20;$c=0;
        $c = $a * $b;
         echo "<br> Multiplication = ".$c;
      }
      function div() {
        $a=10;$b=20;$c=0;
        $c = $a / $b;
         echo "<br> Division = ".$c;
      }
      function modulas() {
        $a=10;$b=20;$c=0;
        $c = $a % $b;
         echo "<br> Modulas Value = ".$c;
      }
      add();
      sub();
      mul();
      div();
      modulas();

   ?>
</body>
</html>
