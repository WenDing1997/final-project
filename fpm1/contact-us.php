<?php
$submit = $_REQUEST["submit"];
$name = $_REQUEST["user_name"];
$email = $_REQUEST["user_mail"];
$subject = $_REQUEST["user_subject"];
$msg = $_REQUEST["user_message"];

if (isset($submit)) {
  $isNameEmpty = empty($name);
  $isNameValid = !$isNameEmpty;
  // echo '<script>console.log("apple")</script>';
  // echo '<script>console.log("Your stuff here")</script>';
  $isEmailEmpty = empty($email);
  $isEmailAddress = filter_var($email, FILTER_VALIDATE_EMAIL);
  $isEmailValid = !$isEmailEmpty && $isEmailAddress;

  $isSubjectEmpty = empty($subject);
  $isSubjectValid = !$isSubjectEmpty;

  $isMsgEmpty = empty($msg);
  $isMsgValid = !$isMsgEmpty;

  if ($isNameValid && $isEmailValid && $isSubjectValid && $isMsgValid) {
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['subject'] = $subject;
    $_SESSION['msg'] = $msg;

    header("Location: contact-form-submitted.php");
    return;
  }
} else {
  $isNameValid = true;
  $isEmailValid = true;
  $isSubjectValid = true;
  $isMsgValid = true;
}
?>
<!-- Being hours & events html -->

  <!-- Include html header -->
  <?php
    include "includes/head.php";
  ?>

  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="scripts/contact-form.js"></script>
</head>

<body>
  <!-- Begin main_container for all body elements -->
  <div id="main_container">

  <!-- include header section, navigation -->
  <?php
    include "includes/header.php";
  ?>
  <link rel="stylesheet" type="text/css" href="styles/contact-us.css" media="all"/>

<!-- NEW CODE GOES HERE -->
<div id="tagline_div">
  <div id="tagline">
    <h2>We're always happy to hear from you.</h2>
  </div>
</div>

<div id="main_box">
  <div id="main_text">
  <h3>Location</h3>
  <p>Summerhill Brewing</p>
  <p>384 Champlin Road</p>
  <p>Groton, NY 13073</p>
  <p>GPS coordinates: 42.6364, -76.2942</p>
  <h3>Email</h3>
  <p>summerhill.brewing@gmail.com</p>
  <h3>Tel</h3>
  <p>607-591-6148</p>
  </div>

  <div id="contact-form">
    <form id="contactForm" action="contact-us.php" method="post" novalidate>
      <div>
          <label for="name">Name:</label>
      </div>
      <div>
          <input type="text" id="name" name="user_name" value="<?php echo( htmlspecialchars($name) );?>">
          <span class="error <?php if ($isNameValid) { echo("hidden"); } ?>" id="nameError">
            No name provided.
          </span>
      </div>
      <div>
          <label for="mail">Email:</label>
      </div>
      <div>
          <input type="email" id="email" name="user_mail" value="<?php echo( htmlspecialchars($email) );?>">
          <span class="error <?php if ($isEmailValid) { echo("hidden"); } ?>" id="emailError">
            No or invalid email provided.
          </span>
      </div>
      <div>
          <label for="heard">Subject:</label>
      </div>
      <div>
          <input type="text" id="subject" name="user_subject" value="<?php echo( htmlspecialchars($subject) );?>">
          <span class="error <?php if ($isSubjectValid) { echo("hidden"); } ?>" id="subjectError">
            No subject provided.
          </span>
      </div>
      <div>
          <label for="msg">Message:</label>
      </div>
      <div>
          <textarea id="msg" name="user_message"><?php echo( htmlspecialchars($msg) );?></textarea>
          <span class="error <?php if ($isMsgValid) { echo("hidden"); } ?>" id="msgError">
            No message provided.
          </span>
      </div>
      <div class="button">
        <button type="submit" name="submit" id="submit">Submit</button>
      </div>
    </form>
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
