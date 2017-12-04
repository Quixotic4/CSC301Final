<?php

include('config.php');

$team = $_GET['players'];

$sql = file_get_contents('SQL/getPlayers.sql');
$params = array(
	'team' => $team
);
$statement = $database->prepare($sql);
$statement->execute($params);
$playersNamesAssoc = $statement->fetchAll(PDO::FETCH_ASSOC);
	

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
  	<title>Players</title>
	<meta name="description" content="The HTML5 Herald">
	<meta name="author" content="SitePoint">

	<link rel="stylesheet" href="css/style.css">

	<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->
</head>
<body>
	<div class="page">
	
	<h2>Players</h2>
	<?php foreach($playersNamesAssoc as $category): ?>
		<a href="player.php?specificPlayer=<?php echo $category['playername'] ?>"><?php echo $category['playername'];?></a>
	<?php endforeach; ?>
	
	
	
	<p>
		<a href="Main.php">Back</a>
	</p>

	</div>
</body>
</html>