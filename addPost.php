<?php
    function post() {
        global $connection;
    
        // Server
        $server = "localhost";
        // Username
        $username = "root";
        // If using XAMPP, 
        //  the password is an empty string.
        $password = "";
        // Database
        $database = "lab";
        // Use the global connection
        $connection = mysqli_connect($server, $username, $password, $database);
        if($connection == null) {
            echo "<p>no connection</p>";
            $connection = mysqli_connect($server, $username, $password, $database);
        }

        $sql = "SELECT * FROM posts";
        $query = mysqli_query($connection, $sql);
    
        if(isset($_POST["new_post"])) {
            $title = $_POST["title"];
            $text = $_POST["text"];
            $sql = "INSERT INTO posts(title, text) VALUES('$title', '$text')";
            mysqli_query($connection, $sql);
        }
    }
?>