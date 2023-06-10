<?php
sleep(3);

include('server.php');

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pasw = mysqli_real_escape_string($conn, $_POST['pasword']);
    $hashpsw = sha1($pasw);

    $query = "SELECT * FROM admin WHERE email = '$email' and psw = '$hashpsw'";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($res);
    $count = mysqli_num_rows($res);
    echo '<script>console.log("Enterd Data Not Found")</script>';
    echo '<script>alert("Enterd Data Not Found")</script>';
    echo '<script>alert("Enterd Data Not Found")</script>';

    if ($count < 0) {
        echo '<script>alert("Enterd Data Not Found")</script>';
        // header('location: ../admin/');

    } else {
        if ($count >= 0) {
            echo '<script>
             
            </script>';
            echo '<script>console.log("Enterd Data Not Found")</script>';

            sleep(3);
            header('location: ../admin/');
        } else {
            echo '<script>alert("Login  Un-Successfully..")</script>';
            header('location: ../');
        }
    }
}



mysqli_close($conn);
?>