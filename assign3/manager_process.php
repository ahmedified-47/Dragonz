<?php
session_start();
require_once('settings.php');
// The @ operator suppresses the display of any error messages
// mysqli_connect returns false if connection failed, otherwise a connection value
$conn = @mysqli_connect($host,
    $user, 
    $pwd,
    $sql_db
);
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM login_1 WHERE email = '$email' && password = '$password'";
    $query = mysqli_query($conn, $select);
    // die(var_dump($query));
    $rows = mysqli_num_rows($query);
    if ($rows > 0) {
        if ($query == true) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;

            // echo "<script>
            // window.location.href='http://localhost/assign3/manager.php';
            // </script>";
             header("location:manager.php");
        }
    }
     else {
        // echo " <script>
        // alert('Username or Password Invalid!!!!');
        // window.location.href='http://localhost/assign3/manager_login.php';
        // </script>";
        header("Location:manager_login.php");
    }
}
