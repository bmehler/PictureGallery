<?php
if(isset($_GET['page']) == 'logout') {
    include(WORKING_DIRECTORY. '/view/Login/Template/logoutTemplate.inc.php'); 
}elseif(isset($_POST['email']) && isset($_POST['password'])) {
    $isValid = include(WORKING_DIRECTORY .'/helper/LoginFormValidation.inc.php');    
    if($isValid['error'] === false) {
        $isRegistered = include(WORKING_DIRECTORY .'/helper/LoginDataValidation.inc.php');
        if($isRegistered['error'] === false) {            
            session_start();
            $_SESSION['name'] = $isRegistered['userdata'];
            include(WORKING_DIRECTORY. '/view/Login/Template/loggedInTemplate.inc.php');
        }else {
            include(WORKING_DIRECTORY. '/view/Login/Template/loginTemplate.inc.php');
        }
    }else {
        include(WORKING_DIRECTORY. '/view/Login/Template/loginTemplate.inc.php');
    }
}else {
    include(WORKING_DIRECTORY. '/view/Login/Template/loginTemplate.inc.php');
}
?>