<?php
$servername = "sql.itcn.dk:3306";
$username = "mmdskive.EADANIA";
$password = "s8V057SVuy";
$database = "mmdskive.EADANIA";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Forbindelsen mislykkedes: " . $conn->connect_error);
}
//echo "Forbundet til databasen<br>";
?>