<!-- Being hours & events html -->
<html>

  <!-- Include html header -->
  <?php
    include "includes/head.php";
  ?>

  <!-- Link events.css -->
  <link rel="stylesheet"
        type="text/css"
        href="styles/events.css"
        media="all">

<body>
  <!-- Begin main_container for all body elements -->
  <div id="main_container">

  <!-- include header section, navigation -->
  <?php
    include "includes/header.php";
  ?>

<!-- NEW CODE GOES HERE -->
  <div id="title_div">
    <div id="title">
      <h2>Upcoming News and Events</h2>
    </div>
  </div>

  <div class="flex-container">
    <div class="sub-div">
      <h3>Special Hours</h3>
      <h4>November 22nd hours 2pm to 8pm</h4>
      <h4>November 24th hours 1pm to 4pm</h4>
      <h4>November 25th hours TBD</h4>
    </div>
​    <div class="sub-div">
      <h3>Events</h3>
      <h4>December 2nd 10am to 10pm:  BBQ Christmas in Moravia</h4>
      <h4>December 3rd 3pm to 6pm: "Cards and a Cold One" with Jess B. from "Card-iology"</h4>
    </div>
    <!-- Embed Google Calendar -->
    <h3>Calendar</h3>
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
