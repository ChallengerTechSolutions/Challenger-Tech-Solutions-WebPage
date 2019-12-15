<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "thechallenger346";

$conn = new mysqli($servername, $username, $password, $database);

if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
    mysqli_close($conn);
}
?> 