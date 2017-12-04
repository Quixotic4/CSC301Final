<?php

include('config.php');

$league = $_GET['league'];

$team = null;

$teams = array();


$sql = file_get_contents('SQL/getTeam.sql');
$params = array(
	'league' => $league
);
$statement = $database->prepare($sql);
$statement->execute($params);
$leagueNamesAssoc = $statement->fetchAll(PDO::FETCH_ASSOC);
	
foreach($leagueNamesAssoc as $category) {
	$teams[] = $category['teamname'];
}


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
	
	<?php foreach($teams as $category): ?>
		<?php echo $category; ?><br>
	<?php endforeach; ?>
	
	<p>
		<a href="Main.php">Back</a>
	</p>

	</div>
</body>
</html>