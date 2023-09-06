<?php
$servername = "localhost";
$username = "Phuwadon";
$password = "0621560986Aon#";
$db = "Phuwadon";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>