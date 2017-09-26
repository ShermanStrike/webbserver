<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	include_once("data.php");

	foreach ($data as $key => $value) {
		echo "<div class=\"home-container\">";
        echo "<h1 class=\"home-title\">" . $value["title"] . "</h1>";
        	echo "<div class=\"home-info-container\">";
        		echo "<h2 class=\"home-info\">" . $value["author"] . "</h2>";
        		echo "<p class=\"home-info\">" . $value["message"] . "</p>";
        	echo "</div>";
      	echo "</div>";
	}
?>
</body>
</html>