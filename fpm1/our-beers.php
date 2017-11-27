<?php
    include "includes/head.php";
  ?>
  <link rel="stylesheet"
        type="text/css"
        href="styles/our-beers.css"
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
      <h2>Ethically-sourced and home-brewed, our beers offer a smooth and delightful drinking experience.</h2>
    </div>
  </div>

  <div id="main_flex_wrapper">

    <div class="sub_flex_wrapper">
      <div class="beer_img">
        <img src="images/millards_american_ale.PNG" />
      </div>
      <div class="beer_description">
        <h3>Millard's American Ale</h3>
        <p  class="p1">A variation on American Light Ale utilizing all malted grains instead
          of rice and corn. The grain bill includes a malted barley base and
          lightly caramelized barley. It has the same low bitterness levels as
          American Light Ale using our estate grown Cascade hops. Our 13th
          President, Millard Fillmore is a native of Summerhill, and we thought
          it only fitting that we should name a beer for him. Millard's American
           Ale is a basic, easy drinking beer, best served ice cold.</p>
        <p class="p2">Details</br>Alc. 6% // IBUs 17.6</p>
      </div>
    </div>

    <div class="sub_flex_wrapper">
      <div class="beer_img">
        <img src="images/naked_neighbor_amber.PNG" alt="naked_neighbor_amber" />
      </div>
      <div class="beer_description">
        <h3>Naked Neighbor Amber</h3>
        <p class="p1">A German Altbier-style recipe resulting in a rich amber ale that is
          best when ages a month before drinking. Our estate grown Willamette,
          Cascade and Liberty hops provide flavor and aroma. Northern Brewer
          hops are used for bittering. The grain bill includes a malted barley
          base, malted wheat and Caramel and Chocolate malts. Summerhhill is
          well know for it's nudist camp and it is not uncommon for a cold Naked
           Neighbor to be sitting on our porch on  a hot summer evening.</p>
        <p class="p2">Details</br>Alc. 6% // IBUs 17.6</p>
      </div>
    </div>

    <div class="sub_flex_wrapper">
      <div class="beer_img">
        <img src="images/summer-hillbilly-fruit-wheat.PNG"/>
      </div>
      <div class="beer_description">
        <h3>Summer Hillbilly Fruit Wheat</h3>
        <p class="p1">An American Wheat recipe utilizing malted wheat, barley and Munich
          (barley) malt for body. Fruit puree is added (except for the apple,
          which has Hollenbecks' Cider)--allowing our Cascade and Willamette
          hops to take the lead in flavor. A relaxing way to enjoy the fruits of
           our northern Appalachian landscape.</p>
        <p class="p2">Details</br>Alc. 4% // IBUs 14</p>
      </div>
    </div>

    <div class="sub_flex_wrapper">
      <div class="beer_img">
        <img src="images/paper_money_ipa.PNG" alt="paper_money_ipa"/>
      </div>
      <div class="beer_description">
        <h3>Paper Money IPA</h3>
        <p class="p1">An American IPA judiciously hopped providing strong floral and citrus
           notes. Seven hop additions start with estate grown Nugget and
           Tettanger for brewing. Flavor and aroma come from three boil and two
           dry additions of Cascade, Citra and Amarillo hops A strong grain bill
            strikes a smooth balance with the hops. This beer pours hazy golden
            color with a frothy white head. Paper Money IPA is named after
            Summerhill resident Elbridge G Spaulding who as a US Congressman
            drafted the National Currency Bank Bill creating our National paper
            currency.</p>
          <p class="p2">Details</br>Alc. 7% // IBUs 78</p>
      </div>
    </div>

    <div class="sub_flex_wrapper">
      <div class="beer_img">
        <img src="images/iron_plow_porter.PNG" alt="iron_plow_porter"/>
      </div>
      <div class="beer_description">
        <h3>Iron Plow Porter</h3>
        <p class="p1">A brown porter or "session" stout that pours deep brown
          with a  beige head. Aroma is a nice balance of roasted grains and
          sweet malt. The complex grain bill includes Pale, Munich, Crystal and
          Chocolate malts for flavor; flaked barley for body and head retention;
           and malted black roasted barley for color. Northern Brewer hops are
           used for bittering and estate grown Cascade hops provide flavor and
           aroma. Iron Plow is named for Jethro Wood of nearby Scipio, NY,
           inventor of the iron plow with replaceable parts. Light in body  for
           a porter, this is an easy drinking brew.</p>
        <p class="p2">Details</br>Alc. 6% // IBUs 28</p>
      </div>
    </div>

    <!-- <div class="sub_flex_wrapper">
      <div class="beer_img">
        <img />
      </div>
      <div class="beer_description">
        <h3></h3>
        <p class="p1"></p>
        <p></p>
      </div>
    </div> -->

  </div>

<!-- NEW CODE ENDS HERE -->


  <!-- include footer  section -->
  <?php
    include "includes/footer.php";
  ?>

  </div> <!-- end main_container div -->

</body> <!-- end body -->
</html> <!-- end html -->
