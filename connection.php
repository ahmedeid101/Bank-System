<?php
$servername = "localhost";
$username = "id_ahmed101";
$password = "Ahmed@101";
$dbname = "bank system";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed due to: " . $conn->connect_error);
}
?>