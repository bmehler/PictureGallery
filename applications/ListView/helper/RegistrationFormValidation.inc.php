<?php

$validation = array();
$validation['error'] = false;

$email 		= (htmlentities(!empty($_POST['registration_email']))) ? htmlentities($_POST['registration_email']) : NULL;
$password 	= (htmlentities(!empty($_POST['registration_password']))) ? htmlentities($_POST['registration_password']) : NULL;
$confirm 	= (htmlentities(!empty($_POST['registration_confirm']))) ? htmlentities($_POST['registration_confirm']) : NULL;

/*
 * Überprüft, ob die Variablen $email und $password leer sind
 */
if ($email == NULL || $password == NULL || $confirm == NULL || $email == '' || $password == '' || $confirm == '') {

	$validation['error'] = true;
	$validation['message'] = 'Leere Felder sind nicht erlaubt!';

	return $validation;	

/*
 * Überprüft, ob die Variable $email dem Email-Format entspricht
 */
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

	$validation['error'] = true;
	$validation['message'] = 'Bitte geben Sie eine gültige Email-Adresse ein!';

	return $validation;

/*
 * Überprüft, ob die Variable $password eine Mindestlänge von 5 Zeichen hat 
 */
} elseif (strlen($password) < 5) {

	$validation['error'] = true;
	$validation['message'] = 'Bitte mindestens 5 Zeichen eingeben!';

	return $validation;

/*
 * Überprüft, ob die Variable aus mindestens 5 Zeichen [a-zA-Z0-9] besteht.
 */
} elseif (!(preg_match('/^[a-zA-Z0-9]{5,}$/',$password))) {

	$validation['error'] = true;
	$validation['message'] = 'Überprüfen Sie die verwendeten Zeichen!';

	return $validation;

/*
 * Überprüft, ob beide Passwörter identisch sind
 */
} elseif ($password !== $confirm) {

	$validation['error'] = true;
	$validation['message'] = 'Bitte wiederholen Sie das Passwort genau!';

	return $validation;

} else {

	//$validation['message'] = '<p>Sie haben sich erfolgreich registriert<a href="index.php"> Jetzt einloggen</a></p>';
	return $validation;
}

?>