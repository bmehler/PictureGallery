<?php
/* Definiert den ROOT_PATH */
define( 'ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] );

/* Definiert die WORKING_DIRECTORY */
define( 'WORKING_DIRECTORY', ROOT_PATH.'/applications/Registration');

/* Includiert die Datenbankverbindung */
require_once(__DIR__ .'/config/db/db.inc.php');

/* Includiert das Respository */
require_once(__DIR__ .'/src/Repository/LoginRepository.inc.php');

/* Includiert das Respository */
require_once(__DIR__ .'/src/Repository/RegistrationRepository.inc.php');

/* Includiert den Dispatcher */
require_once(__DIR__ .'/web/dispatch.php');

?>