<?php
include("connection.php");

if (isset($_POST['id_update'])) {

    $id = $_POST['id_update'];

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $update = "UPDATE user SET name = '$name', mail = '$mail' , password = '$password' WHERE id='$id'";
    $updated = mysqli_query($conn, $update);
    if ($updated == true) {
        echo "Data Updated";
    } else {
        echo "Error";
    }
}

