
<!DOCTYPE html>
<html lang="en">
<?php
include ("header.php");
include("navbar.php");
?>
  <body>


    <!-- BACKGROUND SECTION START HERE  -->
    <section class="background">
      <div class="container-fluid bg_1 pt-5 mt-5 pb-5 mb-5">
        <div class="row pb-5 mb-5">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <a href="https://www.lg.com/us/tvs">
              <h1 class="bg_heading pt-5 mt-5">
                Goto Grocery Store
              </h1></a
            >
            <p class="text_bg pt-3 pb-3">
              A Everyday Grocery
            </p>
            <a href="product.php"
              ><button class="btn">Check Product List</button></a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- Owl Carousel starts here  -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br />
          <hr />
          <a id="team">
            <h1 class="pt-3 pb-5 text-center">Team Partners</h1>
          </a>
        </div>
      </div>
    </div>
    <div class="owl-carousel container mt-3 pt-5 text-center">
      <div>
        <div class="card border-0" style="width: 18rem">
          <img
            src="images/person/2.jpeg"
            class="card-img-top rounded-circle w-50 mx-auto"
            alt="..."
          />
          <div class="card-body border-right border-left">
            <h5 class="card-title">Aidan Cheung</h5>
            <p class="pt-4" style="opacity: 0.7">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia
            </p>
            <h5 class="pt-3">Aidan Cheung</h5>
            <h6 class="pt-2" style="opacity: 0.7">System Analyst</h6>
          </div>
        </div>
      </div>

      <div>
        <div class="card border-0" style="width: 18rem">
          <img
            src="images/person/1.jpeg"
            class="card-img-top rounded-circle w-50 mx-auto"
            alt="..."
          />
          <div class="card-body border-right border-left">
            <h5 class="card-title">Ahmed</h5>
            <p class="pt-4" style="opacity: 0.7">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia
            </p>
            <h5 class="pt-3">Ahmed</h5>
            <h6 class="pt-2" style="opacity: 0.7">Marketing Manager</h6>
          </div>
        </div>
      </div>

      <div>
        <div class="card border-0" style="width: 18rem">
          <img
            src="images/person/3.jpeg"
            class="card-img-top rounded-circle w-50 mx-auto"
            alt="..."
          />
          <div class="card-body border-right border-left">
            <h5 class="card-title">Ayesha Akhter</h5>
            <p class="pt-4" style="opacity: 0.7">
              Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia
            </p>
            <h5 class="pt-3">Ayesha Akhter</h5>
            <h6 class="pt-2" style="opacity: 0.7">Web Developer</h6>
          </div>
        </div>
      </div>
    </div>

    <!-- News Letter starts here -->

    <section class="newsletter pt-5">
      <div class="container-fluid pb-5 bg-danger">
        <div class="row text-center">
          <div class="col-md-6">
            <h3 class="pt-5 text-white">Subcribe to our Newsletter</h3>
            <h6 class="card-text text-white pt-3">
              Get e-mail updates about our latest shops and special offers
            </h6>
          </div>
          <div class="col-md-6 pt-5 pr-3">
            <div class="input-group pt-3">
              <input
                class="form-control"
                type="email"
                placeholder="Enter Email Address"
              />
              <button class="btn">Subscribe</button>
            </div>
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
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/enhancements.js"></script>
  </body>

</html>
