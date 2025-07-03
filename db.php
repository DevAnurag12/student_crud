<?php
$host = "localhost";
$user = "root";
$pass = ""; // default password for XAMPP is empty
$db = "student_crud";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
