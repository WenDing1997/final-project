<?php include "includes/head.php";

$user_name=$_POST['user_name'];
$user_mail=$_POST['user_mail'];
$user_subject=$_POST['user_subject'];
$user_message=$_POST['user_message'];

$data = $user_name.",".$user_mail.",".$user_subject.",".$user_message;

$file = "contactformdata.csv";

file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
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
