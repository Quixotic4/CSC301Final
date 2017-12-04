<?php
/*
// Create and include a configuration file with the database connection
include('config.php');

// Include functions for application
include('functions.php');

// Get type of form either add or edit from the URL (ex. form.php?action=add) using the newly written get function
/*if ($_SERVER['REQUEST_METHOD'] == 'GET'){
	$league = $_GET['league'];
}

//Get the book isbn from the URL if it exists using the newly written get function
//$league = get('league');

header('location: indexFinal.php');
*/

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
		<h1>Teams</h1>
		<!--
		<form action="" method="GET">		
		<div class="form-element">
				<label>League:</label>
				<input type="text" name="league" class="textbox" />
				<input type="submit" class="button" />
		</div>
		-->
		
		
		<form action="indexFinal.php">
		<div class="form-element">
			<input type="text" name="league" placeholder="League..." />
			<input type="submit" class="button" />
		</div>
		</form>
		
		<!--</form>-->
	</div>
</body>
</html>