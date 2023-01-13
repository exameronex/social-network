<?php
    require "bootstrap.php";

    class AuthModel {
        private $conn;

        public function __construct() {
			$this->conn = connDB();
		}

        public function authorization($login, $password) {
            $query = "SELECT * FROM Users WHERE login = '$login'";
            $result = $this->conn->query($query);
    
            $user = mysqli_fetch_assoc($result);

            if (!empty($user)) {
                $hash = $user['password'];
                if (password_verify($password, $hash)) {
                    return $user['id_user'];
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }
?>