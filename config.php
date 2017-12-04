<?php

// Connecting to the MySQL database
$user = 'brockn3';
$password = 'dRoe5iuQ';

$database = new PDO('mysql:host=csweb.hh.nku.edu;dbname=db_fall17_brockn3', $user, $password);


session_start();

$current_url = basename($_SERVER['REQUEST_URI']);

// if customerID is not set in the session and current URL not login.php redirect to login page
if (!isset($_SESSION["editorID"]) && $current_url == 'addTeam.php') {
    header("Location: login.php");
}

// Else if session key customerID is set get $customer from the database
/*elseif (isset($_SESSION["editorID"])) {
	
	$sql = file_get_contents('sql/getCustomer.sql');
	$params = array(
		'editorid' => $_SESSION["editorID"]
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$customers = $statement->fetchAll(PDO::FETCH_ASSOC);
	
	/*
	$editor = $editor[0];
	
	$editor = new Editor($_SESSION["customerID"], $database);
	
}

function my_autoloader($class) {
    include 'Classes/class.' . $class . '.php';
}

spl_autoload_register('my_autoloader');
*/