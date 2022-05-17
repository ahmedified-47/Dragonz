<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $registered_date = $_POST['registered_date'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];

    $insert_data = mysqli_query($conn, "INSERT INTO `customer`(`name`, `email`, `address`, `registered_date`, `product` , `quantity`) VALUES ('$name','$email','$address','$registered_date','$product' ,'$quantity')");
    echo($insert_data);
    if ($insert_data == true) {
        echo "Your data is sent";
    } else {
        echo "Send error";
    }
}