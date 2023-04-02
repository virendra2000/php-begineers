<html>
<head>
<title>Str_word_count()</title>
</head>
<body>
<?php
   $str=" Welcome to world of PHP Programming ";
$wordcount = 0;
for($i=0;$i < strlen($str);$i++){
if($str[$i]!=' '){
$wordcount++;
while($str[$i]!=' '){
$i++;
}
}
}
echo "<b>Total word count is".' '. $wordcount."</b>";
?>
</body>