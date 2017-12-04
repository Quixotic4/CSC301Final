<?php

include('config.php');

$team = $_GET['teamname'];

$sql = file_get_contents('SQL/getTeamStats.sql');
$params = array(
	'teamname' => $team
);
$statement = $database->prepare($sql);
$statement->execute($params);
$teamNameAssoc = $statement->fetchAll(PDO::FETCH_ASSOC);
	
	
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
	
	<?php foreach($teamNameAssoc as $category): ?>
		<?php echo "Team Name: " . $category['teamname'];?><br>
		<?php echo "Position In League: " . $category['standing'];?><br>
		<?php echo "Games Won: " . $category['wins'];?><br>
		<?php echo "Games Tied: " . $category['draws'];?><br>
		<?php echo "Games Lost: " . $category['loses'];?><br>
	<?php endforeach; ?>
	
	
	
	<p>
		<a href="Main.php">Back</a>
	</p>

	</div>
</body>
</html>