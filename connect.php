<?php
$servername = "ap-cdbr-azure-east-c.cloudapp.net";
$username = "b3a465ce6af9b4";
$password = "3ebfd1d6";
$database = "CMM007ALDB-1513072";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>