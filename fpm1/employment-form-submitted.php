<?php session_start();
include "includes/head.php";
$user_name1=$_SESSION['username'];
$user_mail1=$_SESSION['usermail'];
$user_heard1=$_SESSION['userheard'];
$user_message1=$_SESSION['usermessage'];
$user_jobs = $_SESSION['userjob'];

///////////////////
///TEMPORARY FIX///
///////////////////
if (is_array($user_jobs)) {
  foreach($user_jobs as $selected) {
    $user_job=$user_job." - ".$selected;
  }
}  // end if

// create data variable as a series of .csv columns
$data = $user_name1.",".$user_mail1.",".$user_heard1.",".$user_message1.",".$user_job;
// assign filename to variable for storage
$file = "employmentformdata.csv";
// save all data into a .csv file
file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
// unset all used varibales
unset($_SESSION['username']);
unset($_SESSION['usermail']);
unset($_SESSION['userheard']);
unset($_SESSION['usermessage']);
unset($_SESSION['job']);
?>

<link rel="stylesheet" type="text/css" href="styles/employment.css" media="all"/>
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
    <h2>Thank you! We will get back to you shortly.</h2>
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
