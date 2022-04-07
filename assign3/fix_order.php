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
session_start();
if(isset($_SESSION["f_nameData"])){
 $firstname = $_SESSION["f_nameData"];
}
else{
  $firstname = "";
  header("location:enquire.php");
}

if(isset($_SESSION["l_nameData"])){
  $lastname = $_SESSION["l_nameData"];
 }
 else{
   $lastname = "";
 }
 if(isset($_SESSION["emailData"])){
  $email = $_SESSION["emailData"];
 }
 else{
   $email = "";
 }
 if(isset($_SESSION["streetData"])){
  $street = $_SESSION["streetData"];
 }
 else{
   $street = "";
 }
 if(isset($_SESSION["townData"])){
  $town = $_SESSION["townData"];
 }
 else{
   $town = "";
 }
 if(isset($_SESSION["stateData"])){
  $state = $_SESSION["stateData"];
 }
 else{
   $state = "";
 }
 if(isset($_SESSION["codeData"])){
  $code = $_SESSION["codeData"];
 }
 else{
   $code = "";
 }
 if(isset($_SESSION["phoneData"])){
  $phone = $_SESSION["phoneData"];
 }
 else{
   $phone = "";
 }
 if(isset($_SESSION["contactData"])){
  $contact = $_SESSION["contactData"];
 }
 else{
   $contact = "";
 }
 if(isset($_SESSION["productData"])){
  $product = $_SESSION["productData"];
 }
 else{
   $product = "";
 }
 if(isset($_SESSION["priceData"])){
  $price = $_SESSION["priceData"];
 }
 else{
   $price = "";
 }
 if(isset($_SESSION["quantityData"])){
  $quantity = $_SESSION["quantityData"];
 }
 else{
   $quantity = "";
 }
 if(isset($_SESSION["cardType"])){
  $cardType = $_SESSION["cardType"];
 }
 else{
   $cardType = "";
 }
 if(isset($_SESSION["creditName"])){
  $creditName = $_SESSION["creditName"];
 }
 else{
   $creditName = "";
 }
 if(isset($_SESSION["creditNumber"])){
  $creditNumber = $_SESSION["creditNumber"];
 }
 else{
   $creditNumber = "";
 }
 if(isset($_SESSION["expiryDate"])){
  $expiryDate = $_SESSION["expiryDate"];
 }
 else{
   $expiryDate = "";
 }
 if(isset($_SESSION["cvv"])){
  $cvv = $_SESSION["cvv"];
 }
 else{
   $cvv = "";
 }
