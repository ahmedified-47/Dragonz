<!DOCTYPE html>
<html lang="en">
<?php
include ("header.php");
include("navbar.php");
?>
  <body>


    <!-- BACKGROUND SECTION START HERE  -->
    <section class="background enhancement_bg">
      <div class="container-fluid pt-5 mt-5 pb-5 mb-5">
        <div class="row pb-5 mb-5">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <h1 class="bg_heading pt-5 mt-5">Enhancements!</h1>
            <p class="text_bg pt-3 pb-3">
              “All we are doing is looking at the timeline from the moment a
              customer gives us an order to the point we collect the cash. And
              we are reducing that timeline in the value stream by removing non
              value-added wastes.”
            </p>
            <a href="product.php"
              ><button class="btn">Shop OLED TVS</button></a
            >
          </div>
        </div>
      </div>
    </section>

    <section class="enhancements">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <hr />
            <h1 class="text-center pb-5">Enhancements</h1>
          </div>
          <div class="col-md-12 pb-5">
            <h3>Enhancement 1</h3>
            <dl>
              <dt>Location used: Manager page</dt>
              <dt>Description:</dt>
              <dd>Use of a a login form.</dd>
              <dd>
              a “Manager registration” page with server side validation.Create a “Manager Log-in” page to use the stored data, and control access to the managerweb pages. Ensure the manager web page cannot be entered directly using a URL.Create a “Manager Log-out” page.Provide a ‘log-out’ link on the manager page if ‘logged in’.
              </dd>
              <dt>Code used:</dt>
              <a href="manager_login.php"><dd>Manager Login </dd></a>
            </dl>
            <br>
            <br>
            <h3>Enhancement 2</h3>
            <dl>
              <dt>Location used: Manager page</dt>
              <dt>Description:</dt>
              <dd>Use of PHP with ajax to update status value in form.</dd>
              <dt>Location used:</dt>
              <dd>In manager.php in the order details table.</dd>
              <dt>Code used:</dt>
              <a href="manager_login.php"><dd>Ajax </dd></a>
            </dl>
          </div>
        </div>
      </div>
    </section>

<?php
include ("footer.php");
?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  </body>
</html>
