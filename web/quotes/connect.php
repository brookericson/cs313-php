<?php 

function get_db() {
	
	$db = NULL;
	try {
		$dbUrl = getenv('postgres://wycvaegorblkoc:b810f3abfd3a693457802f2a23c953de50aded69bee7e86861cbef9305d73cca@ec2-54-225-192-243.compute-1.amazonaws.com:5432/d5f7q74d40i4bq');
		if (!isset($dbUrl) || empty($dbUrl)) {
			$dbUrl = "postgres://postgres:Flatirons11@localhost:5432/quotes";
		}
		$dbopts = parse_url($dbUrl);
		$dbHost = $dbopts["host"];
		$dbPort = $dbopts["port"];
		$dbUser = $dbopts["user"];
		$dbPassword = $dbopts["pass"];
		$dbName = ltrim($dbopts["path"],'/');
		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch (PDOException $ex) {
		// If this were in production, you would not want to echo
		// the details of the exception.
		echo "Error connecting to DB. Details: $ex";
		die();
	}
	return $db;
}
