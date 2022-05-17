<?php
include('connection.php');

//    image compress function
// function img_compress($tmp_name, $path)
// {
//     if ($path != '' && $tmp_name != '') {

//         // Getting file name
//         @$filename = $path;
//         // Valid extension
//         @$valid_ext = array('png', 'jpeg', 'jpg');
//         // Location
//         @$location = "uploads/" . $filename;
//         // file extension
//         @$file_extension = pathinfo($location, PATHINFO_EXTENSION);
//         @$file_extension = strtolower($file_extension);
//         // Check extension
//         if (in_array($file_extension, $valid_ext)) {

//             // Compress Image

//               //  compressImage($_FILES['file']['tmp_name'],$location,60);

//             $info = getimagesize($tmp_name);

//             if ($info['mime'] == 'image/jpeg')
//                 $image = imagecreatefromjpeg($tmp_name);

//             elseif ($info['mime'] == 'image/gif')
//                 $image = imagecreatefromgif($tmp_name);

//             elseif ($info['mime'] == 'image/png')
//                 $image = imagecreatefrompng($tmp_name);

//             imagejpeg($image, $location, 60);
//         } else {
//             echo "Invalid file type.";
//         }
//     }
// }

// insert product Data
if(isset($_POST['name'])){

    

    $img = $_FILES['images']['tmp_name'];
    $img_name =  $_FILES['images']['name'];
    //img_compress($img, $img_name);
    extract($_POST); // it auto create post variables values of php through ajax
    sleep(2);
   
      if($uploadok == 0){
        echo "Sorry file wasn't uploaded";
      }
      else{
        if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
          # code...
       //    echo "The file".htmlspecialchars(basename($_FILES["images"]["name"])) ." has been uploaded";
          header("Location:index.php");     
         }
         else{
           echo "Sorry error occured while uploading";
         }
      }
   
    
       
    $name = $_POST['name'];
    $product_price = $_POST['product_price'];
    $discounted_price = $_POST['discounted_price'];
    $category = $_POST['category'];

    $insert_data = "INSERT INTO `product_details`( `name`, `image`, `product_price`,`discounted_price`,`category`) VALUES ('$name' , '$img_name' ,'$product_price','$discounted_price','$category')";
    $query = mysqli_query($conn, $insert_data);
    
    if($query == true){
        echo "Your data is inserted";
    }else {
        echo "Error";
    }
}

// member insert
if (isset($_POST['username'])) {
    $name = $_POST['username'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $insert_data = mysqli_query($conn, "INSERT INTO `user`(`name`, `mail`, `password`) VALUES ('$name','$mail','$password')");
    echo($insert_data);
    if ($insert_data == true) {
        echo "Your data is sent";
    } else {
        echo "Send error";
    }
}