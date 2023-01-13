<?php
    require_once "bootstrap.php";

    class MessageModel {
        private $conn;

        public function __construct() {
            $this->conn = connDB();
        }

        public function addMessage($idSender, $idRecipient, $text) {
            $query = "INSERT INTO message (id_first_user, id_second_user, text, date_message) VALUES ($idSender, $idRecipient, '$text', NOW())";
            $this->conn->query($query);
        }

        public function getMessage($idFirst, $idSecond) {
            $query = "SELECT * FROM Message WHERE (id_first_user = $idFirst AND id_second_user = $idSecond) OR (id_first_user = $idSecond AND id_second_user = $idFirst) ORDER BY date_message";

            $messages = $this->conn->query($query);
            
            if (mysqli_num_rows($messages) == 0) {
                return false;
            } else {
                while($friend = mysqli_fetch_assoc($messages)) {
                    $messagesList[] = $friend;
                }
                return $messagesList;
            } 
        }

    }
?>