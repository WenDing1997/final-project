<?php
    include "includes/head.php";
  ?>
  <link rel="stylesheet"
        type="text/css"
        href="styles/find-our-beers.css"
        media="all">
</head>

<body>
  <!-- Begin main_container for all body elements -->
  <div id="main_container">

  <!-- include header section, navigation -->
  <?php
    include "includes/header.php";
  ?>

<!-- NEW CODE GOES HERE -->
  <div id="tagline_div">
    <div id="tagline">
      <h2>Love our beer? Here are some local markets that carry our ales and lagers.</h2>
    </div>
  </div>

  <div id="main_flex_wrapper_2">

    <div class="sub_flex_wrapper_2">
      <div class="spacer_div"></div>
      <div class="market_img">
        <img src="images/brookton.jpg" alt="brookton_market" />
      </div>
      <div class="market_description">
        <div>
          <h2>Brookton's Market</h2>
          <p class="hours">Hours:</p>
          <ul>
            <li>Monday - Thursday: 7:30am - 9pm</li>
            <li>Friday: 7:30am - 11pm</li>
            <li>Satruday: 8:30am - 11pm</li>
            <li>Sunday: 9:00am - 7pm</li>
          </ul>
          <p>607-539-7900<br>info@brooktonsmarket.com<br>491 Brooktondale Road, Brooktondale, NY 14817<p>
          <p><a href="http://www.brooktonsmarket.com/" target="_blank">www.brooktonsmarket.com</a></p>
        </div>
      </div>
    </div>

    <div class="sub_flex_wrapper_2">
      <div class="spacer_div"></div>
      <div class="market_img">
        <img src="images/ic_gateway.png" alt="brookton_market" />
      </div>
      <div class="market_description">
        <div>
          <h2>Ithaca Coffee Company @ Gateway</h2>
          <p class="hours">Hours:</p>
          <ul>
            <li>Monday - Friday: 7:00am - 9pm</li>
            <li>Satruday: 8:00am - 9pm</li>
            <li>Sunday: 8:00am - 6pm</li>
          </ul>
          <p>607-257-2626<br>info@ithacacoffee.com<br>311 E. Green St.Ithaca, NY 14850<p>
          <p><a href="https://www.ithacacoffee.com/our-stores/our-taverns">www.ithacacoffee.com</a></p>
        </div>
      </div>
    </div>

    <div class="sub_flex_wrapper_2">
      <div class="spacer_div"></div>
      <div class="market_img">
        <img src="images/ic_triphammer.jpg" alt="ic@triphammer" />
      </div>
      <div class="market_description">
        <div>
          <h2>Ithaca Coffee Company @ Triphammer</h2>
          <p id="hours">Hours:</p>
          <ul>
            <li>Monday - Friday: 7:00am - 9pm</li>
            <li>Satruday: 8:00am - 9pm</li>
            <li>Sunday: 8:00am - 6pm</li>
          </ul>
          <p>607-257-2626<br>info@ithacacoffee.com<br>Triphammer Marketplace 2255 N.Triphammer Rd.<br>Ithaca, NY 14850<p>
          <p><a href="https://www.ithacacoffee.com/our-stores/our-taverns">www.ithacacoffee.com</a></p>
        </div>
      </div>
    </div>

  </div>

<!-- NEW CODE ENDS HERE -->


  <!-- include footer  section -->
  <?php
    include "includes/footer.php";
  ?>

  </div> <!-- end main_container div -->

</body> <!-- end body -->
</html> <!-- end html -->
