<?php

include('config.php');
$team = $_GET['team'];

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

	<h2>Player Name</h2>
		<form action="playerAdded.php">
		<div class="form-element">
			<input type="text" name="team" value="<?php echo $team?>"><br>
			<input type="text" name="name" placeholder="Player..." /><br>
			<input type="radio" name="position" value="Forward">Forward<br>
			<input type="radio" name="position" value="MidFielder">Mid-Fielder<br>
			<input type="radio" name="position" value="Defender">Defender<br>
			<input type="submit" class="button" />
		</div>
		</form>
		
		
	<p>
		<a href="Main.php">Back</a>
	</p>

	</div>
</body>
</html>