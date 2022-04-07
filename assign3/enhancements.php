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
            <h3>HTML enhancement</h3>
            <dl>
              <dt>Location used: Home page</dt>
              <dt>Description:</dt>
              <dd>Use of HTML element card.</dd>
              <dd>
                Cards allow the products to be more visible and
                attractive.Without cards the page seem a litlle blunt.
              </dd>
              <dt>Reference:</dt>
              <dd><a href="https://www.w3schools.com">W3schools</a></dd>
              <dt>Code used:</dt>
              <dd>index.php file line no 243</dd>
            </dl>
            <br />
            <h3>CSS enhancement</h3>
            <dt>Location used: Navbar</dt>
            <dd>Use of hover element in drop down in navbar.</dd>
            <dd>
              It will help the user to have easy access to the drop down
              elements. Moreover, it helps to enhance the beauty of the page as
              it looks more appealing to the eyes. Moreover, the use of
              drop-down divider there helps the user to have a clear difference
              between two drop down elements.
            </dd>
            <dt>Reference:</dt>
            <dd><a href="https://www.w3schools.com">W3schools</a></dd>
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
