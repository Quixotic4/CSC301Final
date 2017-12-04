<?php

include('config.php');

$editorID= $_SESSION['editorID'];

$sql = file_get_contents('sql/getEditor.sql');
	$params = array(
		'editorid' => $editorID
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$editors = $statement->fetchAll(PDO::FETCH_ASSOC);
	
	$editor = $editors[0];




?>




<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title></title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body>
	<div class="page">
		<h1>What do you want to see</h1>
		
		<h2>Teams in League</h2>
		<form action="League.php">
		<div class="form-element">
			<input type="text" name="league" placeholder="League..." />
			<input type="submit" class="button" />
		</div>
		</form>
		
		
		<h2>Players on Team</h2>
		<form action="players.php">
		<div class="form-element">
			<input type="text" name="players" placeholder="team..." />
			<input type="submit" class="button" />
		</div>
		</form>
		
		
		<h2>Player Stats</h2>
		<form action="player.php">
		<div class="form-element">
			<input type="text" name="specificPlayer" placeholder="SpecificPlayer..." />
			<input type="submit" class="button" />
		</div>
		</form>
		
		<h2>Team Stats</h2>
		<form action="team.php">
		<div class="form-element">
			<input type="text" name="teamname" placeholder="Enter Team Name..." />
			<input type="submit" class="button" />
		</div>
		</form>
		
		<h2>Add A Team</h2>
		<form action="addTeam.php">
		<div class="form-element">
			<input type="text" name="teamname" placeholder="team Name..." /><br>
			<input type="text" name="league" placeholder="League..." /><br>
			<input type="text" name="Position" placeholder="Standing... "/><br>
			<input type="submit" class="button" />
		</div>
		</form>
		
		
		
		
		<p><a href="logout.php">Log Out</a></p>
	</div>
</body>
</html>