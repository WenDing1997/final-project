<?php session_start();
include "includes/head.php";

$user_name=$_SESSION['username'];
$user_mail=$_SESSION['usermail'];
$user_subject=$_SESSION['usersubject'];
$user_message=$_SESSION['usermessage'];
// echo("User message: " . $user_message);

// store all user responses are .csv colums
$data = $user_name.",".$user_mail.",".$user_subject.",".$user_message;
// create variable to store filename
$file = "contactformdata.csv";
// write data to .csv file
file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
// unset all used $_SESSION variables
unset($_SESSION['username']);
unset($_SESSION['usermail']);
unset($_SESSION['usersubject']);
unset($_SESSION['usermessage']);
?>

<!-- Being hours & events html -->

  <!-- Include html header -->

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
    <h2>Thank you for your message! You will hear from us shortly.</h2>
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
