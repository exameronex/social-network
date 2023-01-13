<?php 
    function connDB() {
        $conn = new mysqli("localhost", "root", "", "social");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }  
        
        return $conn;
    }

?>