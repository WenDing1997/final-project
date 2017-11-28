<?php session_start();
$submit = $_REQUEST["submit"];
$businessorg = $_REQUEST["businessorg"];
$contactname = $_REQUEST["contactname"];
$email = $_REQUEST["email"];
$telephone = $_REQUEST["telephone"];
$address = $_REQUEST["address"];
$addq = $_REQUEST["addq"];

$_SESSION['businessorg'] = $businessorg;
$_SESSION['address'] = $address;
$_SESSION['contactname'] = $contactname;
$_SESSION['email'] = $email;
$_SESSION['telephone'] = $telephone;
$_SESSION['addq'] = $addq;

// if user clicks on submit button
if (isset($submit)) {
  $isBusinessorgEmpty = empty($businessorg);
  $isBusinessorgValid = !$isBusinessorgEmpty;

  $isContactnameEmpty = empty($contactname);
  $isContactnameValid = !$isContactnameEmpty;

  $isEmailEmpty = empty($email);
  $isEmailAddress = filter_var($email, FILTER_VALIDATE_EMAIL);
  $isEmailValid = !$isEmailEmpty && $isEmailAddress;

  $isTelephoneEmpty = empty($telephone);
  $isTelephoneValid = !$isTelephoneEmpty;

  if ($isBusinessorgValid && $isContactnameValid && $isEmailValid && $isTelephoneValid) {
    header("Location: handlingform.php");
    return;
  }
} else {
  $isBusinessorgValid = true;
  $isContactnameValid = true;
  $isEmailValid = true;
  $isTelephoneValid = true;
}
include "includes/head.php";
?>

  <link rel="stylesheet"
      type="text/css"
      href="styles/for-vendors.css"
      media="all">

      <!-- <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script> -->
      <script type="text/javascript" src="scripts/for-vendors-form.js"></script>
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
    <h2>Interested in being a vendor? Fill in the form below!</h2>
  </div>
</div>

<div id="formandpic">
<div id="form">
<form method="post" action="for-vendors.php" id="vendorForm" novalidate>

        <div class="qsection">
          <div class="question">
            <label for="businessorg">Business/Company Name: </label>
          </div>
          <div class="answer">
            <input name="businessorg" id="businessorg" value="<?php echo( htmlspecialchars($businessorg) );?>">
            <span class="error <?php if ($isBusinessorgValid) { echo("hidden"); } ?>" id="businessnameError">
              No name provided.
            </span>
          </div>
        </div>

        <div class="qsection">
          <div class="question">
            <label for="contactname">Contact Name:</label>
          </div>
          <div class="answer">
            <input name="contactname" id="contactname" value="<?php echo( htmlspecialchars($contactname) );?>">
            <span class="error <?php if ($isContactnameValid) { echo("hidden"); } ?>" id="contactnameError">
              No name provided.
            </span>
          </div>
        </div>

        <div class="qsection">
        <!-- <div class="a"> -->
          <div class="question">
            <label for="email">Contact Email: </label>
          </div>
          <div class="answer">
            <input type="email" name="email" id="email" value="<?php echo( htmlspecialchars($email) );?>">
            <span class="error <?php if ($isEmailValid) { echo("hidden"); } ?>" id="emailError">
              No or invalid email provided.
            </span>
          </div>
        </div>

        <div class="qsection">
          <div class="question">
            <label for="telephone">Phone Number: </label>
          </div>
          <div class="answer">
            <input name="telephone" id="telephone" value="<?php echo( htmlspecialchars($telephone) );?>">
            <span class="error <?php if ($isTelephoneValid) { echo("hidden"); } ?>" id="numberError">
              No number provided.
            </span>
          </div>
        </div>

        <div class="qsection">
          <div class="question">
            <label for="address">Address (optional): </label>
          </div>
          <div class="answer">
            <textarea id="address" name="address"><?php echo( htmlspecialchars($address) );?></textarea>
          </div>
        </div>

        <div class="qsection">
          <div class="question">
            <label for="addq">Additional Inquiries (optional): </label>
          </div>
          <div class="answer">
            <textarea name="addq" id="addq"><?php echo( htmlspecialchars($addq) );?></textarea>
          </div>
        </div>

        <div>
          <button id="submit" type="submit" class="submit" name="submit">Submit</button>
        </div>
        </form>
</div>
<img id="vendorcontactpic" src="images/vendorcontact.jpg" alt="vendorpicture"/>
</div>

<!-- NEW CODE ENDS HERE -->

  <!-- include footer  section -->
  <?php
    include "includes/footer.php";
  ?>


  </div> <!-- end main_container div -->

</body> <!-- end body -->
</html> <!-- end html -->
