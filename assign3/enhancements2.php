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
              <dt>Location used: Home page</dt>
              <dt>Description:</dt>
              <dd>Use of an Owl Carousel.</dd>
              <dd>
                The function is triggered when the home page loads. The
                programmer has to set the carousel and trigger it using ID's as
                shown in enahncements2.php
              </dd>
              <dt>Reference:</dt>
              <dd>
                <a href="https://owlcarousel2.github.io/OwlCarousel2/"
                  >OwlCarousel</a
                >
              </dd>
              <dt>Code used:</dt>
              <a href="index.php#team"><dd>index.php</dd></a>
            </dl>
            <br />
            <h3>Enhancement 1</h3>
            <dl>
              <dt>Location used: Payment page</dt>
              <dt>Description:</dt>
              <dd>Use of a timer.</dd>
              <dd>
                The function is triggered when the payment page loads.If the
                user doesn't fill the form in 30 sec it will be redirected to
                <enquiry class="php"></enquiry> page. The programmer has to set the timer and
                trigger it using ID's as shown in enahncements2.php
              </dd>
              <dt>Reference:</dt>
              <dd>
                <a href="https://stackoverflow.com/questions/18036926/redirect-to-some-specific-page-after-ending-countdown-timer"
                  >Timer</a
                >
              </dd>
              <dt>Code used:</dt>
              <a href="payment.php#basicUsage"><dd>payment.php</dd></a>
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
