<?php
    require_once "bootstrap.php";

    class ProfileModel {
        private $conn;

        public function __construct() {
            $this->conn = connDB();
        }
    

        public function getLogin($id) {
            $query = "SELECT login FROM Users WHERE id_user = $id";
            $user = mysqli_fetch_assoc($this->conn->query($query));
            return $user["login"];
        }
    }
?>