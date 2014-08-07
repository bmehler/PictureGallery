<?php
$registered 			= array();
$registered['error'] 	= false;

$email 		= htmlentities($_POST['email']);
$password 	= htmlentities($_POST['password']);

/* Liefert den Benutzer und �berpr�ft den Login
 * Im Repository liegt das DQL-Statement f�r die Funktion findUser
 */
$isRegistered = findUser($email, $password);

if ($isRegistered) {
	$registered['error'] = false;
    $registered['id'] = $isRegistered['id'];
    $registered['email'] = $isRegistered['email'];    
    
    return $registered;
} else {
	$registered['error'] = true;
	$registered['message'] = 'Sie sind noch nicht registriert!';

	return $registered;
}
?>