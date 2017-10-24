<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Atomic+Age" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Sancreek" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Smokum" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:700" rel="stylesheet">

	<title></title>
		<link rel="stylesheet" href="style.css">
</head>
<body>
<main>
<div class="header">
	<img class="logo" src="Vault.png">
	</div>
<div class="input-container">
	<p>-RobCo Vault Management System-</p>
	<p>===============================================</p>
	<div class="input">
			<p>RobcOS v.14.10.08</p>
			<p>(C)2076 RobCo</p>
			<p>===============================================</p>
			<p> | Welcome User </p>
<form action="test.php" method="post">
	<label for="TITLE">| >> Title: </label>
	<input class="inputfont" type="text" name="TITLE"><br>
	<label for="MESSAGE">| >> Message: </label>
	<input class="inputfont" type="text" name="MESSAGE"><br>
	<label for="submit">| </label>
	<input class="submitfont" type="submit" name="submit" value="SEND_info">
</form>
	<p>===============================================</p>
	</div>
</div>
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