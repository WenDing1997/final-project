<!-- Being homepage html -->

  <!-- Include html header -->
  <?php
    include "includes/head.php";
  ?>

  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet"
        type="text/css"
        href="styles/index.css"
        media="all">

        <!-- Load slideshow script-->
        <script src="scripts/slideshow.js" type="text/javascript"></script>

</head>

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

    <div class="slideshow_img w3-content w3-section">
      <img class="slide w3-animate-left" src="images/Bar_Images/flight.JPG" alt="flight" />
      <img class="slide w3-animate-left" src="images/Bar_Images/menu.JPG" alt="menu" />
      <img class="slide w3-animate-left" src="images/Bar_Images/music.JPG" alt="full bar" />
      <img class="slide w3-animate-left" src="images/Bar_Images/bottles.JPG" alt="bottles" />
      <img class="slide w3-animate-left" src="images/Bar_Images/shop.JPG" alt="bar talk" />
      <ul id="slideshow_btns">
        <li><button class="btn" id="btn_1"></button></li>
        <li><button class="btn" id="btn_2"></button></li>
        <li><button class="btn" id="btn_3"></button></li>
        <li><button class="btn" id="btn_4"></button></li>
        <li><button class="btn" id="btn_5"></button></li>
      </ul>

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
        <div id="address">
          <div>
            <p>384 Champlin Road<br>Groton, NY 13073<br></p>
            <p>Tel: (607) 591-6148</p>
            <button id="map_link" onclick="location.href='directions.php'">Find us on a map!</button>
          </div>
        </div>
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
