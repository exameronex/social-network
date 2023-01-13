<?php
    require "bootstrap.php";

    class FriendsModel {
        private $conn;

        public function __construct() {
			$this->conn = connDB();
		}
        
        public function getFriends($login, $id) {
            $query = "SELECT id_user, login FROM Users WHERE login LIKE '%$login%' AND NOT id_user = $id";
            $friends = $this->conn->query($query); 

            if (mysqli_num_rows($friends) == 0) {
                return false;
            } else {
                while($friend = mysqli_fetch_assoc($friends)) {
                    $friendsList[] = $friend;
                }
                return $friendsList;
            }  
        }

        public function addFriend($idFirstFriend, $idSecondFriend) {
            $query = "INSERT INTO friends (id_first_friend, id_second_friend) VALUES ($idFirstFriend, $idSecondFriend)";
            $this->conn->query($query);    
        }

        public function getFriendsID($id) {
            $query = "SELECT id_user, login FROM Users WHERE id_user IN (
                (SELECT id_first_friend FROM Friends WHERE id_second_friend = $id)
                UNION
                (SELECT id_second_friend FROM Friends WHERE id_first_friend = $id)
                )";

            $friends = $this->conn->query($query); 

            if (mysqli_num_rows($friends) == 0) {
                return false;
            } else {
                while($friend = mysqli_fetch_assoc($friends)) {
                    $friendsList[] = $friend;
                }
                return $friendsList;
            }  
            
            
        }
    }
?>