?>
  <body>


    <!-- BACKGROUND SECTION START HERE  -->
    <section class="background enquiry_bg">
      <div class="container-fluid pt-5 mt-5 pb-5">
        <div class="row pb-5 mb-5">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <h1 class="bg_heading pt-5 mt-5">Product Enquiry</h1>
            <p class="text_bg pt-3 pb-3">
              Welcome to Electro Support! How can we help you?
            </p>
            <a href="index.php"><button class="btn">Go to home</button></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Enquiry form  -->
    <section class="enquiry_form">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
            <br />
            <hr />
            <h1 class="pt-3 pb-5 text-center">Error Messages</h1>
            <?php
            echo $_GET["errMsg"];
            ?>
          </div>
          <div class="col-md-12">
            <br />
            <hr />
            <h1 class="pt-3 pb-5 text-center">Enquiry Form</h1>
          </div>
          <div class="col-md-12">
            <form method="post" id="insert_form" action="process_order.php" novalidate="novalidate">
              <label for="f_name">First Name:</label>
              <input
                type="text"
                name="f_nameData"
                id="f_nameData"
                value= "<?php echo $firstname;?>"
                class="form-control"
                maxlength="25"
                pattern="^[a-zA-Z]+$"
                required="required"
              />
              <label for="l_name">Last Name:</label>
              <input
                type="text"
                name="l_nameData"
                id="l_nameData"
                value= "<?php echo $lastname;?>"
                class="form-control"
                maxlength="25"
                pattern="^[a-zA-Z]+$"
                required="required"
              />
              <br />
              <br />
              <label for="email">Email:</label>
              <input
                type="email"
                name="emailData"
                id="emailData"
                value= "<?php $email;?>"
                class="form-control"
                required="required"
              />
              <br />
              <fieldset>
                <legend>Address</legend>
                <label for="street">Street Address</label>
                <input
                  type="text"
                  name="streetData"
                  id="streetData"
                value= "<?php echo $street;?>"
                  class="form-control"
                  maxlength="40"
                  required="required"
                />
                <label for="town">Suburb/Town</label>
                <input
                  type="text"
                  name="townData"
                  id="townData"
                value= "<?php echo $town;?>"
                  class="form-control"
                  maxlength="20"
                  required="required"
                />
                <br />
                <label for="state">State:</label>
                <select
                  class="pr-4 form-control"
                  id="stateData"
                  value= "<?php echo $state;?>"
                  name="stateData"
                  required="required"
                >
                <option disabled>None</option>
                  <option value="VIC" <?php if ($_SESSION["stateData"] == "VIC"){echo 'selected';}?>>VIC</option>
                  <option value="NSW" <?php if ($_SESSION["stateData"] == "NSW"){echo 'selected';}?>>NSW</option>
                  <option value="QLD" <?php if ($_SESSION["stateData"] == "QLD"){echo 'selected';}?>>QLD</option>
                  <option value="NT" <?php if ($_SESSION["stateData"] == "NT"){echo 'selected';}?>>NT</option>
                  <option value="WA" <?php if ($_SESSION["stateData"] == "WA"){echo 'selected';}?>>WA</option>
                  <option value="SA" <?php if ($_SESSION["stateData"] == "SA"){echo 'selected';}?>>SA</option>
                  <option value="TAS" <?php if ($_SESSION["stateData"] == "TAS"){echo 'selected';}?>>TAS</option>
                  <option value="ACT" <?php if ($_SESSION["stateData"] == "ACT"){echo 'selected';}?>>ACT</option>
                </select>
                <input type="hidden" name="priceData" value="<?php echo $price;?>">
                <label for="code">Post Code</label>
                <input
                  type="text"
                  name="codeData"
                  id="codeData"
                  value= "<?php echo $code;?>"
                  class="form-control"
                  pattern="^\d{4}$"
                  required="required"
                />
              </fieldset>
              <label for="phone">Phone number</label>
              <input
                type="text"
                name="phoneData"
                id="phoneData"
                value= "<?php echo $phone;?>"
                maxlength="10"
                class="form-control"
                placeholder="Enter your phone number"
                required="required"
              />
              <br />
              <label for="contact">Contact:</label>
              <br />
              <input
                type="radio"
                value="Email"
                name="contactData"
                id="contactData"
                value= "<?php $contact;?>"
                checked="checked"
              />
              <label for="email" class="pr-4">Email</label>
              <input
              type="radio"
              value="post"
              value= "<?php $contact;?>"
              name="contactData" />
              <label for="post" class="pr-4">Post</label>

              <input
              type="radio"
              value="phone"
              value= "<?php $contact;?>"
               name="contactData" />
              <label for="phone">Phone</label>
              <br />
              <br />
              <label for="range">Product</label>
              <select
                class="form-control"
                id="productData"
                name="productData"
                value= "<?php echo $product;?>"
                onchange="calculateAmount(this.value)"
                required="required"
              >
                <option disabled selected>None</option>
                <option value="4000">OLED GX Series ($3999)</option>
                <option value="2500">NanoCell 90 Series ($2499)</option>
                <option value="1500">4K Ultra HD 85 Series ($1499)</option>
                <option value="30000">Signature ZX Series ($29999)</option>
              </select>
              <br />
              <label>Quantity</label>
              <input
                class="form-control"
                id="quantityData"
                value= "<?php echo $quantity;?>"
                name="quantityData"
                min="0"
                type="number"
                placeholder="Quantity"
              />
              <br />
             <br />


              <!-- Payment page  details: -->
              <hr />
              <h1 class="pt-3 pb-5 text-center">Credit Card Details</h1>
               <br />
              <label for="type">Credit Card type:</label>
              <input
                type="text"
                class="form-control"
                name="cardType"
                value= "<?php echo $cardType;?>"
                required="required"
              />
              <br />
              <label for="creditName">Name on Credit Card:</label>
              <input
                type="text"
                class="form-control"
                name="creditName"
                value= "<?php echo $creditName;?>"
                maxlength="40"
                pattern="^[a-zA-Z\s]+$"
                required="required"
              />
              <br />
              <label for="creditNumber">Credit Card Number:</label>
              <input
                type="text"
                class="form-control"
                name="creditNumber"
                value= "<?php echo $creditNumber;?>"
                required="required"
              />
              <br />
              <label for="expiryDate">Credit Card Expiry Date:</label>
              <input
                type="date"
                class="form-control"
                name="expiryDate"
                value= "<?php echo $expiryDate;?>"
                required="required"
              />
              <br />
              <label for="cvv">Card Verification Code:</label>
              <input
                type="password"
                class="form-control"
                id="cvv"
                name="cvv"
                value= "<?php echo $cvv;?>"
                required="required"
              />
              <br />
              <br />
              <button type="submit" class="btn" value="re_submit" id="re_submit">
                Re-Submit
              </button>
              <br />
              <br />

            </form>
          </div>
        </div>
      </div>
    </section>





<?php
include ("footer.php");
?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script type="text/javascript " src="js/part2.js"></script>
  </body>
</html>
