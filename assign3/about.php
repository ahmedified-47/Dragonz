<!DOCTYPE html>
<html lang="en">
<?php
include ("header.php");
include("navbar.php");
?>
  <body>

    <!-- BACKGROUND SECTION START HERE  -->
    <section class="background">
      <div class="container-fluid about_bg pt-5 mt-5 pb-5 mb-5">
        <div class="row pb-5 mb-5">
          <div class="col-md-1"></div>
          <div class="col-md-4">
            <h1 class="bg_heading pt-5 mt-5">About Me :)</h1>
            <p class="text_bg pt-3 pb-3">
              Finding ways to balance these strands within us with the same
              gentleness and realness reveals and brings a deeper sense of
              authenticity to our actions. This ultimately supports our own and
              each other's inner nature with what it needs to flourish.
            </p>
            <a href="index.php"><button class="btn">Go to home</button></a>
          </div>
        </div>
      </div>
    </section>

    <!-- About me  -->
    <section class="about">
      <div class="container pb-3">
        <div class="row">
          <div class="col-md-12">
            <hr />
            <h1 class="text-center pb-5">About me</h1>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6">
            <dl>
              <dt class="product_heading">Name:</dt>
              <dd>Muhammad Ahmed Javed</dd>
              <dt class="product_heading">Student ID:</dt>
              <dd>103171624</dd>
              <dt class="product_heading">Course:</dt>
              <dd>Bachelor of computer science</dd>
              <dt class="product_heading">Email:</dt>
              <dd><a href="mailto:">103171624@student.swin.edu.au</a></dd>
            </dl>
            <p class="product_heading">Favourite Books:</p>
            <ol>
              <li>Forty rules of love</li>
              <li>The subtle art</li>
            </ol>
          </div>
          <div class="col-md-5">
            <figure>
              <img class="rounded img-fluid" src="images/person/me.jpg" />
            </figure>
          </div>

          <div class="col-md-12 text-center pt-5">
            <hr />
            <h1 class="pb-3">My Timetable</h1>
            <table
              class="table table-striped table-bordered table-hover text-center"
            >
              <tr>
                <th>Time</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
              </tr>
              <tr>
                <td>0830-1030</td>
                <td>-</td>
                <td>-</td>
                <td class="programming">COS10009 <br />Lab-01</td>
                <td class="programming">COS10009 <br />Workshop 2</td>
                <td>-</td>
                <td>-</td>
              </tr>
              <tr>
                <td>1030-1230</td>
                <td class="web">COS10011 <br />Live Online</td>
                <td class="programming">COS10009 <br />Live Online</td>
                <td class="web">COS10011 <br />Lab-01</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
              </tr>
              <tr>
                <td>1230-1430</td>
                <td>-</td>
                <td>-</td>
                <td class="cle">COS10003 <br />Live Online</td>
                <td class="programming">COS10009 <br />Lab-02</td>
                <td class="programming">COS10009 <br />Workshop 2</td>
                <td class="network">TNE10005 <br />Practical 1</td>
              </tr>
              <tr>
                <td>1430-1630</td>
                <td>-</td>
                <td class="cle">COS10003<br />Tutorial 1</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
              </tr>
              <tr>
                <td>1630-1830</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
              </tr>
              <tr>
                <td>1830-2030</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td class="network">TNE1005 <br />Live Online</td>
              </tr>
            </table>
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
