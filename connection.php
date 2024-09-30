<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'authentication'; 

$conn = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_error()) {
    echo "<script>alert('Can't connect to database');</script>";
    exit();
}
?>
