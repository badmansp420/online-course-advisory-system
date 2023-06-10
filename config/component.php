<?php

sleep(3);

include 'server.php';

// global $conn;
// if (isset($_POST['register'])) {
$st_name = mysqli_real_escape_string($conn, $_POST['st_name']);
$fa_name = mysqli_real_escape_string($conn, $_POST['fa_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pasw = mysqli_real_escape_string($conn, $_POST['password']);
$hashpsw = sha1($pasw);
// $date = new Date();


$query = "INSERT INTO student(st_name, fa_name, email, psw, active_session, last_active) VALUES ('$st_name','$fa_name','$email','$hashpsw',0,0)";
// echo "Data Inserted Succesfully";
// }
$stmt = $conn->prepare($query);
$stmt->execute();

mysqli_close($conn);

?>