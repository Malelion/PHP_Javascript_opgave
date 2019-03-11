<?php
$servername = "";
$username = "";
$password = "*********";
$database = "";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Forbindelsen mislykkedes: " . $conn->connect_error);
}
//echo "Forbundet til databasen<br>";
?>