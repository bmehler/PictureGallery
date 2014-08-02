<?php
/*
 * Generiert einen Benutzer
 */
function createUser($email, $password)
{
	$dbh = connectToDatabase();       
    
    try {
        $stmt = $dbh->prepare('INSERT INTO User (updated_at, email, password) VALUES (now(), :email, :password)');
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', md5($password));
        $stmt->execute();
    } catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}        
}