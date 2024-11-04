<?php
$hostname = "localhost";
$database = "vendas";
$username = "root";
$password = "1234";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
