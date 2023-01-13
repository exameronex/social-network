<?php
    session_start();

    require "Model/ProfileModel.php";
    $profileModel = new ProfileModel();
    require "Model/IndexModel.php";
    $indexModel = new IndexModel();

    $posts = false;

    if (!empty($_GET["id_friend"])) {
        $login = $profileModel->getLogin($_GET["id_friend"]);
        if ($postList = $indexModel->getPost($_GET["id_friend"])) {
            $posts = true;
        }
        
        $id_friend = $_GET["id_friend"];

        require "View/profileView.php";
    }


?>