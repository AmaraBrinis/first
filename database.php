<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecole";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo "connection failed!";
  die("Connection failed: " . $conn->connect_error);
}

?>