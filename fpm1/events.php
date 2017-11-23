<!-- Being hours & events html -->

  <!-- Include html header -->
  <?php
    include "includes/head.php";
  ?>

  <!-- Link events.css -->
  <link rel="stylesheet"
        type="text/css"
        href="styles/events.css"
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
  <!-- <div id="tagline_div">
    <div id="tagline">
      <h2>Upcoming Hours and Events</h2>
    </div>
  </div> -->

    <div id="note">
      <p><span class="italic">NOTE:</span>  We are just starting out
        with plans to expand in the near future. Because of the size of our
        current brew system and having a shared space for public beer tasting
        and brewing, we are not able to be open consistently. Please check our
        website and Facebook page for hours and openings. We sincerely
        appreciate your patience and understanding!</p>
    </div>

  <div class="flex-container">
    <div class="sub-div">
      <h2>Upcoming Tasting Room Hours</h2>
      <span class="date-span"><p>November 22nd hours 2pm to 8pm</p></span>
      <span time="time_span"></span>
      <p>November 24th hours 1pm to 4pm</p>
      <p>November 25th hours TBD</p>

    </div>
​    <div class="sub-div">
      <h2>Upcoming Events</h2>
      <p>December 2nd 10am to 10pm:  BBQ Christmas in Moravia</p>
      <p>December 3rd 3pm to 6pm: "Cards and a Cold One" with Jess B. from "Card-iology"</p>
    </div>
    <!-- Embed Google Calendar -->
    <h2>Calendar</h2>
    <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;height=500&amp;wkst=1&amp;hl=en&amp;bgcolor=%23FFFFFF&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%232F6309&amp;ctz=America%2FNew_York" style="border-width:0" frameborder="0" scrolling="no"></iframe>
  </div>
<!-- NEW CODE ENDS HERE -->


  <!-- include footer  section -->
  <?php
    include "includes/footer.php";
  ?>

  </div> <!-- end main_container div -->

</body> <!-- end body -->
</html> <!-- end html -->
