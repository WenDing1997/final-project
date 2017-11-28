<?php
    include "includes/head.php";
  ?>

  <!-- Link events.css -->
  <link rel="stylesheet"
        type="text/css"
        href="styles/events.css"
        media="all">

  <!-- to manage past-events toggle -->
  <script src="scripts/past-events.js" type="text/javascript"></script>

</head>

<body>
  <!-- Begin main_container for all body elements -->
  <div id="main_container">

  <!-- include header section, navigation -->
  <?php
    include "includes/header.php";
  ?>

<!-- NEW CODE GOES HERE -->
  <div id="note">
    <p><span class="italic">Note:</span>  We are just starting out
      with plans to expand in the near future. Because of the size of our
      current brew system and having a shared space for public beer tasting
      and brewing, we are not able to be open consistently. Please check our
      website and <a href="https://www.facebook.com/Summerhill.brewing/"
      target="_blank">Facebook page</a> for hours and openings. We sincerely
      appreciate your patience and understanding!</p>
  </div>

  <?php
    // create new xml DOMDocument
    $xmlDOM=new DOMDocument();
    // load configuration file for events page
    $xmlDOM->load("config.xml");

    $dates = $xmlDOM -> getElementsByTagName('date');
    $times = $xmlDOM -> getElementsByTagName('time');

    // get date/time nodes from config.xml
    $date1 = $dates->item(0)->nodeValue;
    $time1 = $times->item(0)->nodeValue;
    $date2 = $dates->item(1)->nodeValue;
    $time2 = $times->item(1)->nodeValue;
    $date3 = $dates->item(2)->nodeValue;
    $time3 = $times->item(2)->nodeValue;

  ?>

  <div class="flex-container">
    <div class="sub-div">
      <h2>Upcoming Tasting Room Hours
        <span id="btn"><a href="directions.php">Get Directions<span id="arrow">&#8680;</span></a></span>
      </h2>
      <p class="date-and-time-info">
        <span class="date"><?php echo($date1); ?></span><br>
        <span class="italic time"><?php echo($time1); ?></span></p>
      <p class="date-and-time-info">
        <span class="date"><?php echo($date2); ?></span><br>
        <span class="italic time"><?php echo($time2); ?></span></p>
      <p class="date-and-time-info">
        <span class="date"><?php echo($date3); ?><br></span>
        <span class="italic time"><?php echo($time3); ?></span></p>

    </div>
​    <div class="sub-div">
      <h2>Upcoming Events</h2>
      <p class="date-and-time-info">
        <span class="bold events-title">BBQ Christmas in Moravia</span><br>
        <span class="date">Saturday, December 2nd</span><br>
        <span class="italic time">10am to 10pm</span></p>
      <p class="date-and-time-info">
        <span class="bold events-title">"Cards and a Cold One" with Jess B. from "Card-iology"</span><br>
        <span class="date">Sunday, December 3nd</span><br>
        <span class="italic time">3pm to 6pm</span></p>
    </div>
    <!-- Embed Google Calendar -->
  </div>

  <div id="calendar">
    <h2>Calendar</h2>
    <iframe id="iframe" src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;height=500&amp;wkst=1&amp;hl=en&amp;bgcolor=%23FFFFFF&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%232F6309&amp;ctz=America%2FNew_York" style="border-width:0" frameborder="0" scrolling="no"></iframe>
  </div>

  <div class="flex-container past-events">
    <div id="past-events-title">
      <h2>Past Events <span class="dt">&#x25BC;</span><span class="rt">&#x25B6;</span></h2>
    </div>
    <div class="sub-div" id="past-events-container">
      <p class="date-and-time-info">
        <span class="date">Wednesday, November 22nd</span><br>
        <span class="italic time">2pm - 8pm</span></p>
      <p class="date-and-time-info">
        <span class="date">Friday, November 24th</span><br>
        <span class="italic time">1pm - 4pm</span></p>
      <p class="date-and-time-info">
        <span class="date">Saturday, November 25th<br></span>
        <span class="italic time">TBD</span></p>
    </div>

    <!-- <div class="sub-div">
      <h2>Past Events</h2>
      <p class="date-info">December 2nd 10am to 10pm:  BBQ Christmas in Moravia</p>
      <p class="date-info">December 3rd 3pm to 6pm: "Cards and a Cold One" with Jess B. from "Card-iology"</p>
    </div> -->

  </div>

<!-- NEW CODE ENDS HERE -->


  <!-- include footer  section -->
  <?php
    include "includes/footer.php";
  ?>

  </div> <!-- end main_container div -->

</body> <!-- end body -->
</html> <!-- end html -->
