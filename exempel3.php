<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php

echo "utan filter " . $_GET["test"];
$test = $_GET["test"];
$test = htmlentities($test);
$test = addslashes($test);
echo "med filter: " . $test;

// indata filtrera
echo htmlentities($_GET["test"]);

echo $_GET["test"];

// utskrift escape
echo addslashes($_GET["slash"]);

// skicka urk?prop=val & prop=val för flera
echo "<pre>" . print_r($_GET,1) . "</pre>";

echo "<pre>" . print_r($_SERVER,1) . "</pre>";
?>

</body>
</html>