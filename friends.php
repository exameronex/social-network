<?php
    session_start();

    $friend = false;

    require "Model/FriendsModel.php";
    $FriendsModel = new FriendsModel();

    if (!empty($_POST["search"])) {        
        if ($friendsList = $FriendsModel->getFriends($_POST["search"], $_SESSION["id"])) {
            $friend = true;
        }
    }

    if (!empty($_GET["id_friend"])) {
        $FriendsModel->addFriend($_SESSION["id"], $_GET["id_friend"]);
        header("Location: /friends.php");
    }

    $friendID = false;
    if ($friendsListID = $FriendsModel->getFriendsID($_SESSION["id"])) {
        $friendID = true;
    }

    require "View/FriendsView.php";

?>