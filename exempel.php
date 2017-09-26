<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="utf-8">
	<title>php example</title>
</head>
<body>
	<?php
	echo "<h1> Hello there people of the internet!</h1>";

	$birthday = "19990824";

	$date = date("ymd D W M", strtotime($birthday));

	$now = date("ymd", time());

	$diff = strtotime($now) - strtotime($birthday);

	echo "<h1>". floor($diff / 86400). "</h1>";
	?>
</body>