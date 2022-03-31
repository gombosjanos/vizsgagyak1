<?php

$servername = "localhost";
$username = "c31e202121";
$password = "zBPXDe2Wwmz#a";
$dbname = "futreg";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

?>