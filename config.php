<?php

// Database connection parameters
$servername = "localhost";  // database server name 
$username = "xxxx";     // database username
$password = "xxxx";     // database password
$dbname = "xxxx";  // database name


        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

       
        ?>
    