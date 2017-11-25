<!-- Being hours & events html -->

  <!-- Include html header -->
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
    <h2>Check out our cool gifts! </h2>
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
  </div>

  <div class="item-div">
    <div class="item-img-div" id="item-2">
      <span class="buy_btn"><a href="https://www.paypal.com/us/home" target="_blank">BUY</a></span>
      <!-- <img src="images/photos_page/2.jpg"> -->
    </div>
    <span class="item-name">Summerhill Logo T-Shirt</span><br>
    <span class="item-price">$14.00 - $18.00</span>
  </div>

  <div class="item-div">
    <div class="item-img-div" id="item-3">
      <span class="buy_btn"><a href="https://www.paypal.com/us/home" target="_blank">BUY</a></span>
      <!-- <img src="images/photos_page/2.jpg"> -->
    </div>
    <span class="item-name">Hoodie (Black)</span><br>
    <span class="item-price">$25.00</span>
  </div>

  <div class="item-div">
    <div class="item-img-div" id="item-4">
      <span class="buy_btn"><a href="https://www.paypal.com/us/home" target="_blank">BUY</a></span>
      <!-- <img src="images/photos_page/2.jpg"> -->
    </div>
    <span class="item-name">Beer Mugs (3 Sizes)</span><br>
    <span class="item-price">$8.00 - $12.00</span>
  </div>

  <div class="item-div">
    <div class="item-img-div" id="item-5">
      <span class="buy_btn"><a href="https://www.paypal.com/us/home" target="_blank">BUY</a></span>
      <!-- <img src="images/photos_page/2.jpg"> -->
    </div>
    <span class="item-name">Coaster</span><br>
    <span class="item-price">$5.00</span>
  </div>

  <div class="item-div">
    <div class="item-img-div" id="item-6">
      <span class="buy_btn"><a href="https://www.paypal.com/us/home" target="_blank">BUY</a></span>
      <!-- <img src="images/photos_page/2.jpg"> -->
    </div>
    <span class="item-name">Gift Basket</span><br>
    <span class="item-price">$35.00</span>
  </div>

</div>

<!--
<div id="storeflex-wrapper">
    <div>
      <h3><span class="bold">T-Shirt<span></h3>
      <img src="images/tshirt.jpg">
      <p class="price">Price: $16.99 </p>
      <p class="buybutton">Buy now</p>
    </div>
    <div>
      <h3><span class="bold">Beer Mug<span></h3>
      <img src="images/mug.jpg">
      <p class="price">Price: $10.99 </p>
      <p class="buybutton">Buy now</p>
    </div>
    <div>
      <h3><span class="bold">Beer Coaster<span></h3>
      <img src="images/coaster.jpg">
      <p class="price">Price: $5.99 </p>
      <p class="buybutton">Buy now</p>
    </div>
    <div>
      <h3><span class="bold">Gift Basket<span></h3>
      <img src="images/giftbasket.jpg">
      <p class="price">Price: $12.99 </p>
      <p class="buybutton">Buy now</p>
    </div>
</div> -->

<!-- NEW CODE ENDS HERE -->

  <!-- include footer  section -->
  <?php
    include "includes/footer.php";
  ?>

  </div> <!-- end main_container div -->

</body> <!-- end body -->
</html> <!-- end html -->
