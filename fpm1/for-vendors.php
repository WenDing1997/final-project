<!-- Being hours & events html -->

  <!-- Include html header -->
  <?php
    include "includes/head.php";
  ?>
  <link rel="stylesheet"
      type="text/css"
      href="styles/for-vendors.css"
      media="all">
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

<form method="post" action="handlingform.php" id="vendorForm">

        <div class="qsection">
          <div class="question">
            <label for="businessorg">Business/Company Name: </label>
          </div>
          <div class="answer">
            <input name="businessorg" required>
          </div>
        </div>

        <div class="qsection">
          <div class="question">
            <label for="address">Address: </label>
          </div>
          <div class="answer">
            <textarea name="address"></textarea>
          </div>
        </div>

        <div class="qsection">
          <div class="question">
            <label for="contactname">Contact Name:</label>
          </div>
          <div class="answer">
            <input name="contactname" required>
          </div>
        </div>

        <div class="qsection">
          <div class="question">
            <label for="lastName">Contact Email: </label>
          </div>
          <div class="answer">
            <input type="email" name="userEmail" required>
          </div>
        </div>

        <div class="qsection">
          <div class="question">
            <label for="telephone">Phone Number: </label>
          </div>
          <div class="answer">
            <input name="telephone" required>
          </div>
        </div>

        <div class="qsection">
          <div class="question">
            <label for="addq">Additional Inquiries: </label>
          </div>
          <div class="answer">
            <textarea name="addq"></textarea>
          </div>
        </div>

        <div>
          <button id="submitbutton" type="submit" class="submit">Submit</button>
        </div>
    </form>

    <img id="vendorcontactpic" src="images/vendorcontact.jpg" alt="vendorpicture"/>
<!-- NEW CODE ENDS HERE -->


  <!-- include footer  section -->
  <?php
    include "includes/footer.php";
  ?>

  </div> <!-- end main_container div -->

</body> <!-- end body -->
</html> <!-- end html -->
