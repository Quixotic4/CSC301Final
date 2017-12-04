<?php
include('config.php');

function searchBooks($term, $database) {
	// Return a list of books based upon the search term from the database
	
		$sql = file_get_contents('sql/databaseSearchBooks.sql');
		$params = array(
			'term' => $term
		);	
		$statement = $database->prepare($sql);
		$statement->execute($params);
		$books = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $books;
		
	/*
	$query = "SELECT * FROM books WHERE isbn LIKE ".$term. "% OR title LIKE ".$term."%";
	$result = $database->query($query);
	$item = $result->fetch_object();
	return "Title: ". $item->title. " Price: " . $item->price;
	*/	
}


function get($key) {
	if(isset($_GET[$key])) {
		return $_GET[$key];
	}
	
	else {
		return '';
	}
}

?>