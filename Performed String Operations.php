<html>
<head>
<title>Built in Functions of Strings</title>
</head>
<body>
<?php
   $str="Welcome to world of C Programming";
   echo " Your string is:".$str;
   echo "<br>";
   echo "By using str_word_count(): ".str_word_count($str);
   echo"<br>";
   echo "By using str_word_count() second example : <br>";
   print_r(str_word_count("$str",1));
   echo"<br>";
   echo "<br>By using strlen() : <br>";
   echo "Lenth of String : ".strlen($str);
   echo "<br><br>By using strrev() : <br>";
   echo "The Reverse of String :".strrev($str);
   echo "<br><br>Example of Strpos() : <br>";
   echo strpos($str,"C");
   echo "<br><br>The Replace Function of String : <br>";
   echo str_replace("C", "PHP", $str,$count);
   echo "<br>";
   echo "Number of replacement=".$count;
   echo "<br><br>Example of ucwords() : <br>";
   echo ucwords($str);
   echo "<br><br>Example of strtoupper() : <br>";
   echo strtoupper($str);
   echo "<br><br>Example of strtolower() : <br>";
   echo strtolower($str);
?>
</body>
</html>