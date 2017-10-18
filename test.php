<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Atomic+Age" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sancreek" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Smokum" rel="stylesheet">

	<title></title>
		<link rel="stylesheet" href="style.css">
</head>
<body>
<main>
<div class="header">
	<img class="logo" src="Vault.png">
	</div>
<form action="test.php" method="post">
	title:
	<input type="text" name="title"><br>
	message:
	<input type="text" name="message"><br>
	<input type="submit" name="submit">
</form>

<?php

//$dbh = new PDO("mysql:host=localhost;dbname=blog;charset=utf8",
//	"root",
//	"");

//$sql = "select * from posts";

//$stmt = $dbh->prepare($sql);
//$stmt->execute();

$dbh = new PDO("mysql:host=localhost;dbname=blog;charset=utf8",
	"root",
	"");

if (isset($_POST['submit'])) {
	$sql = "insert into posts( title, content)
	values ( ' " . $_POST['title'] . "', '" . $_POST['message'] . "')";
$stmt = $dbh->prepare($sql);
$stmt->execute();

}


$sql = "select * from posts";

$stmt = $dbh->prepare($sql);
$stmt->execute();


while ($row = $stmt->fetch()){
	//echo "<pre>" . print_r($row,1) . "</pre>";
	//echo "<p>" . $row["title"] . " " . $row["content"] . "</p>";
			echo "<div class=\"home-container\">";
        echo "<h1 class=\"home-title\">" . $row["title"] . "</h1>";
        	echo "<div class=\"home-info-container\">";
        		
        		echo "<p class=\"home-info\">" . $row["content"] . "</p>";
        	echo "</div>";
      	echo "</div>";
		}
?>
</main>
</body>
</html>