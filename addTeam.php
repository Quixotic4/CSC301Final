<?php

include('config.php');
//

$league = $_GET['league'];
$team = $_GET['teamname'];
$standing = $_GET['Position'];

$sql = file_get_contents('SQL/addTeam.sql');
$params = array(
	'team' => $team,
	'league' => $league,
	'rank' => $standing
);
$statement = $database->prepare($sql);
$statement->execute($params);
$leagueNamesAssoc = $statement->fetchAll(PDO::FETCH_ASSOC);

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
	<h2>Team Added</h2>
	<?php echo $team;?><br>
	
	<a href="addPlayer.php?team=<?php echo $team ?>">Add Players</a>
	
	<p>
		<a href="Main.php">Back</a>
	</p>

	</div>
</body>
</html>