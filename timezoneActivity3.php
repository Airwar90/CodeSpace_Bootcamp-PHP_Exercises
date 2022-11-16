<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<?php
date_default_timezone_set("Europe/London");
$name = "Marta";
echo(greetingDate()."<br>");



function greetingDate() {
	return date("D dS M");
}

function greetNameDate($name) {
	
}


 
?>
</body>
</html>