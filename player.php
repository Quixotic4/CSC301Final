<?php

include('config.php');

$player = $_GET['specificPlayer'];

$sql = file_get_contents('SQL/getPlayer.sql');
$params = array(
	'player' => $player
);
$statement = $database->prepare($sql);
$statement->execute($params);
$playerNameAssoc = $statement->fetchAll(PDO::FETCH_ASSOC);
	
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
	
	<?php foreach($playerNameAssoc as $category): ?>
		<?php echo "Player Name: " . $category['playername'];?><br>
		<?php echo "Position: " . $category['position'];?><br>
		<?php echo "Goals Scored: " . $category['goalsscored'];?><br>
	<?php endforeach; ?>
	
	<p>
		<a href="Main.php">Back</a>
	</p>

	</div>
</body>
</html>