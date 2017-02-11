<?php
$servername = "localhost";
$username = "root";
$password = "/* your password , if there's no password dont write*/";
$dbname = "/* your database name*/";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>   