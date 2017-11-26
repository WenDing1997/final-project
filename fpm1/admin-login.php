<!-- Begin hours & events html -->

<!-- Run login script  -->
<?php

  // Get form information
  $submit = $_REQUEST["submit"];
  // get form variables
  $username = htmlspecialchars($_REQUEST["username"]);
  $password = htmlspecialchars($_REQUEST["pwd"]);


  if ( isset($submit) ) {

    if ($username == "admin") {
      if ($password == "password") {

        // begin new session
        session_start();
        // flag user as logged in
        $_SESSION['loggedIn'] == true;

        header("Location: admin-page.php");
      }
    } else {
      // default
    }
  } else {
    // default
  }

?>

  <!-- Include html header -->
  <?php
    include "includes/head.php";
  ?>
  <link rel="stylesheet" type="text/css" href="styles/admin-login.css" media="all"/>

</head>


<body>
  <!-- Begin main_container for all body elements -->
  <div id="main_container">

  <!-- include header section, navigation -->
  <?php
    include "includes/header.php";
  ?>

  <div id="login-div">
    <div id="login-form">
      <p>Welcome to admin login</p>
      <form method="post" action="admin-login.php">
        Username:
        <input type="text" name="username" id="usrname"/><br /><br />
        Password:
        <input type="password" name="pwd" id="pswrd"/><br /><br />
        <input type="submit" value="Log In" name="submit" id="btn" />
      </form>
    </div>
  </div>
  <!-- include footer  section -->
  <?php
    include "includes/footer.php";
  ?>

</div> <!-- end main_container div -->

</body> <!-- end body -->
</html> <!-- end html -->
