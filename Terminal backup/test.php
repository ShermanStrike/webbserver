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
<div class="input-container">
	<div class="header">
	<p>ROBCO INDUSTRIES UNIFIED OPERATING SYSTEM</p>
	<p>COPYRIGHT 2075-2077 ROBCO INDUSTRIES</p>
	<p>-Server 6-</p>

	<p>===============================================</p>
	</div>
	<div class="input">

			<p>RobcOS v.14.10.08</p>
			<p>(C)2076 RobCo</p>
			<p>===============================================</p>
			<p> | Welcome User </p>
<form class="inputform" action="test.php" method="post">
	<label for="TITLE"><p>| >> Title: </p><span>|</span></label>
	<input class="inputfont" type="text" name="TITLE">
	<label for="MESSAGE"><p>| >> Message: </p><span>|</span></label>
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