<?php 

function getQuotesByCategory($category_id){
	$db = get_db();
	$stmt = $db->prepare('SELECT * FROM quote q JOIN author a ON q.authorid = a.author_id WHERE category_id=:category_id');
	$stmt->bindValue(':category_id', $category_id, PDO::PARAM_INT);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $rows;
}

function getQuotesByAuthor($author_id){
	$db = get_db();
	$stmt = $db->prepare('SELECT * FROM quote q JOIN author a ON q.authorid = a.author_id WHERE authorid=:author_id');
	$stmt->bindValue(':author_id', $author_id, PDO::PARAM_INT);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $rows;
}

function getQuoteInfo($quote_id){
	$db = get_db();
	$stmt = $db->prepare('SELECT * FROM quote q JOIN author a ON q.authorid = a.author_id JOIN category c ON q.category_id = c.category_id  WHERE quote_id=:quote_id');
	$stmt->bindValue(':quote_id', $quote_id, PDO::PARAM_INT);
	$stmt->execute();
	$rows = $stmt->fetch(PDO::FETCH_ASSOC);
	return $rows;
}

function checkPassword($password){
    $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])[[:print:]]{8,}$/';
    return preg_match($pattern, $password);    
}

function getUserData($email){
	$db = get_db();
	$stmt = $db->prepare('SELECT * FROM public.user WHERE email=:email');
	$stmt->bindValue(':email', $email, PDO::PARAM_STR);
	$stmt->execute();
	$rows = $stmt->fetch(PDO::FETCH_ASSOC);
	return $rows;
}

function getAuthorInfo($author_id){
	$db = get_db();
	$stmt = $db->prepare('SELECT * FROM author WHERE author_id=:author_id');
	$stmt->bindValue(':author_id', $author_id, PDO::PARAM_INT);
	$stmt->execute();
	$rows = $stmt->fetch(PDO::FETCH_ASSOC);
	return $rows;
}

function getCategoryInfo($category_id){
	$db = get_db();
	$stmt = $db->prepare('SELECT * FROM category WHERE category_id=:category_id');
	$stmt->bindValue(':category_id', $category_id, PDO::PARAM_INT);
	$stmt->execute();
	$rows = $stmt->fetch(PDO::FETCH_ASSOC);
	return $rows;
}

function insertUserData($username, $email, $password, $type){
	$db = get_db();
	$stmt = $db->prepare('INSERT INTO public.user (user_name, email, password, type) VALUES (:username, :email, :password, :type)');
	$stmt->bindValue(':email', $email, PDO::PARAM_STR);
	$stmt->bindValue(':username', $username, PDO::PARAM_STR);
	$stmt->bindValue(':password', $password, PDO::PARAM_STR);
	$stmt->bindValue(':type', $type, PDO::PARAM_STR);
	$stmt->execute();
	$rowsChanged = $stmt->rowCount();
	$stmt->closeCursor();
    return $rowsChanged;
}

function insertNewCategory($category_name) {
	$db = get_db();
	$stmt = $db->prepare('INSERT INTO category (category_name) VALUES (:category_name)');
	$stmt->bindValue(':category_name', $category_name, PDO::PARAM_STR);
	$stmt->execute();
	$rowsChanged = $stmt->rowCount();
	$stmt->closeCursor();
    return $rowsChanged;
}

function insertNewQuote($category_id, $authorid, $quote) {
	$db = get_db();
	$stmt = $db->prepare('INSERT INTO quote (category_id, authorid, quote) VALUES (:category_id, :authorid, :quote)');
	$stmt->bindValue(':category_id', $category_id, PDO::PARAM_INT);
	$stmt->bindValue(':authorid', $authorid, PDO::PARAM_INT);
	$stmt->bindValue(':quote', $quote, PDO::PARAM_STR);
	$stmt->execute();
	$rowsChanged = $stmt->rowCount();
	$stmt->closeCursor();
    return $rowsChanged;
}

function insertNewAuthor($name){
	$db = get_db();
	$stmt = $db->prepare('INSERT INTO author (name) VALUES (:name)');
	$stmt->bindValue(':name', $name, PDO::PARAM_STR);
	$stmt->execute();
	$rowsChanged = $stmt->rowCount();
	$stmt->closeCursor();
    return $rowsChanged;
}

function deleteCategory($category_id) {
	$db = get_db();
	$stmt = $db->prepare('DELETE FROM category WHERE category_id=:category_id');
	$stmt->bindValue(':category_id', $category_id, PDO::PARAM_INT);
	$stmt->execute();
	$rowsChanged = $stmt->rowCount();
	$stmt->closeCursor();
    return $rowsChanged;
}

function deleteAuthor($author_id){			
	$db = get_db();
	$stmt = $db->prepare('DELETE FROM author WHERE author_id=:author_id');
	$stmt->bindValue(':author_id', $author_id, PDO::PARAM_INT);
	$stmt->execute();
	$rowsChanged = $stmt->rowCount();
	$stmt->closeCursor();
    return $rowsChanged;
}

function deleteQuote($quote_id){
	$db = get_db();
	$stmt = $db->prepare('DELETE FROM quote WHERE quote_id=:quote_id');
	$stmt->bindValue(':quote_id', $quote_id, PDO::PARAM_INT);
	$stmt->execute();
	$rowsChanged = $stmt->rowCount();
	$stmt->closeCursor();
    return $rowsChanged;
}

function updateQuote($quote_id, $category_id, $authorid, $quote){
	$db = get_db();
	$stmt = $db->prepare('UPDATE quote SET category_id = :category_id, authorid = :authorid, quote = :quote WHERE quote_id=:quote_id');
	$stmt->bindValue(':quote_id', $quote_id, PDO::PARAM_INT);
	$stmt->bindValue(':category_id', $category_id, PDO::PARAM_INT);
	$stmt->bindValue(':authorid', $authorid, PDO::PARAM_INT);
	$stmt->bindValue(':quote', $quote, PDO::PARAM_STR);
	$stmt->execute();
	$rowsChanged = $stmt->rowCount();
	$stmt->closeCursor();
    return $rowsChanged;	
}

function updateAuthor($author_id, $name){
	$db = get_db();
	$stmt = $db->prepare('UPDATE author SET name = :name WHERE author_id=:author_id');
	$stmt->bindValue(':author_id', $author_id, PDO::PARAM_INT);
	$stmt->bindValue(':name', $name, PDO::PARAM_STR);
	$stmt->execute();
	$rowsChanged = $stmt->rowCount();
	$stmt->closeCursor();
    return $rowsChanged;	
}

function updateCategory($category_id, $category_name){
	$db = get_db();
	$stmt = $db->prepare('UPDATE category SET category_name = :category_name WHERE category_id=:category_id');
	$stmt->bindValue(':category_id', $category_id, PDO::PARAM_INT);
	$stmt->bindValue(':category_name', $category_name, PDO::PARAM_STR);
	$stmt->execute();
	$rowsChanged = $stmt->rowCount();
	$stmt->closeCursor();
    return $rowsChanged;	
}
?>