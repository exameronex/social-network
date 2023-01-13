<?php
    session_start();

    require "Model/MessageModel.php";
    $messageModel = new MessageModel();



    $message = false;

    if ($messageList = $messageModel->getMessage($_SESSION["id"], $_GET["id_friend"])) {
        $message = true;
        require "Model/ProfileModel.php";
        $profileModel = new ProfileModel();
        $login = $_SESSION["login"];
        $loginFriend = $profileModel->getLogin($_GET["id_friend"]);
        $id = $_SESSION["id"];
    }

    if (!empty($_POST["text"])) {
        $messageModel->addMessage($_SESSION["id"], $_GET["id_friend"], $_POST["text"]);
        header("Location: /message.php?id_friend=$_GET[id_friend]");
    }
    
    require "View/MessageView.php";
?>