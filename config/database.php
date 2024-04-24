<?php
// Database Credentials
$servername = "localhost";
$username = "arrow85";
$password = "Br1@n09p120985";

$database_name = "db_tes";

// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";

?>