<!-- Begin hours & events html -->

<?php
  session_start();

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
    <h2>Welcome to the admin page!</h2>
  </div>

  <form method="post" action="admin-page.php">
    <input type="submit" value="Log Out" name="submit" id="btn" />
  </form>

  <!-- include footer  section -->
  <?php
    include "includes/footer.php";
  ?>

</div> <!-- end main_container div -->

</body> <!-- end body -->
</html> <!-- end html -->
