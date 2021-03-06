<?php
    include "includes/head.php";
  ?>
  <link rel="stylesheet"
      type="text/css"
      href="styles/store.css"
      media="all">

  <!-- script to load PayPal page on item click -->
  <script src="scripts/store.js" type="text/javascript"></script>

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
    <h2>Check out our featured products! </h2>
  </div>
</div>

<div id="merchandise-div">

  <div class="item-div">
    <div class="item-img-div" id="item-1">
      <span class="buy_btn"><a href="https://www.paypal.com/us/home" target="_blank">BUY</a></span>
      <!-- <img src="images/photos_page/15.jpg"> -->
    </div>
    <span class="item-name">Summerhill Hops T-Shirt</span><br>
    <a><span class="item-price">$14.00</span></a>
    <p class="item-description">Our new mixed-blend T-shirts are comfortable and soft to the touch.
    The logo was the selected winner of our 2016 T-shirt design contest.</p>
  </div>

  <div class="item-div">
    <div class="item-img-div" id="item-2">
      <span class="buy_btn"><a href="https://www.paypal.com/us/home" target="_blank">BUY</a></span>
      <!-- <img src="images/photos_page/2.jpg"> -->
    </div>
    <span class="item-name">Summerhill Logo T-Shirt</span><br>
    <span class="item-price">$14.00 - $18.00</span>
    <p class="item-description">Our original 100% Cotton T-shirt, branded with the
    Summerhill logo. Offered in ecru and seagreen, for both men and women. They'll
    make a wonderful gift or souvenir from your visit.Available is short-sleeve and
    long-sleeve varieties.</p>
  </div>

  <div class="item-div">
    <div class="item-img-div" id="item-3">
      <span class="buy_btn"><a href="https://www.paypal.com/us/home" target="_blank">BUY</a></span>
      <!-- <img src="images/photos_page/2.jpg"> -->
    </div>
    <span class="item-name">Hoodie (Black)</span><br>
    <span class="item-price">$25.00</span>
    <p class="item-description">Supremely cozy and wonderfully warm, our Summerhill sweatshirts
    are the perfect accessory for winter weather.</p>
  </div>

  <div class="item-div">
    <div class="item-img-div" id="item-4">
      <span class="buy_btn"><a href="https://www.paypal.com/us/home" target="_blank">BUY</a></span>
      <!-- <img src="images/photos_page/2.jpg"> -->
    </div>
    <span class="item-name">Beer Mugs (3 Sizes)</span><br>
    <span class="item-price">$8.00 - $12.00</span>
    <p class="item-description">Give the beer connoisseur in your life the gift they'll love
      using for years to come with the "Summerhill Brewing" Beer Mug. Available in 10, 16 and 22
      ounce sizes.</p>
  </div>

  <div class="item-div">
    <div class="item-img-div" id="item-5">
      <span class="buy_btn"><a href="https://www.paypal.com/us/home" target="_blank">BUY</a></span>
      <!-- <img src="images/photos_page/2.jpg"> -->
    </div>
    <span class="item-name">Coaster</span><br>
    <span class="item-price">$5.00</span>
    <p class="item-description">Grab one of our absorbant, non-slip coasters to place
      under your drinks. Comes in a set of 4-coasters.</p>
  </div>

  <div class="item-div">
    <div class="item-img-div" id="item-6">
      <span class="buy_btn"><a href="https://www.paypal.com/us/home" target="_blank">BUY</a></span>
      <!-- <img src="images/photos_page/2.jpg"> -->
    </div>
    <span class="item-name">Gift Basket</span><br>
    <span class="item-price">$35.00</span>
    <p class="item-description">Our baskets make excellent presents for those special occassions. They include
    our signature beer mugs, growlers, quality chocolates, artisanal cheeses, high-end smoked meats, a gallon of
    our hand-crafter beer, and an assortment of other goodies. And the best part? All products
    are 100% local. Don't forget to shop small!</p>
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
