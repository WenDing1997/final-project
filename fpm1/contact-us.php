<!-- Being hours & events html -->

  <!-- Include html header -->
  <?php
    include "includes/head.php";
  ?>

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
    <form id="contactForm" action="contact-form-submitted.php" method="post" novalidate>
      <div>
          <label for="name">Name:</label>
      </div>
      <div>
          <input type="text" id="name" name="user_name" required/>
      </div>
      <div>
          <label for="mail">Email:</label>
      </div>
      <div>
          <input type="email" id="email" name="user_mail" required/>
      </div>
      <div>
          <label for="heard">Subject:</label>
      </div>
      <div>
          <input type="text" id="subject" name="user_subject" required/>
      </div>
      <div>
          <label for="msg">Message:</label>
      </div>
      <div>
          <textarea id="msg" name="user_message"></textarea>
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
