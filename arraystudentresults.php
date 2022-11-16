<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<?php
$studentResults = array(
	'Aaron' => array ('Physics' => 74,'English'=> 69,'Maths' => 70),
	'Jamie' => array ('Physics' => 64,'English'=> 79,'Maths' => 69),
	'Harry' => array ('Physics' => 55,'English'=> 62,'Maths' => 70)	
);

	
echo "Student result for Aaron: <br>";
echo "Physics:".$studentResults['Aaron']['Physics']."<br>";
echo "English:".$studentResults['Aaron']['English']."<br>";
echo "Maths:". $studentResults['Aaron']['Maths']."<br><br>";
echo "Student result for Jamie: <br>";
echo "Physics:". $studentResults['Jamie']['Physics']."<br>";
echo "English:". $studentResults['Jamie']['English'] ."<br>";
echo "Maths:". $studentResults['Jamie']['Maths'] ."<br><br>";
echo "Student result for Harry: <br>";
echo "Physics:". $studentResults['Harry']['Physics']."<br>";
echo "English:". $studentResults['Harry']['English'] ."<br>";
echo "Maths:". $studentResults['Harry']['Maths'] ."<br><br>";
	
?>
</body>
</html>