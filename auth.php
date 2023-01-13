<?php
    session_start();

    $authError = false;
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
		$password = $_POST['password'];

        require "Model/AuthModel.php";

        $authModel = new AuthModel();

        if ($id = $authModel->authorization($login, $password)) {
            $_SESSION["login"] = $login;
            $_SESSION["id"] = $id;
            header('Location: ../');
        } else {
            $authError = true;
        }        
    }

    require "View/authView.php";
?>