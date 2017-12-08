<?php session_start();

  $submit = $_REQUEST["submit"];
  $loggedIn = $_SESSION['loggedIn'];
  $loggedOut = False;

  if ( $loggedIn == False ) {
    header("Location: admin-login.php");
  }  // end if

  if ( isset($submit) ) {
    $loggedOut = True;
    $_SESSION["logout"] = $loggedOut;
    unset($_SESSION['loggedIn']);
    unset($_SESSION["numTries"]);
    header("Location: admin-login.php");
  }

  //count # of visitors

  $visitor_count = "includes/visitor_count.txt";

  if (!is_writable($visitor_count)) {
    $f = fopen($visitor_count, "w");
    $ip_array = array($ip);
    $json_encode = json_encode($ip_array);
    fwrite($f, $json_encode);
    fclose($f);
  }

  $fcontent = file_get_contents("includes/visitor_count.txt");
  $json_decode = json_decode($fcontent, true);

  $count = count($json_decode);

  // begin xml editing code
  $success = False;
  $update = $_REQUEST['update'];

  // get date/time for event 1
  $date1 = $_REQUEST['date-1'];
  $time1 = $_REQUEST['time-1'];
  // get date/time for event 2
  $date2 = $_REQUEST['date-2'];
  $time2 = $_REQUEST['time-2'];
  // get date/time for event 3
  $date3 = $_REQUEST['date-3'];
  $time3 = $_REQUEST['time-3'];

  if ( isset($update) ) {

    $xmlDOM=new DOMDocument();
    // load configuration file for events page
    $xmlDOM->load("config.xml");

    $dates = $xmlDOM -> getElementsByTagName('date');
    $times = $xmlDOM -> getElementsByTagName('time');

    $dates->item(0)->nodeValue = $date1;
    $times->item(0)->nodeValue = $time1;
    $dates->item(1)->nodeValue = $date2;
    $times->item(1)->nodeValue = $time2;
    $dates->item(2)->nodeValue = $date3;
    $times->item(2)->nodeValue = $time3;

    $xmlDOM->save("config.xml");

    $success = True;
  }
?>

  <!-- Include html header -->
  <?php
    include "includes/head.php";
  ?>
  <link rel="stylesheet" type="text/css" href="styles/admin-page.css" media="all"/>

</head>


<body>
  <!-- Begin main_container for all body elements -->
  <div id="main_container">

  <!-- include header section, navigation -->
  <?php
    include "includes/header.php";
  ?>


  <div>
    <h3 class="msg <?php if(!$success) {echo("hidden");}?>">Events and Hours Successfully Updated</h3>
  </div>

  <form method="post" action="admin-page.php">

    <div id="login-form">
      <h2>Welcome to the admin page!</h2>
      <input type="submit" value="Log Out" name="submit" id="submit_btn" />
    </div>


    <div id="event-entry">
      <h3>Tasting Room Hours 1</h3>
      Date 1:
      <input type="text" name="date-1"><br /><br />
      Time 1:
      <input type="test" name="time-1"><br /><br />

      <h3>Tasting Room Hours 2</h3>
      Date 2:
      <input type="text" name="date-2"><br /><br />
      Time 2:
      <input type="text" name="time-2"><br /><br />

      <h3>Tasting Room Hours 3</h3>
      Date 3:
      <input type="text" name="date-3"><br /><br />
      Time 3:
      <input type="text" name="time-3"><br /><br />

      <input type="submit" value="Update" name=update / id="update_btn"><br />
    </div>

  </form>

  <!-- include footer  section -->
  <?php
    include "includes/footer.php";
  ?>

</div> <!-- end main_container div -->

</body> <!-- end body -->
</html> <!-- end html -->
