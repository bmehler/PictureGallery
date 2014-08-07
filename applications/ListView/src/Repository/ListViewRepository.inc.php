<?php
/*
 * Gibt eine Bilderübersicht aus
 */
function findAllPictures()
{
	$dbh = connectToDatabase();

	try {
		$stmt = $dbh->query("SELECT User.email, Picture.name FROM User inner join Picture on (User.id = Picture.user_id)");		
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);        	
		return $result;
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
}