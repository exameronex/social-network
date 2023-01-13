<?php
    session_start();

    $auth = false;
    if (!empty($_SESSION["login"])) {
        $auth = true;
        $login = $_SESSION["login"];
    } 

    require "Model/IndexModel.php";
    $indexModel = new IndexModel();

    if (!empty($_POST['text'])) {
        $text = $_POST['text'];  

        $indexModel->addPost($_SESSION["id"], $_POST['text']);
        header("Location: /");
    }

    $posts = false;

    if (isset($_SESSION["id"])) {
        if ($postList = $indexModel->getPost($_SESSION["id"])) {
            $posts = true;
        }
    }

    require "View/IndexView.php";
?>