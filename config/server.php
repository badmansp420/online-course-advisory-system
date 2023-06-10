<?php
$host = 'localhost';
$user = 'root';
$pasw = '';
$db = 'ocas';

$conn = mysqli_connect($host, $user, $pasw, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// mysqli_close($conn);
?>