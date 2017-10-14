<?php 

function getQuotesByCategory($category_id){
		try
	{
  	$user = 'postgres';
  	$password = 'Flatirons11';
  	$db = new PDO('pgsql:host=127.0.0.1;dbname=quotes', $user, 	$password);
	}
	catch (PDOException $ex)
	{
  	echo 'Error!: ' . $ex->getMessage();
	die();
	}

	$stmt = $db->prepare('SELECT * FROM quote q JOIN author a ON q.authorid = a.author_id WHERE category_id=:category_id');
	$stmt->bindValue(':category_id', $category_id, PDO::PARAM_INT);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $rows;
}

function getQuotesByAuthor($author_id){
	try
	{
  	$user = 'postgres';
  	$password = 'Flatirons11';
  	$db = new PDO('pgsql:host=127.0.0.1;dbname=quotes', $user, 	$password);
	}
	catch (PDOException $ex)
	{
  	echo 'Error!: ' . $ex->getMessage();
	die();
	}
	$stmt = $db->prepare('SELECT * FROM quote q JOIN author a ON q.authorid = a.author_id WHERE authorid=:author_id');
	$stmt->bindValue(':author_id', $author_id, PDO::PARAM_INT);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $rows;
}

function getQuoteInfo($quoteId){
		try
	{
  	$user = 'postgres';
  	$password = 'Flatirons11';
  	$db = new PDO('pgsql:host=127.0.0.1;dbname=quotes', $user, 	$password);
	}
	catch (PDOException $ex)
	{
  	echo 'Error!: ' . $ex->getMessage();
	die();
	}
	$stmt = $db->prepare('SELECT * FROM quote q JOIN author a ON q.authorid = a.author_id JOIN category c ON q.category_id = c.category_id  WHERE quote_id=:quoteId');
	$stmt->bindValue(':quoteId', $quoteId, PDO::PARAM_INT);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $rows;
}

?>