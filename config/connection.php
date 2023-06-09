<?php
$host = 'localhost';
$user = 'root';
$pasw = '';
$db = 'ocas';

$conn = mysqli_connect($host, $user, $pasw, $db);

try {
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected Successfully";

} catch (Exception $e) {
    echo "Error: " + $e;
}
mysqli_close($conn);
?>