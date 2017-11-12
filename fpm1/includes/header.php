<!-- Begin website header -->
<header>

  <!-- Position central SHB logo -->
  <div id="logo_div">
    <div id="logo_div_inner">
      <a href="index.php">
        <img src="images/SHB_Logo.jpg" alt="Sumerhill Brewing Logo">
      </a>
    </div>  <!-- end logo_div_inner -->
  </div>  <!-- end logo_div -->

  <div id="logo_tag">
  </div> <!-- end logo_tag div -->

  <!--- Begin nav bar -->
  <nav class="nav_menu">
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="events.php">HOURS AND EVENTS</a></li>
      <li class="sublist">
        <a class="dropbtn" href="javascript:void(0)">BEER</a>
        <div class="sublist_content">
          <a href="our-beers.php">Our Beers</a>
          <a href="find-our-beers.php">Find Our Beers</a>
        </div>
      </li>
      <li><a href="photos.php">PHOTOS</a></li>
      <li><a href="community.php">COMMUNITY</a></li>
      <li><a href="store.php">STORE</a></li>
      <li><a href="about-us.php">ABOUT US</a></li>
      <li class="sublist">
        <a class="dropbtn" href="javascript:void(0)">CONTACT</a>
        <div class="sublist_content">
          <a href="directions.php">Directions</a>
          <a href="for-vendors.php">For Vendors</a>
          <a href="employment.php">Employment</a>
          <a href="contact-us.php">Contact Us</a>
        </div>
      </li>
    </ul>
  </nav> <!-- end navigtion bar -->

  <!-- Begin responsive nav -->

  <div id="responsive_menu_div">
    <button id="responsive_menu_btn">
      <img id="navicon" src="images/navicon.PNG" alt="navicon"><p>MENU</p>
    </button>
  </div>

  <!-- Begin nav bar -->
  <nav class="nav_menu_responsive">
    <ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="events.php">HOURS AND EVENTS</a></li>
      <li id="beer"><a href="javascript:void(0)">BEER&emsp;<span class="da">&#9660;</span><span class="ra">&#9654;</span></a></li>
      <li class="hidden_beer"><a href="our-beers.php">Our Beers</a></li>
      <li class="hidden_beer"><a href="find-our-beers.php">Find Our Beers</a></li>
      <li><a href="photos.php">PHOTOS</a></li>
      <li><a href="community.php">COMMUNITY</a></li>
      <li><a href="store.php">STORE</a></li>
      <li><a href="about-us.php">ABOUT US</a></li>
      <li id="contact"><a href="javascript:void(0)">CONTACT&emsp;<span class="da">&#9660;</span><span class="ra">&#9654;</span></a></li>
      <li class="hidden_contact"><a href="directions.php">Directions</a></li>
      <li class="hidden_contact"><a href="for-vendors.php">For Vendors</a></li>
      <li class="hidden_contact"><a href="employment.php">Employment</a></li>
      <li class="hidden_contact"><a href="contact-us.php">Contact Us</a></li>
    </ul>
  </nav> <!-- end navigtion bar -->

</header> <!-- end header -->
