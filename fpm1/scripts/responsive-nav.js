// on load
$(document).ready(function () {

  var isOpen = false;
  $("#responsive_menu_btn").click(function() {
    // console.log("Hello!");
    if (!isOpen) {
      $(".nav_menu_responsive").show();
      isOpen = true;
    } else {
      $(".nav_menu_responsive").hide();
      isOpen = false;
    }   // end if

  var beerIsOpen = false;;
  $("#beer").click( function() {
    if (!beerIsOpen) {
      $(".hidden_beer").show();
      $(".bra").hide();
      $(".bda").show();
      beerIsOpen = true;
    } else {
      $(".hidden_beer").hide();
      $(".bda").hide();
      $(".bra").show();
      beerIsOpen = false;
    }  // end if
  });

  var contactIsOpen = false;;
  $("#contact").click( function() {
    if (!contactIsOpen) {
      $(".hidden_contact").show();
      $(".cra").hide();
      $(".cda").show();
      contactIsOpen = true;
    } else {
      $(".hidden_contact").hide();
      $(".cda").hide();
      $(".cra").show();
      contactIsOpen = false;
    }  // end if
  });



  });

});
