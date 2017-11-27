<?php session_start();
  // if already logged in, go directly to admin-page.php
  if ($_SESSION['loggedIn']) {
    header("Location: admin-page.php");
  }

  // Get form information
  $submit = $_REQUEST["submit"];
  // get form variables
  $username = htmlspecialchars($_REQUEST["username"]);
  $password = htmlspecialchars($_REQUEST["pwd"]);
  $usernameIsValid = True;
  $usernameIsEmpty = False;
  $passwordIsValid = True;
  $passwordIsEmpty = False;


  $tooManyTries = False;
  $numTries = 0;
  if ( isset($_SESSION['numTries']) ) {
    $numTries = $_SESSION['numTries'];
  }  // end if

  if ($numTries > 3) {
    $tooManyTries = True;
    // unset($_SESSION["numTries"]);
  }  // end if

  // true when user clicked on the "Log Out" button
  $loggedOut = $_SESSION["logout"];
  // immediately unset the logout variable
  // so that the logout message goes away
  // when the page is refreshed
  unset($_SESSION["logout"]);

  if ( isset($submit) ) {

    if($tooManyTries) {
      echo("Number of tries: ".$numTries);
      header("Location: admin-page.php");
      return;
    }  // end if

    if ($username == "admin") {
      if ($password == "password") {
        // flag user as logged in
        $loggedIn = True;
        $_SESSION['loggedIn'] = $loggedIn;

        header("Location: admin-page.php");
      } else {
        if ( empty($password) ) {
          $passwordIsEmpty = True;
        } else {
          // increment one for every false password attempt
          $numTries = $numTries + 1;
          // store number of false attempts so far
          $_SESSION['numTries'] = $numTries;
          echo("Number of Tries: " + $numTries);

          $passwordIsValid = False;
        }
    } // end password if
  } else {
    if ( empty($username) ) {
      $usernameIsEmpty = True;
    } else {
      $usernameIsValid = False;
    }
  }  // end username if

}
?>
  <!-- Include html header -->
  <?php include "includes/head.php";
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
      <h2 class="msg <?php if(!$loggedOut) {echo("hidden");} ?>">Successfully Logged Out</h2>
      <h2 class="msg <?php if(!$tooManyTries) {echo("hidden");} ?>">Too many false attempts. Try again later.</h2>

      <h3>Welcome to administrative login.</h3>
      <form method="post" action="admin-login.php">
        <span class="errorMsg <?php if(!$usernameIsEmpty) {echo("hidden");} ?>">You must enter a username.</span>
        <br class="<?php if(!$usernameIsEmpty) {echo("hidden");} ?>" />
        <span class="errorMsg <?php if($usernameIsValid) {echo("hidden");} ?>">Username invalid.</span>
        <br class="<?php if($usernameIsValid) {echo("hidden");} ?>" />
        Username:
        <input type="text" name="username" id="usrname" value = <?php echo($username); ?> >
        <br /><br />
        <span class="errorMsg <?php if(!$passwordIsEmpty) {echo("hidden");} ?>">You must enter a password.</span>
        <br class="<?php if(!$passwordIsEmpty) {echo("hidden");} ?>" />
        <span class="errorMsg <?php if($passwordIsValid) {echo("hidden");} ?>">Password invalid.</span>
        <br class="<?php if($passwordIsValid) {echo("hidden");} ?>" />
        Password:
        <input type="password" name="pwd" id="pswrd"/><br /><br />
        <input type="submit" value="Login" name="submit" id="btn" />
      </form>
      <p class="italic">If you've reached this page by mistake, <a href="index.php">please return to the website.</a></p>
    </div>
  </div>
  <!-- include footer  section -->
  <?php
    include "includes/footer.php";
  ?>

</div> <!-- end main_container div -->

</body> <!-- end body -->
</html> <!-- end html -->
