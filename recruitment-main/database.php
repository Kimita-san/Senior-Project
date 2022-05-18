
<?php
//this is the file that connects to the database
	//set param for pdo data obj
	$dsn='mysql:host=localhost;dbname=recruitment';
	$dbservername='localhost';
	$username='mgs_user';
	$password='pa55word';
	$dbname='recruitment';

	//pdo data obj within a try catch block
	try{
		$db = new PDO ($dsn, $username, $password);
	}catch (PDOException $e) {
		$error_message = $e->getMessage();
		include ('database_error.php');
		exit();
	}

?>
