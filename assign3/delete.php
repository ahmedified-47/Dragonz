<?php
include("settings.php");
$conn = @mysqli_connect($host,
    $user,
    $pwd,
    $sql_db
);
if (isset($_POST['del_id'])){
    $order_id = $_POST['del_id'];
// die(var_dump($order_id));
    $delete = "DELETE FROM orders WHERE order_id = '$order_id'";
    $query = mysqli_query($conn,$delete);
    if ($query == true) {
        echo "Order Deleted!";
    }
    else{
        echo "Error while deleting order!";
    }
}

