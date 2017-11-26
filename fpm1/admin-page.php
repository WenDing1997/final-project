<!-- Begin hours & events html -->

<?php

  session_start();
  // if not logged in already, redirect to login page
  if ( $_SESSION['loggedIn'] != true ) {
    header("Location: admin-login.php")
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
  <div id="login-form">
    <h2>Welcome to the admin page! <?php echo($password); ?></h2>
  </div>
  <!-- include footer  section -->
  <?php
    include "includes/footer.php";
  ?>

</div> <!-- end main_container div -->

</body> <!-- end body -->
</html> <!-- end html -->
