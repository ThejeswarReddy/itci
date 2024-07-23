<?php

// Database connection parameters
$servername = "localhost";  // Change this to your database server name if different
$username = "itcidb";     // Change this to your database username
$password = "itcidbadmin123";     // Change this to your database password
$dbname = "itcidb";  // Change this to your database name


        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

       
        ?>
    