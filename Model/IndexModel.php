<?php
    require_once "bootstrap.php";

    class IndexModel {
        private $conn;

        public function __construct() {
			$this->conn = connDB();
		}

        public function addPost($id, $text) {  
            $query = "INSERT INTO Posts (id_user, post, date_post) VALUES ($id, '$text', NOW())";
            $this->conn->query($query);    
        }

        public function getPost($id) {  
            $query = "SELECT * FROM Posts WHERE id_user = $id ORDER BY date_post DESC";
            $posts = $this->conn->query($query); 

            if (mysqli_num_rows($posts) == 0) {
                return false;
            } else {
                while($post = mysqli_fetch_assoc($posts)) {
                    $postsList[] = $post;
                }
                return $postsList;
            }                  
        }
    }
?>