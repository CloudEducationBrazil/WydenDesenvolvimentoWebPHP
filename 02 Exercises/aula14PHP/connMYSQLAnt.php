<?php
$hostname = "localhost";
$database = "coursejdbc";
$username = "developer";
$password = "12";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
