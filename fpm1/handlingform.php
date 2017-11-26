<?php
$businessorg = $_POST['businessorg'];
$address = $_POST['address'];
$contactname = $_POST['contactname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$addq = $_POST['addq'];

$data = $businessorg.",".$address.",".$contactname.",".$email.",".$telephone.",".$addq;

$file = "vendorformdata.csv";

file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
?>

<!-- Being hours & events html -->

  <!-- Include html header -->
  <?php
    include "includes/head.php";
  ?>
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
