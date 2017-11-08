<!-- Being homepage html -->
<html>

  <!-- Include html header -->
  <?php
    include "includes/head.php";
  ?>

  <body>
    <!-- Begin main_container for all body elements -->
    <div id="main_container">

    <!-- include header section, navigation -->
    <?php
      include "includes/header.php";
    ?>

    <div class="slideshow">

      <!-- <div class="slideshow_img">
        <img class="slide" src="images/Bar_Images/bottles.JPG" alt="bottles" />
      </div> -->

      <div class="slideshow_img">
        <img class="slide" src="images/Bar_Images/flight.JPG" alt="bottles" />
      </div>
    </div>

    <section id="info">

      <div id="info_div">
        <div class="flex_item" id="item1">
          <div id="events_title">UPCOMING EVENTS</div>
          <div class="event">
            <p class="date">Friday, November 3rd</p>
            <p>4p to 8p @ Stonehedges Golf Course</p>
          </div>
          <div>
            <p class="date">Saturday, November 4th</p>
            <p>4p to 8p @ CNY Power Sports</p>
          </div>
        </div>

        <div class="flex_item" id="item2">
          <div id="direction_title">DIRECTIONS</div>
          <p>384 Champlin Road</br>Groton, NY 13073</br></p>
          <p>(607) 591-6148</p>
        </div>
      </div>

    </section>  <!-- end info section -->

    <!-- include footer  section -->
    <?php
      include "includes/footer.php";
    ?>

    </div>   <!-- end main_container div -->


  </body>  <!-- end body element -->

</html>  <!-- end html -->
