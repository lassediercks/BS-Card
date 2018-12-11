<?php
$servername = "localhost";
$username = "d02cb689";
$password = "5H4LqCJ8KqneYK34";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>