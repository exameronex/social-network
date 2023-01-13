<?php
    require "bootstrap.php";

    class RegistrationModel {
        private $conn;

        public function __construct() {
			$this->conn = connDB();
		}

        public function addUser($login, $password) {
            if ($this->checkLogin($login)) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO Users (login, password) VALUES ('$login', '$password')";
                $this->conn->query($query);    
                return $this->conn->insert_id;
            } else {
                return false;
            }
        }

        private function checkLogin($login) {
            $query = "SELECT * FROM Users WHERE login='$login'";
            $user = mysqli_fetch_assoc($this->conn->query($query));
            if (empty($user)) {
                return true;
            } else {
                return false;
            }
        }
    }
?>