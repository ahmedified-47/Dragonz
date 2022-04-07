<?php
require_once('settings.php');
// The @ operator suppresses the display of any error messages
// mysqli_connect returns false if connection failed, otherwise a connection value
$conn = @mysqli_connect($host,
    $user,
    $pwd,
    $sql_db
);
if (isset($_POST['id_update'])) {
    // echo "hello";
    $id = $_POST['id_update'];

    $status = $_POST['status_update'];
    $update = "UPDATE orders SET order_status = '$status' WHERE order_id='$id'";
    // die($update);
    $updated = mysqli_query($conn, $update);
    if ($updated == true) {
        echo "Data Updated";
    } else {
        echo "Error";
    }
}

