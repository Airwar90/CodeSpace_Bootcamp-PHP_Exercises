<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<?php
$a = 867;
$b = 908;

$isEqual = ($a == $b) ? "true":"false";
$isInequal = ($a != $b) ? "true" : "false";
$isGreater = ($a > $b) ? "true" : "false";
$isLess = ($a < $b) ? "true" : "false";

echo "is \$a: $a equal to \$b: $b? ".$isEqual; 
echo "<br>";
echo "is \$a: $a inequal to \$b: $b? ".$isInequal; 
echo "<br>";
echo "is \$a: $a grater than \$b: $b? ".$isGreater; 
echo "<br>";
echo "is \$a: $a less than \$b: $b? ".$isLess; 
echo "<br>";


?>
</body>
</html>