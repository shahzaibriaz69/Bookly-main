<?php
// 1. DATABASE CONNECTION
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pegasus_db"; // Updated to your database name

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>