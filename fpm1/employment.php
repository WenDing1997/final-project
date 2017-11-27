<?php
$submit = $_REQUEST["submit"];
$name = $_REQUEST["user_name1"];
$email = $_REQUEST["user_mail1"];
$heard = $_REQUEST["user_heard1"];
$msg = $_REQUEST["user_message1"];
$resume = $_REQUEST["resumeupload"];
$job = $_REQUEST["job"];


if (isset($submit)) {
  $isNameEmpty = empty($name);
  $isNameValid = !$isNameEmpty;
  // error_log("form was submitted");

  $isEmailEmpty = empty($email);
  $isEmailAddress = filter_var($email, FILTER_VALIDATE_EMAIL);
  $isEmailValid = !$isEmailEmpty && $isEmailAddress;

  $isHeardEmpty = empty($heard);
  $isHeardValid = !$isHeardEmpty;

  $isMsgEmpty = empty($msg);
  $isMsgValid = !$isMsgEmpty;

  $isResumeValid = isset($resume);
  // $isResumeEmpty = empty($resume);
  // $isResumeValid = !$isResumeEmpty;

  $isJobEmpty = empty($job);
  $isJobValid = !$isJobEmpty;
  // echo '<script>console.log('a')</script>';
  // logConsole("a");

  if ($isNameValid && $isEmailValid && $isHeardValid && $isMsgValid && $isResumeValid && $isJobValid) {
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['heard'] = $heard;
    $_SESSION['msg'] = $msg;
    $_SESSION['resume'] = $resume;
    $_SESSION['job'] = $job;

    header("Location: employment-form-submitted.php");
    return;
  }
} else {
  $isNameValid = true;
  $isEmailValid = true;
  $isHeardValid = true;
  $isMsgValid = true;
  $isResumeValid = true;
  $isJobValid = true;
}
?>

<!--The following five lines of code are modified from stackoverflow.com-->
<?php
$target_Path = "resume/";
$target_Path = $target_Path.basename( $_FILES['resumeupload']['name'] );
move_uploaded_file( $_FILES['resumeupload']['tmp_name'], $target_Path );
?>
<!-- Being hours & events html -->

  <!-- Include html header -->
  <?php
    include "includes/head.php";
  ?>
  <link rel="stylesheet" type="text/css" href="styles/employment.css" media="all"/>

  <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="scripts/employment-form.js"></script>
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
    <h2>What can be cooler than making craft beer!</h2>
  </div>
</div>

<div id="main_box">
  <div id="main_text">
  <p>Looking for a fun and rewarding job? Join the Summerhill Brewing team and become a member of a close-knit, enthusiastic community that desires to produce the finest beer in a sustainable way!</p>
  <img src="images/employment.jpg" />
  <p>Please fill out the following form and upload your resume.</p>
  </div>

  <div id="form_div">
  <form id="employmentForm" action="employment.php" method="post" enctype="multipart/form-data" novalidate>
    <div class="question">
        <div>
        <label for="name">Name:</label>
      </div>
        <input type="text" id="name" name="user_name1" value="<?php echo( htmlspecialchars($name) );?>">
        <span class="error <?php if ($isNameValid) { echo("hidden"); } ?>" id="nameError">
            No name provided.
        </span>
    </div>
    <div class="question">
        <div>
        <label for="mail">Email:</label>
      </div>
        <input type="email" id="email" name="user_mail1" value="<?php echo( htmlspecialchars($email) );?>">
        <span class="error <?php if ($isEmailValid) { echo("hidden"); } ?>" id="emailError">
            No or invalid email provided.
        </span>
    </div>
    <div class="question">
      <div>
        <label for="heard">How did you hear about us?</label>
      </div>
        <input type="text" id="heard" name="user_heard1" value="<?php echo( htmlspecialchars($heard) );?>">
        <span class="error <?php if ($isHeardValid) { echo("hidden"); } ?>" id="heardError">
            No answer provided.
        </span>
    </div>
    <div class="question">
      <div>
        <label for="msg">Why do you want to join Summerhill Brewing?</label>
      </div>
        <textarea id="msg" name="user_message1"><?php echo( htmlspecialchars($heard) );?></textarea>
        <span class="error <?php if ($isMsgValid) { echo("hidden"); } ?>" id="msgError">
          No answer provided.
        </span>
    </div>
<!--The code for the resume-upload element is modified from developer.mozilla.org-->
    <div class="question">
      <div>
      <label for="image_uploads">Please upload your resume (PDF).</label>
    </div>
      <input type="file" id="resumeupload" name="resumeupload" accept=".pdf" value="<?php echo( htmlspecialchars($resume) );?>">
      <span class="error <?php if ($isResumeValid) { echo("hidden"); } ?>" id="resumeError">
        No resume uploaded.
      </span>
    </div>
    <div class="question" id="checkbox">
      <div>
      <label id="checkbox_label">Please select all postions that you are applying for.</label>
    </div>
    <div id="checkbox_options">
      <input type="checkbox" name="job[]" value="General Manager" <?php if (in_array("General Manager", $job)) { echo("checked"); } ?>> General Manager <br>
      <input type="checkbox" name="job[]" value="Quality Manager" <?php if (in_array("Quality Manager", $job)) { echo("checked"); } ?>> Quality Manager <br>
      <input type="checkbox" name="job[]" value="Brewery Sales Representative" <?php if (in_array("Brewery Sales Representative", $job)) { echo("checked"); } ?>> Brewery Sales Representative <br>
      <input type="checkbox" name="job[]" value="Social Media Manager" <?php if (in_array("Social Media Manager", $job)) { echo("checked"); } ?>> Social Media Manager <br>
      <input type="checkbox" name="job[]" value="Graphics Designer" <?php if (in_array("Graphics Designer", $job)) { echo("checked"); } ?>> Graphics Designer <br>
      <input type="checkbox" name="job[]" value="Commnuications Manager" <?php if (in_array("Commnuications Manager", $job)) { echo("checked"); } ?>> Commnuications Manager <br>
      <input type="checkbox" name="job[]" value="Marketing Manager" <?php if (in_array("Marketing Manager", $job)) { echo("checked"); } ?>> Marketing Manager <br>
      <input type="checkbox" name="job[]" value="Website Coordinator" <?php if (in_array("Website Coordinator", $job)) { echo("checked"); } ?>> Website Coordinator <br>
      <input type="checkbox" name="job[]" value="Server" <?php if (in_array("Server", $job)) { echo("checked"); } ?>> Server <br>
      <input type="checkbox" name="job[]" value="Host" <?php if (in_array("Host", $job)) { echo("checked"); } ?>> Host
      <span class="error <?php if ($isJobValid) { echo("hidden"); } ?>" id="jobError">
        Please select at least one position.
      </span>
    </div>
    </div>
    <div class="button">
      <button type="submit" name="submit">Submit</button>
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
