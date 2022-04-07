<!DOCTYPE html>
<html lang="en">
<?php
include ("header.php");
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
            <a href="index.php"><button class="btn">Go to home</button></a>
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
            <h1 class="pt-3 pb-5 text-center">Order Details</h1>
            <a href="index.php"><button class="btn ">Go to home</button></a>

          </div>
          <div class="col-md-12">
          <?php

               $select_data = mysqli_query($conn, "SELECT * FROM orders ORDER BY order_id DESC");

               if($row = mysqli_fetch_assoc($select_data)) {
          ?>
             <table class="table table-light table-striped table-hover table-bordered text-center pb-4">
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
                    </tr>

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
                </tr>
                <tr>
                       <th>Quantity</th>
                       <th>Product Price</th>
                       <th>Card Type</th>
                       <th>Card Name</th>
                       <th>Card Number</th>
                       <th>Expiry Date</th>
                       <th>CVV</th>
                       <th>Order Cost</th>
                       <th>Order Time</th>
                       <th>Order Status</th>
                   </tr>
                   <tr>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['productPrice']; ?></td>
                <td><?php echo $row['cardType']; ?></td>
                <td><?php echo $row['creditName']; ?></td>
                <td><?php echo $row['creditNumber']; ?></td>
                <td><?php echo $row['expiryDate']; ?></td>
                <td><?php echo $row['cvv']; ?></td>
                <td><?php echo $row['order_cost']; ?></td>
                <td><?php echo $row['order_time']; ?></td>
                <td><?php echo $row['order_status']; ?></td>
                </tr>
             </table>
<?php
}
?>
          </div>
      </div>
     </div>
    </div>
   </section>

<?php
include ("footer.php");
?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  </body>
</html>
