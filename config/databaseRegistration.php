<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "db_tes";

$conn = new mysqli($servername, $username, $password, $database_name);

if ($conn->connect_error){
    die("Conection Failed: " . $conn->connect_error);
}
echo "Connected Successfully";
