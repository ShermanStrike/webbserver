<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<title>php example</title>
</head>
<body>

<form action="exempel2.php" method="post">
	<input type="text" name="date">
	<input type="submit">
</form>

<?php
	if(isset($_POST["date"]))
	echo $_POST["date"];

	//$date = date("ymd D W M", strtotime($_POST["date"]));

	$now = date("ymd", time());

	$diff = strtotime($now) - strtotime($_POST["date"]);

	echo "<h1>". floor($diff / 86400). "</h1>";
?>

</body>