<!-- Begin hours & events html -->

  <!-- Include html header -->
  <?php
    include "includes/head.php";
  ?>
  <link rel="stylesheet" type="text/css" href="styles/directions.css" media="all"/>

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
    <h2>We're easy to find!</h2>
  </div>
</div>

<div id="address-info-flexbox">
  <div class="address-flex-item">
    <div class="address-img" id="map-marker">
      <!-- Source: https://image.flaticon.com/icons/png/512/33/33622.png -->
      <img id="map-marker-img" src="images/map_marker_icon.png" alt="map-marker-img" />
    </div>
    <div class="address-text">
      <div>
        <a href="https://www.google.com/maps/place/384+Champlin+Rd,+Groton,+NY+13073/@42.6363939,-76.3029237,15z/data=!4m5!3m4!1s0x89da7294d542dcc1:0x12c746c9f53de647!8m2!3d42.63639!4d-76.294169?hl=en" target="_blank" />
          <p>384 Champlin Road<br>Groton, NY 13073</p>
        </a>
      </div>
    </div>
  </div>

  <div class="address-flex-item">
    <div class="address-img">
      <!-- Source: https://openclipart.org/image/2400px/svg_to_png/262221/phone25.png -->
      <img src="images/telephone_icon.png" alt="telephone_img" />
    </div>
    <div class="address-text">
      <a href="tel:6075916148"><p>(607) 591-6148</p></a>
    </div>
  </div>

  <div class="address-flex-item">
    <div class="address-img">
      <!-- Source: https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/FP_Satellite_icon.svg/1024px-FP_Satellite_icon.svg.png -->
      <img src="images/gps_icon.png" alt="map_marker_img" />
    </div>
    <div class="address-text">
      <div>
        <p>(latitude) 42.6364,<br>(longitude) -76.2942</p>
      </div>
    </div>
  </div>

</div>

<div id="tip">
  <p>Tip: Sometimes GPS devices can lead you astray if you just put in the
    brewery address. If you're lost, try using the GPS coordinates we provide
    instead. Or give us a quick call, we're always glad to direct you. Or
    send out a search party.</p>
</div>

<div id="main_div">
  <div id="map"></div>
  <script src="scripts/map.js" type="text/javascript"></script>
  <script id="googlemap" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwTYp1sMRX-vkBjGfPQbTDpDyyEojZStA&callback=myMap"></script>

<div id="directions-info-flexbox">

  <div class="outer-flex-item" id="how-to-get-here-flexbox">

    <div class="inner-flex-item">
      <h2>Coming from Central Ithaca</h2>
      <h4>About 30 min.</h4>
      <ul class="directions-list">
        <li>Take NY-13 to Rt. 366</li>
        <li>Rt. 366 will turn into Fall Creek Rd</li>
        <li>After about 15 minutes, turn left unto Stevens Rd</li>
        <li>Stevens Rd will turn into Champlin Rd</li>
        <li>Follow Champlin Rd past Rt. 222 for about 5 miles</li>
        <li>The brewery will be on your right!</li>
        <li>(P.S. if you pass Rt. 90 you've gone too far!)</li>
      <ul>
    </div>

    <div class="inner-flex-item">
      <h2>Coming from Cortland</h2>
      <h4>About 15 min.</h4>
      <ul class="directions-list">
        <li>Take Kinney Gulf Rd (off from Rt. 222, Main Street)</li>
        <li>Follow Kinney Gulf Rd to Rt. 90</li>
        <li>Turn left unto Rt. 90</li>
        <li>Follow Rt. 90 for 2 miles until Champlin Rd</li>
        <li>Turn left on Champlin Rd, past Steve's Auto Services</li>
        <li>The brewery will be on your left!</li>
      <ul>
    </div>

    <!-- <div class="inner-flex-item">
      <p>P2</p>
    </div> -->

  </div>

  <div class="outer-flex-item" id="custom-map">
    <img src="images/map.jpg" alt="custom-map" />
  </div>

</div>

<!-- <div id="map2">
  <div id="map2_text">
    <p>We also drew a map for you!<p>
  </div>
  <img src="images/map.jpg" alt="Google-Map" />
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
