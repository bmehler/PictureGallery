<?php
if(isset($_GET['page']) && $_GET['page'] == 'loggedin') {
    session_start();
    include(WORKING_DIRECTORY. '/view/Login/Template/loggedInTemplate.inc.php');
}elseif(isset($_GET['page']) && $_GET['page'] == 'upload') {
    session_start();
    include(WORKING_DIRECTORY. '/view/Upload/Template/uploadTemplate.inc.php');
}elseif(isset($_GET['page']) && $_GET['page'] == 'registration') {
    include(WORKING_DIRECTORY. '/view/Registration/Template/registrateTemplate.inc.php');
}elseif(isset($_GET['page']) && $_GET['page'] == 'logout') {
    include(WORKING_DIRECTORY. '/view/Login/Template/logoutTemplate.inc.php'); 
}elseif(isset($_POST['email']) && isset($_POST['password'])) {
    $isValid = include(WORKING_DIRECTORY .'/helper/LoginFormValidation.inc.php');    
    if($isValid['error'] === false) {
        $isRegistered = include(WORKING_DIRECTORY .'/helper/LoginDataValidation.inc.php');
        if($isRegistered['error'] === false) {            
            session_start();
            $_SESSION['id'] = $isRegistered['id'];
            $_SESSION['name'] = $isRegistered['email'];
            include(WORKING_DIRECTORY. '/view/Login/Template/loggedInTemplate.inc.php');
        }else {
            include(WORKING_DIRECTORY. '/view/Login/Template/loginTemplate.inc.php');
        }
    }else {
        include(WORKING_DIRECTORY. '/view/Login/Template/loginTemplate.inc.php');
    }
}elseif(isset($_POST['registration_email']) && isset($_POST['registration_password']) && isset($_POST['registration_confirm'])) {
    $isValid = include(WORKING_DIRECTORY .'/helper/RegistrationFormValidation.inc.php');
    if($isValid['error'] == false) {
        $isInserted = include(WORKING_DIRECTORY .'/helper/RegistrationDataValidation.inc.php');       
        include(WORKING_DIRECTORY. '/view/Registration/Template/registrateTemplate.inc.php');           
    }else {
         include(WORKING_DIRECTORY. '/view/Registration/Template/registrateTemplate.inc.php');
    }
}elseif(isset($_FILES['file'])) {
    session_start();
    $isUploaded =  include(WORKING_DIRECTORY. '/src/Upload/uploadPictures.inc.php');    
    include(WORKING_DIRECTORY. '/view/Upload/Template/uploadTemplate.inc.php');
}elseif(isset($_GET['page']) && $_GET['page'] == 'login') { 
    include(WORKING_DIRECTORY. '/view/Login/Template/loginTemplate.inc.php');  
}else {    
    include(WORKING_DIRECTORY. '/view/ListView/Template/ListViewTemplate.inc.php');
}    
?>