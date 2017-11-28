<?php session_start();
include "includes/head.php";

// get all submitted variables from $_SESSION
$businessorg = $_SESSION['businessorg'];
$address = $_SESSION['address'];
$contactname = $_SESSION['contactname'];
$email = $_SESSION['email'];
$telephone = $_SESSION['telephone'];
$addq = $_SESSION['addq'];
// save all input data as .csv columns
$data = $businessorg.",".$contactname.",".$email.",".$telephone.",".$address.",".$addq;
// create variable for .csv filename
$file = "vendorformdata.csv";
// store all data in .csv file
file_put_contents($file, $data . PHP_EOL, FILE_APPEND);

// unset used variables
unset($_SESSION['businessorg']);
unset($_SESSION['address']);
unset($_SESSION['contactname']);
unset($_SESSION['email']);
unset($_SESSION['telephone']);
unset($_SESSION['addq']);
?>

<!-- Being hours & events html -->

  <!-- Include html header -->
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
    <h2>Thanks for submitting our vendor form. We will get back to you as soon as we can. </h2>
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
