<html>
<head>
  <title>Parameterized Function</title>
</head>
<body>
  <?php
      function areaoftriangle($height,$base) {
        $area = ($base*$height) / 2;
        echo "Area of Triangle = ".$area;
      }
      areaoftriangle(25,35);
   ?>
</body>
</html>
