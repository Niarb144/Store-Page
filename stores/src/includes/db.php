<?php 
    $servername = "localhost:3306";
    $username = "theimaaraco_gallery_user";
    $password = "gallery@theimaara";
    $dbname = "theimaaraco_gallery";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>