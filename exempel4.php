<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="exempel4.php" method="POST">
	<input type="text" name="message">
	<input type="submit" name="submit">
	<input type="date" name="date"><br>
</form>
<?php
echo $_POST["message"];
echo $_POST["date"];
echo $_POST["submit"];
?>
</body>
</html>