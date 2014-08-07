<?php
/*
 * Lädt ein Bild in das Uploadverzeichnis
 */
function savePicture($user, $name, $format, $size)
{
	$dbh = connectToDatabase();       
    
    try {
        $stmt = $dbh->prepare('INSERT INTO Picture (updated_at, user_id, name, image_format, image_size) VALUES (now(), :user_id, :name, :image_format, :image_size)');
        $stmt->bindParam(':user_id', $user);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':image_format', $format);
        $stmt->bindParam(':image_size', $size);
        $stmt->execute();
    } catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}        
}