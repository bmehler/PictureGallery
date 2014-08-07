<?

$inserted = array();
$inserted['error'] = false;

$email 		= $_POST['registration_email'];
$password 	= $_POST['registration_password'];

$isAlreadyRegistered = findUserByEmail($email);

if($isAlreadyRegistered) {
    $inserted['error'] = true;
    $inserted['message'] = 'Sie sind bereits registriert!';
    return $inserted;
} else {
    createUser($email, $password);
    $inserted['message'] = 'Sie sind nun registriert! <a href="index.php">Jetzt einloggen</a>';
    return $inserted;
}
?>