<?php
$host = "localhost";  // change if using online hosting
$user = "root";       // your MySQL username
$pass = "";           // your MySQL password (default empty in XAMPP)
$dbname = "wada_db";  // the database we just created

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
