<?php

$server = "localhost";
$user = "root";
$pass = "root";
$database = "Data_saya";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
