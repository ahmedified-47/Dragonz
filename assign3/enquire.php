<!DOCTYPE html>
<html lang="en">
<?php
include ("header.php");
include("navbar.php");
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
            <h1 class="pt-3 pb-5 text-center">Enquiry Form</h1>
          </div>
          <div class="col-md-12">
            <form method="post" id="insert_form" action="payment.php">
              <label for="f_name">First Name:</label>
              <input
                type="text"
                name="f_name"
                id="f_name"
                class="form-control"
                maxlength="25"
                pattern="^[a-zA-Z]+$"
                required="required"
              />
              <label for="l_name">Last Name:</label>
              <input
                type="text"
                name="l_name"
                id="l_name"
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
                name="email"
                id="email"
                class="form-control"
                required="required"
              />
              <br />
              <fieldset>
                <legend>Address</legend>
                <label for="street">Street Address</label>
                <input
                  type="text"
                  name="s_address"
                  id="street"
                  class="form-control"
                  maxlength="40"
                  required="required"
                />
                <label for="town">Suburb/Town</label>
                <input
                  type="text"
                  name="town"
                  id="town"
                  class="form-control"
                  maxlength="20"
                  required="required"
                />
                <br />
                <label for="state">State:</label>
                <select
                  class="pr-4 form-control"
                  id="state"
                  name="state"
                  required="required"
                >
                  <option disabled selected>None</option>
                  <option >VIC</option>
                  <option>NSW</option>
                  <option>QLD</option>
                  <option>NT</option>
                  <option>WA</option>
                  <option>SA</option>
                  <option>TAS</option>
                  <option>ACT</option>
                </select>
                <label for="code">Post Code</label>
                <input
                  type="text"
                  name="code"
                  id="code"
                  class="form-control"
                  pattern="^\d{4}$"
                  required="required"
                />
              </fieldset>
              <label for="phone">Phone number</label>
              <input
                type="text"
                name="phone"
                id="phone"
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
                name="contact"
                id="contact"
                checked="checked"
              />
              <label for="email" class="pr-4">Email</label>
              <input type="radio" value="post" name="contact" />
              <label for="post" class="pr-4">Post</label>
              <input type="radio" value="phone" name="contact" />
              <label for="phone">Phone</label>
              <br />
              <br />
              <label for="range">Product</label>
              <select
                class="form-control"
                id="product"
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
                id="quantity"
                name="quantity"
                min="0"
                type="number"
                placeholder="Quantity"
              />
              <br />
              <label>Product Features:</label>
              <br />
              <input type="checkbox" name="feature[]" checked="checked" />
              <label>Sculpture Design</label>
              <br />
              <input type="checkbox" name="feature[]" />
              <label
                >Self-lighting OLED: Perfect Black, Intense Color, Infinite
                Contrast</label
              >
              <br />

              <input type="checkbox" name="feature[]" />
              <label>webOS & ThinQ AI w/ Hands-Free Voice Control</label>
              <br />

              <input type="checkbox" name="feature[]" />
              <label>Real 4K Display</label>
              <br />

              <input type="checkbox" name="feature[]" />
              <label>Native 120Hz</label>

              <br />
              <input type="checkbox" name="feature[]" />
              <label>α7 Gen 3 Processor 4K with AI Picture & AI Sound</label>
              <br />
              <label for="comment_field">Comments:</label>
              <br />
              <textarea
                row="10"
                col="20"
                name="comment_field"
                id="comment_field"
                class="pb-5 form-control"
                placeholder="Anything you want to share in detail"
              ></textarea>
              <br />
              <br />
              <button type="submit" class="btn" value="Submit" id="submitForm">
                Pay Now
              </button>
              <a href="enquire.php">
                <input class="btn" id="reset" value="Reset" />
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
    <script type="text/javascript " src="js/part2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  </body>
</html>
