<?php session_start();
include "includes/head.php";
$user_name1=$_POST['user_name1'];
$user_mail1=$_POST['user_mail1'];
$user_heard1=$_POST['user_heard1'];
$user_message1=$_POST['user_message1'];
$user_jobs = $_POST['job'];

///////////////////
///TEMPORARY FIX///
///////////////////
if (is_array($user_jobs)) {
foreach($user_jobs as $selected) {
  $user_job=$user_job." - ".$selected;
}
}

$data = $user_name1.",".$user_mail1.",".$user_heard1.",".$user_message1.",".$user_job;

$file = "employmentformdata.csv";

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
