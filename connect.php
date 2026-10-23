<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "trasua";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>