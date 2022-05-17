<?php
session_start();
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    include("connection.php");
    $select = "SELECT * FROM login_1 WHERE email = '$email' && password = '$password'";
    $query = mysqli_query($conn, $select);
    // die(var_dump($query));
    $rows = mysqli_num_rows($query);
    if ($rows > 0) {
        if ($query == true) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;

            echo "<script>
            window.location.href='http://localhost/shop_city/shop_city/admin_panel/pages/examples/blank.php';
            </script>";
        }
    }
     else {
        echo " <script>
        alert('Username or Password Invalid!!!!');
        window.location.href='http://localhost/shop_city/shop_city/admin_panel/pages/examples/login.php';
        </script>";
    }
}
