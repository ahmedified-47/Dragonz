
<!DOCTYPE html>
<html lang="en">
<?php
include ("header.php");
include("navbar.php");
?>

  <body>

    <!-- BACKGROUND SECTION START HERE  -->
    <section class="background">
      <div class="container-fluid product_bg_1 pt-5 mt-5 pb-5">
        <div class="row pb-5 mb-5">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <a href="https://www.lg.com/us/tvs">
              <h1 class="bg_heading pt-5 mt-5">Real 4K Made by True Colors</h1>
            </a>
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

    <!-- Payment details starts here -->
    <section class="payment_details">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <br />
            <hr />
            <h1 class="pt-3 pb-5 text-center">Your Details</h1>
          </div>
          <div class="col-md-12">
            <form
              method="post"
              action="process_order.php"
              novalidate="novalidate"
            >
              <label>First Name: </label>
              <input type="text" class="form-control" name="f_nameData" id="f_nameData" readonly>
              <label>Last Name: </label>
              <input type="text" class="form-control" name="l_nameData" id="l_nameData" readonly>
              <label>Email: </label>
              <input type="text" class="form-control" name="emailData" id="emailData" readonly>
              <label>Street: </label>
              <input type="text" class="form-control" name="streetData" id="streetData" readonly>
              <label>Suburb: </label>
              <input type="text" class="form-control" name="townData" id="townData" readonly>
              <label>State: </label>
              <input type="text" class="form-control" name="stateData" id="stateData" readonly>
              <label>Post Code: </label>
              <input type="text" class="form-control" name="codeData" id="codeData" readonly>
              <h5>Phone Number: </h5>
              <input type="text" class="form-control" name="phoneData" id="phoneData" readonly>
              <label>Contact Preference: </label>
              <input type="text" class="form-control" name="contactData" id="contactData" readonly>
              <label>Product: </label>
              <input type="text" class="form-control" name="productData" id="productData" readonly>
              <label>Quantity: </label>
              <input type="text" class="form-control" name="quantityData" id="quantityData" readonly>
              <label>Product Price: </label>
              <input type="text" class="form-control" name="priceData" id="priceData" readonly>
              <br />
              <hr />

              <h1 class="pt-3 pb-5 text-center">Credit Card Details</h1>

              <div class="text-center">
                <h1 id="basicUsage">00:00:00</h1>
                <small class="text-danger"
                  >This page will redrict in 30s.</small
                >
              </div>

              <label for="type">Credit Card type:</label>
              <input
                type="text"
                class="form-control"
                id="cardType"
                name="cardType"
                required="required"
              />
              <br />
              <label for="creditName">Name on Credit Card:</label>
              <input
                type="text"
                class="form-control"
                id="creditName"
                name="creditName"
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
                id="creditNumber"
                required="required"
              />
              <br />
              <label for="expiryDate">Credit Card Expiry Date:</label>
              <input
                type="date"
                class="form-control"
                name="expiryDate"
                id="expiryDate"
                required="required"
              />
              <br />
              <label for="cvv">Card Verification Code:</label>
              <input
                type="password"
                class="form-control"
                name="cvv"
                id="cvv"
                required="required"
              />
              <br />
              <br />
              <button type="submit" class="btn" value="Submit"  name="checkout" id="">
                Check Out
              </button>
              <a href="index.php">
                <input class="btn" id="reset" value="Cancel Order" />
              </a>
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
    <script type="text/javascript" src="js/part2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/easytimer@1.1.1/src/easytimer.min.js"></script>
    <script type="text/javascript" src="js/enhancements.js"></script>
    <!-- <script>
      var timer = new Timer();
      timer.start();

      timer.addEventListener("secondsUpdated", function (e) {
        $("#basicUsage").html(timer.getTimeValues().toString());
      });

      setInterval(function () {
        window.location.href = "enquire.php";
      }, 60000);
    </script> -->
  </body>
</html>
