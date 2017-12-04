<?php

include('config.php');

include('config.php');


$name = $_GET['name'];
$team = $_GET['team'];
$position = $_GET['position'];

$sql = file_get_contents('SQL/addPlayers.sql');
$params = array(
	'team' => $team,
	'playername' => $name,
	'position' => $position
);
$statement = $database->prepare($sql);
$statement->execute($params);
$leagueNamesAssoc = $statement->fetchAll(PDO::FETCH_ASSOC);
//
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Teams</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body>
	<div class="page">
	

	<h2>Player Added</h2>

		
	<p>
		<a href="addPlayers.php">Add More Players</a><br>
		<a href="Main.php">Main Menu</a>
	</p>

	</div>
</body>
</html>