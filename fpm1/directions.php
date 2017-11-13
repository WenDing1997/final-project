<!-- Being hours & events html -->
<html>

  <!-- Include html header -->
  <?php
    include "includes/head.php";
  ?>
  <link rel="stylesheet" type="text/css" href="styles/directions.css" media="all"/>



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
    <h2>We are easy to find!</h2>
  </div>
</div>

<div id="main_div">
  <div id="map"></div>
  <script src="scripts/map.js" type="text/javascript"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwTYp1sMRX-vkBjGfPQbTDpDyyEojZStA&callback=myMap"></script>

  <div id="main_box">
    <div id="main_text">
      <p>Summerhill Brewing<p>
      <p>384 Champlin Road<p>
      <p>Groton, NY 13073<p>
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
