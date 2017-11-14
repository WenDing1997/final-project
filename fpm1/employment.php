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
  <p>Please fill out the following form and send your resume to summerhill.brewing@gmail.com.</p>
  </div>

  <div id="form_div">
  <form id="employmentForm" action="employment-form-submitted.php" method="post" novalidate>
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="user_name" required/>
        <span class="error hidden" id="nameError">
            No name provided.
        </span>
    </div>
    <div>
        <label for="mail">Email:</label>
        <input type="email" id="email" name="user_mail" required/>
        <span class="error hidden" id="emailError">
            No or invalid email provided.
        </span>
    </div>
    <div>
        <label for="heard">How did you hear about us?</label>
        <input type="text" id="heard" name="user_heard" required/>
        <span class="error hidden" id="heardError">
            No answer provided.
        </span>
    </div>
    <div>
        <label for="msg">Why do you want to join Summerhill Brewing?</label>
        <textarea id="msg" name="user_message"></textarea>
        <span class="error hidden" id="msgError">
          No answer provided.
        </span>
    </div>
    <div id="checkbox">
      <label id="checkbox_label">Please select all postions that you are applying for.</label>
    <div id="checkbox_options">
      <input type="checkbox" name="job" value="General Manager"> General Manager <br>
      <input type="checkbox" name="job" value="Quality Manager"> Quality Manager <br>
      <input type="checkbox" name="job" value="Brewery Sales Representative"> Brewery Sales Representative <br>
      <input type="checkbox" name="job" value="Social Media Manager"> Social Media Manager <br>
      <input type="checkbox" name="job" value="Graphics Designer"> Graphics Designer <br>
      <input type="checkbox" name="job" value="Commnuications Manager"> Commnuications Manager <br>
      <input type="checkbox" name="job" value="Marketing Manager"> Marketing Manager <br>
      <input type="checkbox" name="job" value="Website Coordinator"> Website Coordinator <br>
      <input type="checkbox" name="job" value="Server"> Server <br>
      <input type="checkbox" name="job" value="Host"> Host
      <span class="error hidden" id="jobError">
        Nothing selected.
      </span>
    </div>

    </div>
    <div class="button">
      <button type="submit">Submit</button>
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
