<?php
include("connection.php");

if (isset($_POST['id_update'])) {

    $id = $_POST['id_update'];
    $image = "" . $_POST['image'];
    $name = $_POST['name'];
    $product_price = $_POST['product_price'];
    $discounted_price = $_POST['discounted_price'];
    $category = $_POST['category'];
    $update = "UPDATE product_details SET name = '$name' , image = '$image' , product_price = '$product_price' , discounted_price = '$discounted_price' , category = '$category' WHERE id='$id'";
    $updated = mysqli_query($conn, $update);
    if ($updated == true) {
        echo "Data Updated";
    } else {
        echo "Error";
    }
}
