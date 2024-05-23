<?php
$servername = "localhost";
$username = "root";
$password = "NOTACTUAL";
$database = "bot";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
