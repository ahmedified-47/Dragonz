<?php
include("connection.php");
if (isset($_POST['del_id'])) {
    # code...
    $id = $_POST['del_id'];
    $delete = "DELETE FROM product_details WHERE id = '$id'";
    $query = mysqli_query($conn, $delete);
    // die(var_dump($id));
}

// member delete

if (isset($_POST['del_id'])){
    $id = $_POST['del_id'];
// die(var_dump($id));
    $delete = "DELETE FROM user WHERE id = '$id'";
    $query = mysqli_query($conn,$delete);
    if ($query == true) {
        echo "Your data is deleted";
    }
    else{
        echo "Error";
    }
}

// customer delete
if (isset($_POST['del_id'])){
    $id = $_POST['del_id'];
// die(var_dump($id));
    $delete = "DELETE FROM customer WHERE id = '$id'";
    $query = mysqli_query($conn,$delete);
    if ($query == true) {
        echo "Your data is deleted";
    }
    else{
        echo "Error";
    }
}
