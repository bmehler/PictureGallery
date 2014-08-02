<?php
/*
 * Überprüft die Benutzerdaten und gibt die Spalte 4 - Email - aus
 */
function findUser($email, $password)
{
	$dbh = connectToDatabase();

	try {
		$stmt = $dbh->prepare("SELECT * FROM User WHERE email = :email AND password = :password LIMIT 1");
		$stmt->bindParam(':email', $email, PDO::PARAM_STR);
		$stmt->bindParam(':password', md5($password), PDO::PARAM_INT);
		$stmt->execute();
        $result = $stmt->fetchColumn(4);		
		return $result;
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
}

/*
 * Überprüft ob die Emailadresse schon registriert ist
 */
function findUserByEmail($email)
{
	$dbh = connectToDatabase();

	try {
		$stmt = $dbh->prepare("SELECT * FROM User WHERE email = :email LIMIT 1");
		$stmt->bindParam(':email', $email, PDO::PARAM_STR);		
		$stmt->execute();
        $result = $stmt->fetchColumn(4);		
		return $result;
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
}