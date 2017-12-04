<?php

$user = 'brockn3';
$password = 'dRoe5iuQ';

$database = new PDO('mysql:host=csweb.hh.nku.edu;dbname=db_fall17_brockn3', $user, $password);

session_start();

$current_url = basename($_SERVER['REQUEST_URI']);

if(isset($_SESSION['editorID']) == FALSE && $current_url != 'login.php'){
		header('location: login.php');

		
}else if(isset($_SESSION['editorId'])){
	$sql = file_get_contents('sql/getEditor.sql');
	$params = array(
		'editorid' => $_SESSION['editorID']
	);
	$statement = $database->prepare($sql);
	$statement->execute($params);
	$editor = $statement->fetchAll(PDO::FETCH_ASSOC);
}


/*
function my_autoloader($class) {
    include 'Classes/class.' . $class . '.php';
}

spl_autoload_register('my_autoloader');
*/