<!-- Begin website footer -->

<footer>

  <div id="catchphrase"><p>"Worth the trip up the hill!"</p></div>

  <button id="back_btn">Back to Top</button>

  <div id="footer_content">
      <div id="footer_text">
        <p>Summerhill Brewing, LLC</p>
        <p>384 Champlin Rd | Groton, NY 13073</p>
        <p>607.591.6148&emsp;|&emsp;<a href="mailto:summerhill.brewing@gmail.com">summerhill.brewing@gmail.com</a></p>
        <p id=<?php if ($loggedIn == False) {echo "footer_hidden";} ?>>Number of total visitors: <?php echo "$count"; ?></p>
      </div>

      <div id="img_wrapper">
        <ul id="social-media-list">
          <li>
        <!-- Source: https://icon-icons.com/icons2/91/PNG/512/facebook_16423.png -->
        <a href="https://www.facebook.com/Summerhill.brewing/" target="_blank">
          <img id="fb" src="../images/facebook.PNG" alt="facebook"></a>
          </li>
          <li>
        <!-- Source: http://yolna.com/wp-content/uploads/2015/12/twitter-circle-logo.png -->
        <a href="https://untappd.com/w/summerhill-brewing/297250/photos" target="_blank">
          <img id="tw" src="../images/twitter.PNG" alt="twitter"></a>
          </li>
          <li>
        <a href="https://untappd.com/w/summerhill-brewing/297250/photos" target="_blank">
          <img id="in" src="../images/instagram.PNG" alt="instagram"></a>
          </li>
        </ul>
      </div>

    <div id="footer_content_2">
      <ul id="footer_content_2_list">
        <li><a href="admin-login.php">Admin</a></li>
        <li><a href="contact-us.php">Contact Us</a></li>
      </ul>
    </div>

  </footer> <!-- end footer -->
