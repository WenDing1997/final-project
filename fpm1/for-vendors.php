<!-- Being hours & events html -->

  <!-- Include html header -->
  <?php
    include "includes/head.php";
  ?>
  <link rel="stylesheet"
      type="text/css"
      href="styles/for-vendors.css"
      media="all">

      <script type="text/javascript" src="scripts/jquery-3.2.1.min.js"></script>
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
<form method="post" action="handlingform.php" id="vendorForm" novalidate>

        <div class="qsection">
          <div class="question">
            <label for="businessorg">Business/Company Name: </label>
          </div>
          <div class="answer">
            <input name="businessorg" id="businessorg">
            <span class="error hidden" id="businessnameError">
              No name provided.
            </span>
          </div>
        </div>

        <div class="qsection">
          <div class="question">
            <label for="contactname">Contact Name:</label>
          </div>
          <div class="answer">
            <input name="contactname" id="contactname">
            <span class="error hidden" id="contactnameError">
              No name provided.
            </span>
          </div>
        </div>

        <div class="qsection">
        <!-- <div class="a"> -->
          <div class="question">
            <label for="lastName">Contact Email: </label>
          </div>
          <div class="answer">
            <input type="email" name="email" id="email">
            <span class="error hidden" id="emailError">
              No or invalid email provided.
            </span>
          </div>
        </div>

        <div class="qsection">
          <div class="question">
            <label for="telephone">Phone Number: </label>
          </div>
          <div class="answer">
            <input name="telephone" id="telephone">
            <span class="error hidden" id="numberError">
              No number provided.
            </span>
          </div>
        </div>

        <div class="qsection">
          <div class="question">
            <label for="address">Address (optional): </label>
          </div>
          <div class="answer">
            <textarea name="address"></textarea>
          </div>
        </div>

        <div class="qsection">
          <div class="question">
            <label for="addq">Additional Inquiries (optional): </label>
          </div>
          <div class="answer">
            <textarea name="addq"></textarea>
          </div>
        </div>

        <div>
          <button id="submitbutton" type="submit" class="submit">Submit</button>
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
