<?php
session_start();
if($_SESSION['email'] == true && $_SESSION['password'] == true){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="Description" content="Enter your description here" />
    <meta name="Description" content="Index page for website" />
    <meta name="keywords" content="HTML 5" />
    <meta name="author" content="Ahmed" />
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"
    /> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

     <link rel="stylesheet" href="style/style.css" />


    <title>Electro®</title>
  </head>
<?php
include("navbar.php");
include("settings.php");
$conn = @mysqli_connect($host,
$user,
$pwd,
$sql_db
);

?>

  <body>


    <!-- BACKGROUND SECTION START HERE  -->
    <section class="background">
      <div class="container-fluid product_bg_1 pt-5 mt-5 pb-5">
        <div class="row pb-5 mb-5">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <a href="https://www.lg.com/us/tvs"
              ><h1 class="bg_heading pt-5 mt-5">
                Real 4K Made by True Colors
              </h1></a
            >
            <p class="text_bg pt-3 pb-3">
              NanoCell TV delivers a Real 4K that meets the international
              standard CM value. Discover the more brilliant and clear visual
              experience with Real 4K resolution completed by NanoCell
              Technology.
            </p>
            <a href="index.php"><button class="btn">Log Out</button></a>
          </div>
        </div>
      </div>
    </section>

   <!-- Fetching table starts here  -->
   <section class="fetch">
    <div class="container-fluid">
     <div class="row">
      <div class="col-md-12">
      <div class="col-md-12">
            <br />
            <hr />
            <h1 class="pt-3 pb-5 text-center">Search Type</h1>

          </div>
          <div class="col-md-12">
          <form method="post" action="manager.php">
          <select class = "form-control pb-5" name = "values" multiple >
                  <option value = "" disabled selected>None</option>
                  <option value = "1">All orders</option>
                  <option value = "2">Orders for a customer based on name</option>
                  <option value = "3">Orders for a particular product</option>
                  <option value = "4">Orders that are pending</option>
                  <option value = "5">Orders sorted by total cost</option>
          </select>
          <br>
          <br>
          <button type="submit" class="btn" name = "submit">Submit</button>
          <br>
          <br>
          </form>
          <?php
               $select_data = "";
               $query = "";
               if(isset($_POST["submit"])){
                   if(!empty($_POST["values"])){
                       $selected = $_POST["values"];
                       switch($selected){
                           case "1":
                            $select_data = "SELECT * FROM orders";
                            break;
                            case "2":
                            ?>
                            <form method="post" action= "manager.php">
                             <label for="search_name">First Name:</label>
                             <input
                             type="text"
                             name="search_name"
                             id="search_name"
                             class="form-control"
                             maxlength="40"
                             pattern="^[a-zA-Z]+$"
                             required="required"
                             />
                             <!-- <input type="hidden" name="submit"> -->
                             <br>
                             <br>
                             <button type="submit" class="btn" value="s_name" name="s_name" id="submitForm">Search</button>
                             <br>
                             <br>
                            </form>
                            <?php

                            break;
                            case "3":
                                ?>
                            <form method="post" action= "manager.php">
                                  <label for="product_name">Product Name:</label>
                             <input
                             type="text"
                             name="product_name"
                             id="product_name"
                             class="form-control"
                             maxlength="25"
                             pattern="^[a-zA-Z]+$"
                             required="required"
                             />
                             <br>
                             <br>
                             <button type="submit" class="btn" value="s_product"  name = "s_product">Search</button>
                             <br>
                             <br>
                            </form>
                            <?php

                            break;
                            case "4":
                            $select_data ="SELECT * FROM orders where order_status = 'PENDING'";
                            break;
                            case "5":
                            $select_data =  "SELECT * FROM orders ORDER BY order_cost ASC";
                            break;
                       }
                      //  die($select_data);
                   }
               }
               $search_name = "";
               if(isset($_POST["s_name"])){
                  $search_name = $_POST["search_name"];
                  $select_data =  "SELECT * FROM orders where f_name = '$search_name'";
                  // die ($select_data);
               }
               $product_name = "";
               if(isset($_POST["s_product"])){
                  $product_name = $_POST["product_name"];
                  $select_data = "SELECT * FROM orders where product = '$product_name'";
              }

          ?>
            <br />
            <hr />
            <h1 class="pt-3 pb-5 text-center">Order Details</h1>
             <table class="table  table-striped table-hover table-bordered text-center pb-4">
               <thead>
                   <tr>
                       <th>ID</th>
                       <th>First Name</th>
                       <th>Last Name</th>
                       <th>Email</th>
                       <th>Street Address</th>
                       <th>Suburb/Town</th>
                       <th>State</th>
                       <th>Postal Code</th>
                       <th>Phone No.</th>
                       <th>Contact Preference</th>
                       <th>Product</th>
                       <th>Quantity</th>
                       <th>Product Price</th>
                       <th>Order Cost</th>
                       <th>Order Time</th>
                       <th>Order Status</th>
                       <th colspan="2">Status Update</th>
                    </tr>
              </thead>
              <tbody id = "table">
<?php
if($select_data){
$query = mysqli_query($conn, $select_data);
while ($row = mysqli_fetch_assoc($query)) {
?>
    <tr>
    <th scope="row"><?php echo $row['order_id']; ?></th>
                <td><?php echo $row['f_name']; ?></td>
                <td><?php echo $row['l_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['street']; ?></td>
                <td><?php echo $row['town']; ?></td>
                <td><?php echo $row['state']; ?></td>
                <td><?php echo $row['code']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['product']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['productPrice']; ?></td>
                <td><?php echo $row['order_cost']; ?></td>
                <td><?php echo $row['order_time']; ?></td>
                <td><?php echo $row['order_status']; ?></td>

        <td>
            <button type="submit" value="<?php echo $row['order_id']; ?>" class="btn btn-success update_modal_btn">Update</button>
        </td>
        <?php if($row['order_status'] == "PENDING"){ ?>
        <td>
            <button type="submit" value="<?php echo $row['order_id']; ?>" class="btn btn-danger delete">Cancel</button>
        </td>
    </tr>
<?php
        }
}
}
?>
              </tbody>
             </table>

          </div>
      </div>
     </div>
    </div>
   </section>


   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="moda_body" id="moda_body"></div>
            </div>
        </div>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script>

$(".update_modal_btn").click(function(){
    let update = $(this).val();
    // alert(update);
    $.ajax({
        url : "update.php",
        type : "POST",
        data : {
            update : update,
        },
        success : function(data){
            $("#moda_body").html(data);
            // $(table).load("table.php");
        }
    })
})

$(".update_modal_btn").click(function() {
    $("#exampleModal").modal('show');
});

$(".delete").click(function() {
        let del_id = $(this).val();

        $.ajax({
            url: "delete.php",
            type: "POST",
            data: {
                del_id: del_id,
            },

            success: function(data) {
                alert(data);
                // $("#table").load("table.php");
            }

        });
    })
</script>
  </body>
</html>
<?php
}
else{
  // echo " <script>
  // window.location.href='http://localhost/assign3/manager_login.php';
  // </script>";
  header("location:manager_login.php");
}
include ("footer.php");
?>