<?php
    session_start();
    
    $regError = false;
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
		$password = $_POST['password'];

        require "Model/RegistrationModel.php";

        $registrationModel = new RegistrationModel();

        if ($id = $registrationModel->addUser($login, $password)) {
            $_SESSION["login"] = $login;
            $_SESSION["id"] = $id;
            header('Location: ../');
        } else {
            $regError = true;
        }        
    }
    
    require "View/registrationView.php";
?>